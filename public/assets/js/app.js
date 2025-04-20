// public/assets/js/app.js

// ViewModelの定義 (簡単な例)
function AppViewModel() {
  var self = this; // this を別の変数に保持する Knockout の慣習
}

// HTMLドキュメントが読み込み終わったら実行
document.addEventListener("DOMContentLoaded", function () {
  // ViewModelのインスタンスを作成し、Knockout.jsに適用(バインド)する
  // HTML内の data-bind 属性がViewModelと連携し始める
  ko.applyBindings(new AppViewModel());

  //楽曲追加ボタンの処理
  const addSongBotton = document.getElementById("add-song-button");
  const songFileInput = document.getElementById("song-file-input");
  const uploadStatusDiv = document.getElementById("upload-status");
  //楽曲追加ボタンが押されたらファイル選択ダイアログを開く
  if (addSongBotton && songFileInput) {
    addSongBotton.addEventListener("click", function () {
      songFileInput.click();
    });
  }
  //ファイル洗濯時のイベント
  if (songFileInput) {
    songFileInput.addEventListener("change", function (event) {
      console.log("changeイベントが発生しました！");
      const files = event.target.files;
      //ファイルを選択したとき
      if (files.length > 0) {
        const selectedFile = files[0];
        console.log("ファイル選択:", selectedFile.name);
        uploadStatusDiv.textContent = `アップロード中: ${selectedFile.name}...`; // 処理中メッセージ

        uploadFile(selectedFile);

        event.target.value = null; // 値をリセット
      } else {
        // ファイル選択がキャンセルされた場合
        console.log("ファイル選択がキャンセルされました。");
        if (uploadStatusDiv) {
          uploadStatusDiv.textContent = "";
        }
      }
    });
  }
  function uploadFile(file) {
    const formData = new FormData();
    // 'song_file' というキーでファイルを追加 (サーバー側で受け取る際のキーになる)
    // FuelPHPのUploadクラスは通常フォーム要素のname属性を見るが、Ajaxではキー指定が確実
    formData.append("song_file", file);

    // fetch API を使ってサーバーにPOSTリクエストを送信
    fetch("/api/songs/upload", {
      // 送信先のAPIエンドポイントURL
      method: "POST",
      body: formData, // FormDataオブジェクトをbodyに指定
      // 注意: ファイル送信時は Content-Type ヘッダーを明示的に設定しない
      //       ブラウザが自動で multipart/form-data を設定してくれる
    })
      .then((response) => {
        // サーバーからの最初の応答を受け取る (HTTPステータスなど)
        if (!response.ok) {
          // HTTPステータスがエラー(4xx, 5xx)の場合
          // エラーレスポンスの内容をjsonで取得試行、失敗したらテキストでエラーを投げる
          return response
            .json()
            .catch(() => {
              throw new Error(`HTTP error! status: ${response.status}`);
            })
            .then((errData) => {
              // JSONでエラー詳細が返ってきた場合
              throw { status: response.status, data: errData };
            });
        }
        // 成功(2xx)の場合は、レスポンスボディをJSONとしてパース
        return response.json();
      })
      .then((data) => {
        // JSONデータの処理 (サーバー側で返した $response 配列が data になる)
        console.log("サーバーからの応答:", data);
        if (data.success) {
          // アップロード成功
          uploadStatusDiv.textContent = `成功: <span class="math-inline">\{data\.message\} \(</span>{data.file_info.name} として登録)`;
          // TODO: ここで楽曲一覧を再読み込みするなどの処理を追加する
        } else {
          // アップロード失敗 (サーバー側で success: false が返された場合)
          const errorMsg = data.errors ? data.errors.join(", ") : data.message;
          uploadStatusDiv.textContent = `エラー: ${errorMsg}`;
        }
      })
      .catch((error) => {
        // 通信エラーや処理中のエラーが発生した場合
        console.error("アップロードエラー:", error);
        let errorMessage = "アップロード中にエラーが発生しました。";
        if (error.data && error.data.message) {
          errorMessage = error.data.message; // サーバーからの詳細なエラーメッセージ
        } else if (error.message) {
          errorMessage = error.message; // 通信エラーなど
        }
        uploadStatusDiv.textContent = `エラー: ${errorMessage}`;
      });
  }
});
