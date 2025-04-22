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

document.addEventListener("DOMContentLoaded", function () {
  const createPlaylistButton = document.getElementById(
    "create-playlist-button"
  );
  const createPlaylistForm = document.getElementById("create-playlist-form");

  if (createPlaylistButton && createPlaylistForm) {
    createPlaylistButton.addEventListener("click", function () {
      // フォームの表示状態を切り替える (display: none <-> display: block など)
      if (
        createPlaylistForm.style.display === "none" ||
        createPlaylistForm.style.display === ""
      ) {
        createPlaylistForm.style.display = "block"; // 表示する
      } else {
        createPlaylistForm.style.display = "none"; // 非表示にする
      }
    });
  }

  // --- ↓ プレイリスト作成実行の処理を追加 ↓ ---
  const submitPlaylistButton = document.getElementById(
    "submit-playlist-button"
  );
  const newPlaylistNameInput = document.getElementById("new-playlist-name");
  const createPlaylistStatusSpan = document.getElementById(
    "create-playlist-status"
  );
  const playlistListUl = document.getElementById("playlist-list"); // ★ 一覧表示の<ul>要素

  if (
    submitPlaylistButton &&
    newPlaylistNameInput &&
    createPlaylistStatusSpan &&
    playlistListUl
  ) {
    submitPlaylistButton.addEventListener("click", function () {
      const playlistName = newPlaylistNameInput.value.trim(); // 入力値を取得し、前後の空白を削除

      if (playlistName === "") {
        createPlaylistStatusSpan.textContent =
          "プレイリスト名を入力してください。";
        createPlaylistStatusSpan.style.color = "red";
        return; // 名前が空なら何もしない
      }

      createPlaylistStatusSpan.textContent = "作成中...";
      createPlaylistStatusSpan.style.color = "black";
      submitPlaylistButton.disabled = true; // 連打防止

      // FormDataオブジェクトを作成し、名前を追加
      const formData = new FormData();
      formData.append("name", playlistName);

      // fetch APIでプレイリスト作成APIにPOSTリクエストを送信
      fetch("/api/playlists/create", {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          if (!response.ok) {
            // エラーレスポンスの場合
            return response
              .json()
              .catch(() => {
                throw new Error(`HTTP error! status: ${response.status}`);
              })
              .then((errData) => {
                throw { status: response.status, data: errData };
              });
          }
          return response.json(); // 成功レスポンスをJSONで取得
        })
        .then((data) => {
          console.log("プレイリスト作成応答:", data);
          if (data.success) {
            createPlaylistStatusSpan.textContent = data.message;
            createPlaylistStatusSpan.style.color = "green";
            newPlaylistNameInput.value = ""; // 入力欄をクリア
            createPlaylistForm.style.display = "none"; // フォームを隠す

            // 新しいプレイリスト情報をリストに追加する
            const newListItem = document.createElement("li");
            const newLink = document.createElement("a");
            newLink.href = `/playlist/view/${data.playlist.id}`; // サーバーから返されたIDを使う
            newLink.textContent = data.playlist.name; // サーバーから返された名前を使う
            const dateSpan = document.createElement("span");
            dateSpan.textContent = ` (作成日: ${new Date().toLocaleDateString()})`; // 仮の日付表示
            newListItem.appendChild(newLink);
            newListItem.appendChild(dateSpan);

            // 「まだありません」の表示を削除 (もしあれば)
            const noPlaylistLi = playlistListUl.querySelector("li:only-child");
            if (
              noPlaylistLi &&
              noPlaylistLi.textContent.includes("まだありません")
            ) {
              playlistListUl.innerHTML = ""; // 中身を一旦空にする
            }

            playlistListUl.appendChild(newListItem); // 新しい項目をリストに追加
          } else {
            // 作成失敗 (名前重複など)
            createPlaylistStatusSpan.textContent = `エラー: ${data.message}`;
            createPlaylistStatusSpan.style.color = "red";
          }
        })
        .catch((error) => {
          console.error("プレイリスト作成エラー:", error);
          let errorMessage = "作成中にエラーが発生しました。";
          if (error.data && error.data.message) {
            errorMessage = error.data.message;
          } else if (error.message) {
            errorMessage = error.message;
          }
          createPlaylistStatusSpan.textContent = `エラー: ${errorMessage}`;
          createPlaylistStatusSpan.style.color = "red";
        })
        .finally(() => {
          // 成功・失敗に関わらず、ボタンを再度有効化
          submitPlaylistButton.disabled = false;
        });
    });
  }
}); // DOMContentLoaded
