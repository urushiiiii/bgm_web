// public/assets/js/app.js

/**
 * Knockout.js ViewModel Definition for the BGM Application
 */
function AppViewModel() {
  var self = this; // Standard convention for Knockout ViewModels

  // --- Observables for UI State & Data ---
  self.isPlaying = ko.observable(false); // Is audio currently playing?
  self.currentSong = ko.observable(null); // The song object currently loaded/playing {id, name, file_path}
  self.allSongs = ko.observableArray([]); // List of all songs for the "Add Song" modal
  self.currentPlaylistSongs = ko.observableArray([]); // List of songs in the currently viewed playlist
  self.currentPlaylistId = ko.observable(null); // ID of the currently viewed playlist
  self.songsList = ko.observableArray([]); // List of songs for the main song list page

  // --- Loading/Error Status Observables ---
  self.allSongsLoaded = ko.observable(false); // Flag: Have all songs been loaded?
  self.loadingSongsError = ko.observable(null); // Error message when loading all songs
  self.loadingPlaylistError = ko.observable(null); // Error message when loading playlist songs
  self.loadingSongsListError = ko.observable(null); // Error message when loading the main song list

  // --- Audio Player Reference ---
  self.audioElement = null; // Reference to the HTML <audio> element

  self.currentPlayingPlaylistSongs = ko.observableArray([]); // 現在再生中のプレイリストの曲リスト
  self.currentSongIndex = ko.observable(-1); // 再生中の曲のインデックス (-1 はプレイリスト再生中でない)

  // --- ↓ 予約用プレイリスト選択肢を追加 ↓ ---
  self.availablePlaylists = ko.observableArray([]); // モーダル用プレイリストリスト
  self.loadingAvailablePlaylistsError = ko.observable(null);
  self.selectedPlaylistId = ko.observable(null); // ★ 予約フォームで選択されたIDを保持する用も追加

  self.reservations = ko.observableArray([]); // 全体ページに表示する予約リスト
  self.loadingReservationsError = ko.observable(null);

  // --- ↓ 予約通知用のプロパティとメソッドを追加 ↓ ---
  self.currentNotification = ko.observable(null); // 表示する通知データ {id, playlist_name, reservation_datetime}
  self.reservationCheckInterval = null; // setIntervalのIDを保持する用

  self.currentVolume = ko.observable(0.8); // 0.0 から 1.0 の値。デフォルト80%

  /**
   * Initializes the HTML audio element and sets up event listeners.
   */
  self.initAudioPlayer = function (audioElement) {
    if (!audioElement) {
      console.error("Audio element not provided for init.");
      return;
    }
    self.audioElement = audioElement;
    console.log("Audio player initialized with element:", self.audioElement);

    // ★★★ 初期音量をViewModelの値で設定 ★★★
    self.audioElement.volume = self.currentVolume();
    console.log("Initial audio volume set to:", self.audioElement.volume);

    self.audioElement.addEventListener("ended", function () {
      console.log("Audio ended");
      self.isPlaying(false); // まず再生状態をfalseに

      // 現在プレイリスト再生中か？
      const currentPlaylist = self.currentPlayingPlaylistSongs();
      let currentIndex = self.currentSongIndex();

      if (
        currentPlaylist.length > 0 &&
        currentIndex >= 0 &&
        currentIndex < currentPlaylist.length - 1
      ) {
        // まだプレイリストに次の曲がある場合
        currentIndex++; // 次の曲のインデックスへ
        self.currentSongIndex(currentIndex); // インデックスを更新
        const nextSong = currentPlaylist[currentIndex]; // 次の曲データを取得
        console.log("Playing next song in playlist:", nextSong);
        self.loadAndPlay(nextSong, true); // 次の曲を再生 (第2引数trueでプレイリスト再生中と伝える)
      } else {
        // プレイリストの最後の曲が終わった、またはプレイリスト再生中でない場合
        console.log("Playlist finished or not playing playlist.");
        self.currentSong(null); // 現在の曲をクリア
        self.currentPlayingPlaylistSongs([]); // 再生中リストをクリア
        self.currentSongIndex(-1); // インデックスをリセット
        // 必要ならプレイヤーの表示を初期状態に戻すなど
      }
    });

    self.audioElement.addEventListener("timeupdate", function () {
      if (!self.audioElement) return;
      // TODO: Implement progress bar update logic here
    });

    self.audioElement.addEventListener("error", function (e) {
      console.error("Audio player error:", self.audioElement.error, e);
      self.isPlaying(false);
      self.currentSong(null);
      alert("音声ファイルの再生中にエラーが発生しました。");
    });

    self.audioElement.addEventListener("canplay", function () {
      if (!self.audioElement) return;
      console.log("Audio can play. Duration:", self.audioElement.duration);
      // TODO: Display song duration if needed
    });

    // ★★★ (任意) ブラウザ標準コントロール等で音量が変更された場合にViewModelに反映 ★★★
    self.audioElement.addEventListener("volumechange", function () {
      if (
        self.audioElement &&
        self.currentVolume() !== self.audioElement.volume
      ) {
        console.log(
          "Audio volume changed externally, updating ViewModel:",
          self.audioElement.volume
        );
        self.currentVolume(self.audioElement.volume); // ViewModelを更新 (これによりCookieも更新される)
      }
    });
  };

  /**
   * Loads a song and starts playback.
   */
  self.loadAndPlay = function (songData, isPlaylistTrack = false) {
    console.log(
      "Request to play song:",
      songData,
      "Is playlist track:",
      isPlaylistTrack
    );
    if (!self.audioElement) {
      console.error("Audio player not initialized.");
      return;
    }
    if (!songData || !songData.file_path) {
      console.error("Invalid song data provided.");
      return;
    }

    if (!isPlaylistTrack) {
      // ★ ここで isPlaylistTrack を参照している
      self.currentPlayingPlaylistSongs([]);
      self.currentSongIndex(-1);
      console.log("Playlist playback state reset.");
    }

    self.currentSong(songData);
    self.audioElement.src = songData.file_path;
    self.audioElement.load();
    var playPromise = self.audioElement.play();

    if (playPromise !== undefined) {
      playPromise
        .then((_) => {
          self.isPlaying(true);
          console.log("Playback started for:", songData.name);
          self.recordPlayLog(songData.id);
        })
        .catch((error) => {
          console.error("Playback failed:", error);
          self.isPlaying(false);
          self.currentSong(null);
          alert("音声の再生を開始できませんでした。");
        });
    }
  };

  // --- ↓ プレイリスト全体の再生を開始するメソッドを追加 ↓ ---
  self.playPlaylist = function () {
    // 現在表示しているプレイリストの楽曲リストを取得
    const songsToPlay = self.currentPlaylistSongs();
    if (!songsToPlay || songsToPlay.length === 0) {
      alert("このプレイリストには再生できる曲がありません。");
      return;
    }

    console.log(`プレイリスト再生開始: 全 ${songsToPlay.length} 曲`);
    // 再生中のプレイリスト情報をセット
    self.currentPlayingPlaylistSongs(songsToPlay);
    self.currentSongIndex(0); // 最初の曲から再生

    // 最初の曲のデータを取得して再生開始
    const firstSong = songsToPlay[0];
    self.loadAndPlay(firstSong, true); // 既存のメソッドを呼び出す
  };

  /**
   * Pauses playback.
   */
  self.pauseSong = function () {
    if (self.audioElement && self.isPlaying()) {
      self.audioElement.pause();
      self.isPlaying(false);
      console.log("Playback paused");
    }
  };

  /**
   * Resumes playback.
   */
  self.resumeSong = function () {
    if (self.audioElement && !self.isPlaying() && self.currentSong()) {
      var playPromise = self.audioElement.play();
      if (playPromise !== undefined) {
        playPromise
          .then((_) => {
            self.isPlaying(true);
            console.log("Playback resumed");
          })
          .catch((error) => {
            console.error("Resume failed:", error);
            alert("再生再開に失敗しました。");
          });
      }
    } else {
      console.log("No song to resume or already playing.");
    }
  };

  /**
   * Toggles play/pause state.
   */
  self.playPauseToggle = function () {
    if (self.isPlaying()) {
      self.pauseSong();
    } else {
      self.resumeSong();
    }
  };

  /**
   * Loads all songs for the "Add Song" modal.
   */
  self.loadAllSongs = function () {
    self.loadingSongsError(null);
    console.log("Loading all songs from API...");
    fetch("/api/songs")
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP ${response.status}`);
        }
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          self.allSongs(data.songs);
          self.allSongsLoaded(true);
          console.log(
            "全楽曲リスト読み込み完了:",
            self.allSongs().length,
            "件"
          );
        } else {
          throw new Error(data.message || "楽曲リストの取得に失敗しました。");
        }
      })
      .catch((error) => {
        console.error("楽曲リスト読み込みエラー:", error);
        self.loadingSongsError(error.message);
      });
  };

  /**
   * Loads songs for a specific playlist ID for the detail view.
   * ★★★ Returns a Promise that resolves when loading is complete or fails. ★★★
   * @param {number} playlistId - The ID of the playlist.
   * @return {Promise} A promise that resolves on success or rejects on error.
   */
  self.loadCurrentPlaylistSongs = function (playlistId) {
    if (!playlistId || isNaN(parseInt(playlistId))) {
      console.warn("Invalid playlistId:", playlistId);
      return Promise.reject("Invalid playlistId"); // ★ Promiseを返すように
    }
    playlistId = parseInt(playlistId);
    self.loadingPlaylistError(null);
    self.currentPlaylistSongs([]);
    self.currentPlaylistId(playlistId);
    console.log(`Loading songs for playlist ID: ${playlistId}...`);
    const apiUrl = `/api/playlists/${playlistId}/songs`;

    // ★★★ fetch の Promise を return する ★★★
    return fetch(apiUrl) // ← return を追加！
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP ${response.status}`);
        }
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          self.currentPlaylistSongs(data.songs);
          console.log(
            `プレイリストID:${playlistId} の楽曲読み込み完了:`,
            self.currentPlaylistSongs().length,
            "件"
          );
          // return data; // 成功時の解決値を返すことも可能 (今回は不要)
        } else {
          throw new Error(
            data.message || "プレイリスト楽曲の取得に失敗しました。"
          );
        }
      })
      .catch((error) => {
        console.error(
          `プレイリストID:${playlistId} の楽曲読み込みエラー:`,
          error
        );
        self.loadingPlaylistError(error.message);
        throw error; // ★ エラーを再throwしてPromiseをreject状態にする
      });
  };

  /**
   * Loads the main song list for the songs page.
   */
  self.loadSongsList = function () {
    self.loadingSongsListError(null);
    console.log("Loading main songs list from API...");
    fetch("/api/songs") // Uses the same API as loadAllSongs for now
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP ${response.status}`);
        }
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          self.songsList(data.songs);
          console.log(
            "楽曲一覧リスト読み込み完了:",
            self.songsList().length,
            "件"
          );
        } else {
          throw new Error(
            data.message || "楽曲一覧リストの取得に失敗しました。"
          );
        }
      })
      .catch((error) => {
        console.error("楽曲一覧リスト読み込みエラー:", error);
        self.loadingSongsListError(error.message);
      });
  };

  /**
   * Removes a song from the currently viewed playlist.
   */
  self.removeSong = function (songToRemove) {
    console.log("removeSong called with song data:", songToRemove);
    const songId = songToRemove ? songToRemove.id : null;
    const playlistId = self.currentPlaylistId();
    console.log(
      `Attempting to remove Song ID: ${songId} from Playlist ID: ${playlistId}`
    );

    if (
      !playlistId ||
      !songId ||
      isNaN(parseInt(playlistId)) ||
      isNaN(parseInt(songId))
    ) {
      console.error("Invalid playlistId or songId.");
      alert("エラー：削除対象を特定できませんでした。");
      return;
    }
    if (
      !confirm(`プレイリストから楽曲「${songToRemove.name}」を削除しますか？`)
    ) {
      return;
    }

    const apiUrl = `/api/playlists/${playlistId}/songs/${songId}`;
    console.log("Calling API URL:", apiUrl);

    fetch(apiUrl, { method: "DELETE" })
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP ${response.status}`);
        }
        if (response.status === 204) {
          return null;
        }
        return response.json();
      })
      .then((data) => {
        if (data === null || data.success) {
          const message = data ? data.message : "楽曲を削除しました。";
          console.log(message);
          self.currentPlaylistSongs.remove(songToRemove); // ★ Update observableArray
          const statusDiv = document.getElementById("playlist-status"); // Optional status message display
          if (statusDiv) {
            statusDiv.textContent = message;
            statusDiv.style.color = "green";
            setTimeout(() => (statusDiv.textContent = ""), 3000);
          } else {
            alert(message);
          }
        } else {
          alert(`エラー: ${data.message || "削除に失敗しました。"}`);
        }
      })
      .catch((error) => {
        console.error("楽曲削除エラー:", error);
        alert(`エラーが発生しました: ${error.message || "通信エラー"}`);
      });
  };

  /**
   * Deletes the entire playlist.
   */
  self.deletePlaylist = function (data, event) {
    console.log("deletePlaylist called. Event:", event);
    const button = event.currentTarget;
    if (!button) {
      console.error("Could not get button element.");
      alert("エラー: ボタン要素を取得できませんでした。");
      return;
    }

    const playlistId = button.getAttribute("data-playlist-id");
    const playlistName = button.getAttribute("data-playlist-name");
    console.log(
      `Attempting to delete Playlist ID: ${playlistId}, Name: ${playlistName}`
    );

    if (!playlistId || !playlistName || isNaN(parseInt(playlistId))) {
      console.error("Invalid playlistId or playlistName.");
      alert("エラー: 削除対象のプレイリスト情報を取得できませんでした。");
      return;
    }
    if (
      !confirm(
        `プレイリスト「${playlistName}」を削除しますか？\nこの操作は元に戻せません。関連する予約も削除されます。`
      )
    ) {
      return;
    }

    const apiUrl = `/api/playlists/${playlistId}`;
    console.log(`Calling DELETE API URL: ${apiUrl}`);

    fetch(apiUrl, { method: "DELETE" })
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP ${response.status}`);
        }
        if (response.status === 204) {
          return null;
        }
        return response.json();
      })
      .then((data) => {
        const message = data ? data.message : "プレイリストを削除しました。";
        console.log(message);
        alert(message);
        window.location.href = "/"; // Redirect to home page
      })
      .catch((error) => {
        console.error("プレイリスト削除エラー:", error);
        alert(`エラーが発生しました: ${error.message || "通信エラー"}`);
      });
  };
  /**
   * 再生ログを記録するAPIを呼び出すメソッド (内部用)
   * @param {number} songId - 記録する楽曲ID
   */
  self.recordPlayLog = function (songId) {
    // songId が数値として有効かチェック
    if (!songId || isNaN(parseInt(songId))) {
      console.warn("Invalid songId passed to recordPlayLog:", songId);
      return; // 無効なIDなら何もしない
    }
    songId = parseInt(songId); // 念のため整数に変換
    console.log(`再生ログ記録API呼び出し (Song ID: ${songId})`);

    // --- ↓ fetch 処理を実行する (コメントアウトを解除) ↓ ---
    fetch("/api/logs/play", {
      // ★ APIエンドポイントを確認
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        // --- ▼ CSRF対策が必要な場合 ▼ ---
        // FuelPHPのデフォルト設定ではPOSTリクエストにCSRFトークンが必要です。
        // トークンをどこか(例: HTMLのmetaタグ)に埋め込んでおき、JSで取得してヘッダーに追加します。
        // 例: const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        // if (csrfToken) { headers['X-CSRF-Token'] = csrfToken; }
        // 今回はまずトークンなしで試してみて、もしCSRF関連のエラーが出たら対策を追加しましょう。
        // --- ▲ CSRF対策ここまで ▲ ---
      },
      body: JSON.stringify({ song_id: songId }), // ★ Controller側(Input::json)で受け取るキー名に合わせる
    })
      .then((response) => {
        // 応答ステータスをチェック (200 OK or 201 Created など)
        if (!response.ok) {
          // エラーレスポンスの処理 (JSON形式を試みる)
          return response
            .json()
            .catch(() => {
              // JSONパース失敗時はステータスコードでエラーを生成
              throw new Error(
                `ログ記録APIエラー! HTTP status: ${response.status}`
              );
            })
            .then((errData) => {
              // JSON形式のエラーデータがあればそれを含むエラーを生成
              throw { status: response.status, data: errData };
            });
        }
        // 成功時 (JSONボディは必須ではないので、なくてもエラーにしない)
        return response.json().catch(() => null);
      })
      .then((data) => {
        // APIからの成功応答を処理
        if (data === null || data.success) {
          console.log(
            "再生ログ記録成功:",
            data ? data.message : "(No content)"
          );
        } else {
          // APIが success: false を返した場合
          console.error("再生ログ記録失敗:", data.message || "不明な応答");
        }
      })
      .catch((error) => {
        // 通信エラーや上記の throw で捕捉されたエラー
        console.error("再生ログ記録API呼び出しエラー:", error);
        // ユーザーに直接エラーを見せる必要は低いことが多い
      });
    // --- ↑ ここまで fetch 処理 ↑ ---
  }; // recordPlayLog メソッドの終わり
  // --- ↓ 予約用プレイリスト一覧を読み込むメソッドを追加 ↓ ---
  self.loadAvailablePlaylists = function () {
    self.loadingAvailablePlaylistsError(null);
    console.log("Loading available playlists from API...");

    fetch("/api/playlists") // 作成したAPIを呼び出す
      .then((response) => {
        if (!response.ok) throw new Error(`HTTP ${response.status}`);
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          self.availablePlaylists(data.playlists); // observableArrayを更新
          console.log(
            "利用可能なプレイリスト読み込み完了:",
            self.availablePlaylists().length,
            "件"
          );
        } else {
          throw new Error(
            data.message || "利用可能なプレイリストの取得に失敗しました。"
          );
        }
      })
      .catch((error) => {
        console.error("利用可能なプレイリスト読み込みエラー:", error);
        self.loadingAvailablePlaylistsError(error.message);
      });
  };

  self.loadReservations = function () {
    self.loadingReservationsError(null);
    console.log("Loading reservations from API...");

    fetch("/api/reservations") // ★これから作るAPIエンドポイント
      .then((response) => {
        if (!response.ok) throw new Error(`HTTP ${response.status}`);
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          self.reservations(data.reservations); // observableArray を更新
          console.log(
            "予約一覧読み込み完了:",
            self.reservations().length,
            "件"
          );
        } else {
          throw new Error(data.message || "予約一覧の取得に失敗しました。");
        }
      })
      .catch((error) => {
        console.error("予約一覧読み込みエラー:", error);
        self.loadingReservationsError(error.message);
      });
  };
  self.deleteReservation = function (reservationToDelete) {
    // ★ 引数は予約データ ★
    console.log(
      "deleteReservation called with reservation data:",
      reservationToDelete
    );
    // ↓ 予約IDを正しく取得 ↓
    const reservationId = reservationToDelete ? reservationToDelete.id : null;
    if (!reservationId || isNaN(parseInt(reservationId))) {
      console.error("Invalid reservationId. Aborting delete.", reservationId);
      alert("エラー：削除対象の予約を特定できませんでした。");
      return;
    }
    const playlistName =
      reservationToDelete.playlist_name || "不明なプレイリスト"; // 名前表示用に
    const reservationTime =
      reservationToDelete.reservation_datetime || "不明な日時";

    if (
      !confirm(
        `予約 (プレイリスト: ${playlistName}, 日時: ${new Date(
          reservationTime
        ).toLocaleString()}) を削除しますか？`
      )
    ) {
      return; // キャンセル
    }

    console.log(`予約ID: ${reservationId} を削除します。`);
    // ★★★ API URL を修正 ★★★
    const apiUrl = `/api/reservations/delete/${reservationId}`; // ★ 変更後のURL ★
    console.log(`Calling DELETE API URL: ${apiUrl}`);

    fetch(apiUrl, { method: "DELETE" })
      .then((response) => {
        /* ... (前回と同様の応答処理) ... */
        if (!response.ok) {
          throw new Error(`HTTP ${response.status}`);
        }
        if (response.status === 204) {
          return null;
        }
        return response.json();
      })
      .then((data) => {
        if (data === null || data.success) {
          const message = data ? data.message : "予約を削除しました。";
          console.log(message);
          // ★ observableArray から削除 ★
          self.reservations.remove(reservationToDelete);
          alert(message); // またはメッセージ表示
        } else {
          alert(`エラー: ${data.message || "削除に失敗しました。"}`);
        }
      })
      .catch((error) => {
        console.error("予約削除エラー:", error);
        alert(`エラーが発生しました: ${error.message || "通信エラー"}`);
      });
  };
  // --- ↓ 予約編集用のプロパティとメソッドを追加 ↓ ---
  self.isEditingReservation = ko.observable(false); // モーダルが編集モードかどうかのフラグ
  self.editingReservationId = ko.observable(null); // 現在編集中の予約ID

  // 予約フォームにデータをセットするヘルパー関数
  self.setReservationFormData = function (reservation) {
    if (reservation) {
      // 日時文字列 (YYYY-MM-DD HH:MM:SS) から日付と時刻を分離
      const dateTime = new Date(
        reservation.reservation_datetime.replace(/-/g, "/")
      ); // Safari等での互換性考慮
      const dateStr =
        dateTime.getFullYear() +
        "-" +
        ("0" + (dateTime.getMonth() + 1)).slice(-2) +
        "-" +
        ("0" + dateTime.getDate()).slice(-2);
      const timeStr =
        ("0" + dateTime.getHours()).slice(-2) +
        ":" +
        ("0" + dateTime.getMinutes()).slice(-2);

      self.selectedPlaylistId(reservation.playlist_id); // ドロップダウンの選択
      document.getElementById("reservation-date").value = dateStr; // 日付入力欄
      document.getElementById("reservation-time").value = timeStr; // 時刻入力欄
    } else {
      // データがなければフォームをクリア
      self.selectedPlaylistId(null);
      document.getElementById("reservation-date").value = "";
      document.getElementById("reservation-time").value = "";
    }
    // エラーメッセージもクリア
    const reservationStatusDiv = document.getElementById("reservation-status");
    if (reservationStatusDiv) reservationStatusDiv.textContent = "";
  };

  // 編集ボタンがクリックされたときに呼び出されるメソッド
  self.startEditReservation = function (reservationToEdit) {
    console.log("Editing reservation:", reservationToEdit);
    self.isEditingReservation(true); // 編集モードにする
    self.editingReservationId(reservationToEdit.id); // 編集対象IDを保持

    // APIから最新の予約データを取得してフォームにセット (リストのデータを使うだけでも良いが、APIを使う方が確実)
    // または、引数の reservationToEdit をそのまま使う (今回はこちらで実装)
    self.setReservationFormData(reservationToEdit);

    // 利用可能なプレイリストを読み込む (ドロップダウン用、未読込なら)
    if (self.availablePlaylists().length === 0) {
      self.loadAvailablePlaylists();
    }

    // モーダルを表示
    const reservationModal = document.getElementById("reservation-modal");
    if (reservationModal) reservationModal.style.display = "block";
  };

  // 予約時刻をチェックするメソッド
  self.checkReservations = function () {
    const now = new Date();
    console.log("予約チェック実行:", now.toLocaleTimeString()); // 定期実行されているか確認

    // ViewModelが保持している予約リスト(status='reserved'のみ対象にすべきだが、一旦全件見る)
    const upcomingReservations = self.reservations(); // 現在ロード済みの予約リスト

    let notificationToShow = null;

    // 未通知('reserved')で時間が来た予約を探す
    for (const reservation of upcomingReservations) {
      const reservationTime = new Date(
        reservation.reservation_datetime.replace(/-/g, "/")
      );
      if (
        reservationTime <= now &&
        reservation.status === "reserved" &&
        !self.currentNotification()
      ) {
        console.log("通知対象の予約を発見:", reservation);
        notificationToShow = {
          id: reservation.id,
          playlist_name: reservation.playlist_name,
          reservation_datetime: reservation.reservation_datetime,
          playlist_id: reservation.playlist_id, // ★ playlist_id を追加 ★
        };
        break;
      }
    }
    if (notificationToShow) {
      // ★★★ 通知済みステータス更新API呼び出しをここに追加 ★★★
      // 例: self.markReservationAsNotified(notificationToShow.id);
      // このAPI呼び出しが成功してから self.currentNotification をセットするのが望ましい
      self.currentNotification(notificationToShow); // 仮で先にセット
      console.log("通知を表示します:", self.currentNotification());
    }

    // ----------------------------------------------------------------
    // TODO: 将来的には、ここで '/api/reservations/upcoming' のようなAPIを呼び出し、
    //       サーバー側でフィルタリングされた「もうすぐ時間になる未通知の予約」
    //       リストを取得する方が効率的＆正確です。
    // ----------------------------------------------------------------
  };

  // 通知バナーを閉じるメソッド (実装)
  self.dismissNotification = function () {
    const notification = self.currentNotification();
    if (notification && notification.id) {
      console.log("通知を閉じます (キャンセルとしてマーク):", notification);
      const reservationId = notification.id;
      const apiUrl = `/api/reservations/${reservationId}/status`;

      // APIを呼び出してステータスを 'canceled' に更新
      fetch(apiUrl, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ status: "canceled" }), // 新しいステータスを送信
      })
        .then((response) => {
          if (!response.ok) {
            console.error(
              `予約ステータス更新APIエラー: HTTP ${response.status}`
            );
          }
          return response.json().catch(() => null); // ボディはなくてもOK
        })
        .then((data) => {
          if (data && data.success) {
            console.log("予約ステータスを canceled に更新しました。");
          } else {
            console.warn("予約ステータス更新API応答なし、または失敗。", data);
          }
        })
        .catch((error) =>
          console.error("予約ステータス更新API呼び出しエラー:", error)
        )
        .finally(() => {
          self.currentNotification(null); // APIの結果に関わらず、とりあえずバナーは閉じる
          // 必要なら予約一覧を再読み込み
          // self.loadReservations();
        });
    } else {
      self.currentNotification(null); // 念のためクリア
    }
  };

  // 通知バナーの再生ボタンを押したときの処理 (実装)
  self.playFromNotification = function () {
    const notification = self.currentNotification();
    if (notification && notification.id && notification.playlist_id) {
      // playlist_id があるか確認
      console.log("通知から再生を開始します:", notification);
      const reservationId = notification.id;
      const playlistIdToPlay = notification.playlist_id;
      const apiUrl = `/api/reservations/${reservationId}/status`;

      // APIを呼び出してステータスを 'played' に更新
      fetch(apiUrl, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ status: "played" }),
      })
        .then((response) => {
          if (!response.ok) {
            console.error(
              `予約ステータス更新APIエラー: HTTP ${response.status}`
            );
          }
          return response.json().catch(() => null);
        })
        .then((data) => {
          if (data && data.success) {
            console.log("予約ステータスを played に更新しました。");
          } else {
            console.warn("予約ステータス更新API応答なし、または失敗。", data);
          }
        })
        .catch((error) =>
          console.error("予約ステータス更新API呼び出しエラー:", error)
        )
        .finally(() => {
          // APIの結果に関わらず画面遷移を実行 (失敗しても再生は試みる)
          self.currentNotification(null); // 通知をクリア
          // プレイリスト詳細ページへ遷移
          const targetUrl = `/playlist/view/${playlistIdToPlay}?autoplay=1`; // ← 末尾に ?autoplay=1 を追加
          console.log(
            `プレイリスト詳細ページへ遷移し、自動再生を試みます: ${targetUrl}`
          );
          window.location.href = targetUrl; // ★ ページ遷移実行
        });
    } else {
      console.error(
        "通知データに再生に必要な情報(ID or PlaylistID)がありません。",
        notification
      );
      self.currentNotification(null); // 不正なデータなのでクリア
      alert("エラー: 再生に必要な情報を取得できませんでした。");
    }
  };

  // --- ViewModelの初期化処理 ---
  self.initialize = function () {
    // ページ読み込み時に実行したい処理
    console.log("ViewModel Initializing...");
    // --- ↓ Cookieから音量を読み込む処理を追加 ↓ ---
    const savedVolume = getCookie("player_volume"); // 'player_volume' という名前で保存/読み込み
    if (savedVolume !== null && !isNaN(parseFloat(savedVolume))) {
      let volumeValue = parseFloat(savedVolume);
      // 値の範囲を 0.0 ～ 1.0 に補正
      volumeValue = Math.max(0, Math.min(1, volumeValue));
      self.currentVolume(volumeValue); // ViewModelのobservableを更新
      console.log("Saved volume loaded from cookie:", volumeValue);
    } else {
      console.log("No saved volume found in cookie or invalid value.");
      // Cookieがない場合はデフォルト値(0.8)が使われる
    }
    // 定期的に予約をチェックするタイマーを開始 (例: 60秒ごと)
    self.reservationCheckInterval = setInterval(
      self.checkReservations,
      60 * 1000
    ); // 60000ミリ秒
    // 最初のチェックを少し遅らせて実行しても良いかも
    // setTimeout(self.checkReservations, 5000); // 5秒後に初回チェックなど

    // ページ種別に応じて初期データを読み込む (これはDOMContentLoadedに移動)
  };

  self.currentVolume.subscribe(function (newVolume) {
    console.log("Volume changed via ViewModel:", newVolume);
    // <audio> 要素の音量を更新
    if (self.audioElement) {
      self.audioElement.volume = newVolume;
    }
    // Cookieに新しい音量値を保存 (有効期間1年)
    setCookie("player_volume", newVolume, 365);
    console.log("Volume saved to cookie.");
  });
} // --- End of AppViewModel ---

/**
 * File Upload Function (using fetch)
 */
function uploadFile(file) {
  // (内容は変更なし - 前回のコードを参照)
  const uploadStatusDiv = document.getElementById("upload-status");
  if (!uploadStatusDiv) {
    console.error('Element with id "upload-status" not found.');
    return;
  }
  uploadStatusDiv.textContent = `アップロード中: ${file.name}...`;
  uploadStatusDiv.style.color = "black";
  const formData = new FormData();
  formData.append("song_file", file);
  fetch("/api/songs/upload", { method: "POST", body: formData })
    .then((response) => {
      /* ... */ if (!response.ok) throw new Error(`HTTP ${response.status}`);
      return response.json();
    }) // Simplified error handling
    .then((data) => {
      if (data.success) {
        uploadStatusDiv.textContent = `成功: ${data.message} (${data.file_info.name} として登録)`;
        uploadStatusDiv.style.color = "green";
      } else {
        const errorMsg = data.errors ? data.errors.join(", ") : data.message;
        uploadStatusDiv.textContent = `エラー: ${errorMsg}`;
        uploadStatusDiv.style.color = "red";
      }
    })
    .catch((error) => {
      /* ... */ uploadStatusDiv.textContent = `エラー: ${error.message}`;
      uploadStatusDiv.style.color = "red";
    });
}

/**
 * Cookieを設定する関数
 * @param {string} name - Cookie名
 * @param {string} value - 設定する値
 * @param {number} days - 有効日数 (省略時はセッションCookie)
 */
function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie =
    name + "=" + (value || "") + expires + "; path=/; SameSite=Lax"; // パスとSameSite属性も指定推奨
}

/**
 * 指定された名前のCookieを取得する関数
 * @param {string} name - Cookie名
 * @return {string|null} Cookieの値、存在しない場合は null
 */
function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

// ★★★ Execute when the HTML document is fully loaded ★★★
document.addEventListener("DOMContentLoaded", function () {
  // --- ① Initialize ViewModel and apply Knockout bindings ---
  const appViewModel = new AppViewModel();
  ko.applyBindings(appViewModel);
  console.log("Knockout ViewModel activated!");

  // --- Initialize Audio Player ---
  const audioElement = document.getElementById("audio-player");
  if (audioElement) {
    appViewModel.initAudioPlayer(audioElement);
  } else {
    console.error("Audio player element (#audio-player) not found!");
  }

  // --- ViewModelの初期化処理呼び出し --- ★★★ 追加 ★★★
  appViewModel.initialize();

  // --- ② Song Upload Event Listeners ---
  const addSongButton = document.getElementById("add-song-button");
  const songFileInput = document.getElementById("song-file-input");
  if (addSongButton && songFileInput) {
    addSongButton.addEventListener("click", () => songFileInput.click());
  }
  if (songFileInput) {
    songFileInput.addEventListener("change", (event) => {
      if (event.target.files.length > 0) {
        uploadFile(event.target.files[0]);
        event.target.value = null;
      } else {
        console.log("ファイル選択がキャンセルされました。");
      }
    });
  }

  // --- ③ プレイリスト作成関連のイベントリスナー設定 ---
  const createPlaylistButton = document.getElementById(
    "create-playlist-button"
  );
  const createPlaylistForm = document.getElementById("create-playlist-form");
  const submitPlaylistButton = document.getElementById(
    "submit-playlist-button"
  );
  const newPlaylistNameInput = document.getElementById("new-playlist-name");
  // ★ メッセージ表示用のspanを取得 (フォームの外にある想定)
  const createPlaylistStatusSpan = document.getElementById(
    "create-playlist-status"
  );
  const playlistListUl = document.getElementById("playlist-list"); // 一覧表示用のul

  // 「新しいプレイリストを作成する」ボタンのクリックイベント
  if (
    createPlaylistButton &&
    createPlaylistForm &&
    createPlaylistStatusSpan &&
    newPlaylistNameInput
  ) {
    createPlaylistButton.addEventListener("click", function () {
      // フォームの表示/非表示を切り替え
      const isHidden =
        createPlaylistForm.style.display === "none" ||
        createPlaylistForm.style.display === "";
      createPlaylistForm.style.display = isHidden ? "block" : "none";

      // ★ フォームが表示されるタイミングで実行する処理 ★
      if (isHidden) {
        createPlaylistStatusSpan.textContent = ""; // ★ 前回のメッセージをクリア
        newPlaylistNameInput.value = ""; // ★ 入力欄をクリア
        newPlaylistNameInput.focus(); // ★ 入力欄にフォーカスを当てる (任意)
      }
    });
  }

  // 「作成」ボタン（フォームの中）のクリックイベント
  if (
    submitPlaylistButton &&
    newPlaylistNameInput &&
    createPlaylistStatusSpan &&
    playlistListUl &&
    createPlaylistForm
  ) {
    submitPlaylistButton.addEventListener("click", function () {
      const playlistName = newPlaylistNameInput.value.trim(); // 入力値を取得

      // バリデーション: 名前が空でないか
      if (playlistName === "") {
        createPlaylistStatusSpan.textContent =
          "プレイリスト名を入力してください。";
        createPlaylistStatusSpan.style.color = "red";
        // 3秒後にエラーメッセージを消す (任意)
        setTimeout(() => {
          if (
            createPlaylistStatusSpan.textContent ===
            "プレイリスト名を入力してください。"
          )
            createPlaylistStatusSpan.textContent = "";
        }, 3000);
        return; // 処理中断
      }

      // API呼び出し中の表示とボタン無効化
      createPlaylistStatusSpan.textContent = "作成中...";
      createPlaylistStatusSpan.style.color = "black"; // メッセージ色をリセット
      submitPlaylistButton.disabled = true;

      // 送信するデータ準備 (FormData)
      const formData = new FormData();
      formData.append("name", playlistName);

      // プレイリスト作成API (POST /api/playlists/create) を呼び出し
      fetch("/api/playlists/create", {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          // レスポンス処理
          // エラーレスポンスも含めてJSONとして解析試行
          return response
            .json()
            .then((data) => ({
              ok: response.ok,
              status: response.status,
              data: data,
            }));
        })
        .then((result) => {
          // 結果処理
          console.log("プレイリスト作成応答:", result);
          if (result.ok) {
            // API成功 (HTTP 201 Created を想定)
            createPlaylistStatusSpan.textContent = result.data.message; // 成功メッセージ表示
            createPlaylistStatusSpan.style.color = "green";
            newPlaylistNameInput.value = ""; // 入力欄クリア
            createPlaylistForm.style.display = "none"; // ★ フォームは成功時に閉じる

            // ★★★ プレイリスト一覧の動的更新 (DOM操作) ★★★
            const newListItem = document.createElement("li");
            const newLink = document.createElement("a");
            // リンク先URLを正しく生成 (要件に合わせて調整)
            newLink.href = "/playlist/view/" + result.data.playlist.id; // ControllerからのIDを使用
            newLink.textContent = result.data.playlist.name; // Controllerからの名前を使用
            const dateSpan = document.createElement("span");
            // 作成日は new Date() だとズレるので、サーバーから返してもらうか、ここでは表示しない方が良いかも
            dateSpan.textContent = ` (作成日: ${new Date().toLocaleDateString()})`; // 仮表示
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
            // ★★★ ここまで ★★★

            // 成功メッセージを3秒後に消す
            setTimeout(() => {
              if (createPlaylistStatusSpan.textContent === result.data.message)
                createPlaylistStatusSpan.textContent = "";
            }, 3000);
          } else {
            // API失敗 (HTTP 4xx, 5xx - 例: 409 Conflict)
            createPlaylistStatusSpan.textContent = `エラー: ${
              result.data.message || "不明なエラー"
            }`; // サーバーからのメッセージを表示
            createPlaylistStatusSpan.style.color = "red";
            // ★ エラー時はフォームを閉じない ★
            // エラーメッセージを5秒後に消す (任意)
            setTimeout(() => {
              if (
                createPlaylistStatusSpan.textContent ===
                `エラー: ${result.data.message || "不明なエラー"}`
              )
                createPlaylistStatusSpan.textContent = "";
            }, 5000);
          }
        })
        .catch((error) => {
          // 通信エラーなど fetch 自体の失敗
          console.error("プレイリスト作成エラー:", error);
          createPlaylistStatusSpan.textContent = `エラー: ${
            error.message || "通信に失敗しました。"
          }`;
          createPlaylistStatusSpan.style.color = "red";
          // エラーメッセージを5秒後に消す (任意)
          setTimeout(() => {
            if (
              createPlaylistStatusSpan.textContent ===
              `エラー: ${error.message || "通信に失敗しました。"}`
            )
              createPlaylistStatusSpan.textContent = "";
          }, 5000);
        })
        .finally(() => {
          // 成功・失敗に関わらず最後に実行
          submitPlaylistButton.disabled = false; // ボタンを再度有効化
        });
    });
  }
  // --- ↑ ここまでプレイリスト作成関連 ↑ ---

  // --- ④ Playlist Detail Page - Add Song Modal Event Listeners ---
  const addSongToPlaylistButton = document.getElementById(
    "add-song-to-playlist-button"
  );
  const addSongModal = document.getElementById("add-song-modal");
  const cancelAddSongsButton = document.getElementById(
    "cancel-add-songs-button"
  );
  const submitAddSongsButton = document.getElementById(
    "submit-add-songs-button"
  );
  const addSongListDiv = document.getElementById("add-song-list");
  const addSongStatusDiv = document.getElementById("add-song-status");
  const playlistSongsTable = document.getElementById("playlist-songs-table");

  if (addSongToPlaylistButton && addSongModal) {
    addSongToPlaylistButton.addEventListener("click", () => {
      addSongModal.style.display = "block";
      appViewModel.loadAllSongs();
    });
  }
  if (cancelAddSongsButton && addSongModal) {
    cancelAddSongsButton.addEventListener("click", () => {
      addSongModal.style.display = "none"; /* Clear status/checks */
    });
  }
  if (
    submitAddSongsButton &&
    addSongListDiv &&
    addSongStatusDiv &&
    addSongModal &&
    playlistSongsTable
  ) {
    submitAddSongsButton.addEventListener("click", () => {
      const checkedBoxes = addSongListDiv.querySelectorAll(
        'input[type="checkbox"]:checked'
      );
      const songIdsToAdd = Array.from(checkedBoxes).map((cb) => cb.value); // More concise way
      if (songIdsToAdd.length === 0) {
        /* ... Show error ... */ return;
      }
      const currentPlaylistId =
        playlistSongsTable.getAttribute("data-playlist-id");
      if (!currentPlaylistId) {
        /* ... Show error ... */ return;
      }
      addSongStatusDiv.textContent = "楽曲を追加中...";
      /* ... */ submitAddSongsButton.disabled = true;
      const formData = new FormData();
      songIdsToAdd.forEach((id) => formData.append("song_ids[]", id));
      const apiUrl = `/api/playlists/${currentPlaylistId}/songs`;
      fetch(apiUrl, { method: "POST", body: formData })
        .then((response) => {
          if (!response.ok) {
            /* ... Error ... */ return response
              .json()
              .catch(/*...*/)
              .then((err) => {
                throw { data: err };
              });
          }
          return response.json();
        })
        .then((data) => {
          if (data.success) {
            /* ... Success message, close modal ... */ appViewModel.loadCurrentPlaylistSongs(
              currentPlaylistId
            );
          } // Refresh list
          else {
            /* ... Error display ... */
          }
        })
        .catch((error) => {
          /* ... Error handling ... */
        })
        .finally(() => {
          submitAddSongsButton.disabled = false;
          checkedBoxes.forEach((cb) => (cb.checked = false));
        });
    });
  }

  // --- ↓ 予約作成モーダルの表示制御を追加 ↓ ---
  const createReservationButton = document.getElementById(
    "create-reservation-button"
  ); // 全体ページのボタン
  const reservationModal = document.getElementById("reservation-modal"); // モーダル本体
  const cancelReservationButton = document.getElementById(
    "cancel-reservation-button"
  ); // モーダルのキャンセルボタン
  const reservationStatusDiv = document.getElementById("reservation-status"); // メッセージ表示用

  // 「新規予約を作成」ボタンがクリックされたらモーダルを表示
  if (createReservationButton && reservationModal) {
    createReservationButton.addEventListener("click", function () {
      // モーダル表示前に中身をリセット（任意）
      if (reservationStatusDiv) reservationStatusDiv.textContent = "";
      const playlistSelect = document.getElementById("reservation-playlist");
      if (playlistSelect) playlistSelect.selectedIndex = 0; // ドロップダウンを初期状態に
      document.getElementById("reservation-date").value = ""; // 日付クリア
      document.getElementById("reservation-time").value = ""; // 時刻クリア

      reservationModal.style.display = "block"; // モーダルを表示
      // ★★★ ViewModelのメソッドを呼び出してプレイリストを読み込む ★★★
      appViewModel.loadAvailablePlaylists();
    });
  }

  // モーダルの「キャンセル」ボタンがクリックされたらモーダルを非表示
  if (cancelReservationButton && reservationModal) {
    cancelReservationButton.addEventListener("click", function () {
      reservationModal.style.display = "none"; // モーダルを非表示
    });
  }
  // --- ↑ ここまで追加 ↑ ---

  const saveReservationButton = document.getElementById(
    "save-reservation-button"
  );
  const reservationPlaylistSelect = document.getElementById(
    "reservation-playlist"
  );
  const reservationDateInput = document.getElementById("reservation-date");
  const reservationTimeInput = document.getElementById("reservation-time");

  if (
    saveReservationButton &&
    reservationPlaylistSelect &&
    reservationDateInput &&
    reservationTimeInput &&
    reservationStatusDiv &&
    reservationModal
  ) {
    saveReservationButton.addEventListener("click", function () {
      // 1. 入力値を取得
      const playlistId = appViewModel.selectedPlaylistId(); // ViewModelから選択中のIDを取得
      const dateValue = reservationDateInput.value;
      const timeValue = reservationTimeInput.value;

      // 2. バリデーション (必須チェック、未来日時チェックなど)
      let errors = [];
      if (!playlistId) {
        errors.push("プレイリストを選択してください。");
      }
      if (!dateValue) {
        errors.push("日付を入力してください。");
      }
      if (!timeValue) {
        errors.push("時刻を入力してください。");
      }
      if (dateValue && timeValue) {
        const selectedDateTime = new Date(dateValue + "T" + timeValue + ":00");
        // 簡単な未来チェック (5分後以降など、少し余裕を持たせても良い)
        if (selectedDateTime <= new Date(Date.now() + 5 * 60 * 1000)) {
          errors.push("現在時刻より十分に未来の日時を指定してください。");
        }
      }
      if (errors.length > 0) {
        reservationStatusDiv.textContent = errors.join(" ");
        reservationStatusDiv.style.color = "red";
        return; // エラーがあれば中断
      }

      // 状態メッセージとボタン無効化
      reservationStatusDiv.textContent = appViewModel.isEditingReservation()
        ? "予約を更新中..."
        : "予約を保存中...";
      reservationStatusDiv.style.color = "black";
      saveReservationButton.disabled = true;

      // 3. 送信するデータを作成
      const formData = new FormData();
      formData.append("playlist_id", playlistId);
      formData.append("date", dateValue);
      formData.append("time", timeValue);

      // ★★★ 編集モードか新規作成モードかでAPIのURLとメソッドを決定 ★★★
      let apiUrl;
      let method = "POST"; // 更新もPOSTで受け付けるようにAPIを設計した場合
      let successStatusCode = 201; // デフォルトは作成成功(201)

      if (appViewModel.isEditingReservation()) {
        // ---- 編集モードの場合 ----
        const editingId = appViewModel.editingReservationId();
        if (!editingId) {
          alert(
            "エラー: 編集対象の予約IDが見つかりません。ページを再読み込みしてください。"
          );
          saveReservationButton.disabled = false;
          return;
        }
        apiUrl = `/api/reservations/update/${editingId}`; // 更新APIのURL
        successStatusCode = 200; // 更新成功は通常200 OK
      } else {
        // ---- 新規作成モードの場合 ----
        apiUrl = "/api/reservations/create"; // 作成APIのURL
      }
      console.log(`Calling API: ${method} ${apiUrl}`);

      // 4. APIを呼び出す
      fetch(apiUrl, { method: method, body: formData })
        .then((response) => {
          // エラーレスポンスもJSONで受け取る想定で処理
          return response.json().then((data) => ({
            ok: response.ok,
            status: response.status,
            data: data,
          }));
        })
        .then((result) => {
          console.log(
            `予約 ${
              appViewModel.isEditingReservation() ? "更新" : "作成"
            } 応答:`,
            result
          );
          if (result.ok) {
            // HTTPステータスが2xxの場合 (期待するのは 200 or 201)
            alert(result.data.message); // 成功メッセージを表示
            reservationModal.style.display = "none"; // モーダルを閉じる

            // ★★★ 予約一覧を再読み込みして更新 ★★★
            console.log("予約処理成功、リストを再読み込みします。");
            appViewModel.loadReservations(); // ViewModelのメソッド呼び出し
          } else {
            // APIがエラーを返した場合 (4xx, 5xx)
            reservationStatusDiv.textContent = `エラー (${result.status}): ${
              result.data.message || "不明なエラー"
            }`;
            reservationStatusDiv.style.color = "red";
          }
        })
        .catch((error) => {
          // 通信エラーなどの場合
          console.error(
            `予約 ${
              appViewModel.isEditingReservation() ? "更新" : "作成"
            } Fetchエラー:`,
            error
          );
          reservationStatusDiv.textContent = `エラー: 通信に失敗しました。 (${
            error.message || "詳細不明"
          })`;
          reservationStatusDiv.style.color = "red";
        })
        .finally(() => {
          saveReservationButton.disabled = false; // ボタンを再度有効化
          // 編集モードを解除し、フォーム内容をリセット（成功・失敗に関わらず）
          if (appViewModel.isEditingReservation()) {
            appViewModel.isEditingReservation(false);
            appViewModel.editingReservationId(null);
          }
          // 新規作成の場合もフォームをクリアした方が良いかも
          appViewModel.setReservationFormData(null); // フォームクリアヘルパー呼び出し
        });
    });
  }
  // ★★★ 全体ページ（ホーム）の予約一覧を初期読み込み ★★★
  const reservationsListTable = document.getElementById(
    "reservations-list-table"
  ); // Viewに追加したテーブルID
  if (reservationsListTable) {
    // 全体ページかどうかを判定
    console.log("全体ページ読み込み、予約リスト取得開始...");
    appViewModel.loadReservations(); // ★ ViewModelのメソッドを呼び出し ★
  }

  // --- ⑤ Initial data loading based on page ---
  if (playlistSongsTable) {
    // If on playlist detail page
    const currentPlaylistId =
      playlistSongsTable.getAttribute("data-playlist-id");
    if (currentPlaylistId) {
      console.log(
        "プレイリスト詳細ページ読み込み、楽曲リスト取得開始 ID:",
        currentPlaylistId
      );

      // ★★★ 楽曲リスト読み込み完了後に自動再生チェックを行う ★★★
      appViewModel
        .loadCurrentPlaylistSongs(currentPlaylistId) // loadメソッドはPromiseを返す
        .then(() => {
          // --- ↓↓↓ 読み込み成功後に実行される処理 ↓↓↓ ---
          console.log("楽曲リスト読み込み成功、自動再生チェックへ");
          const urlParams = new URLSearchParams(window.location.search);
          const autoplay = urlParams.get("autoplay");

          if (autoplay === "1") {
            console.log(
              "Autoplay parameter detected. Starting playlist playback..."
            );
            // 少し遅延させる (必須ではないかも)
            setTimeout(() => {
              if (typeof appViewModel.playPlaylist === "function") {
                appViewModel.playPlaylist(); // ★ プレイリスト再生を開始
              } else {
                console.error("playPlaylist method not found");
              }
            }, 100); // 0.1秒後に実行

            try {
              history.replaceState(null, "", window.location.pathname); // URLパラメータ削除
              console.log("Autoplay parameter removed from URL.");
            } catch (e) {
              console.warn("Could not remove autoplay parameter.");
            }
          }
          // --- ↑↑↑ 読み込み成功後に実行される処理 ↑↑↑ ---
        })
        .catch((error) => {
          // 楽曲リスト読み込み失敗時の処理
          console.error(
            "自動再生前の楽曲リスト読み込みに失敗しました。",
            error
          );
          // 必要ならユーザーにエラーメッセージ表示 (ViewModelのloadingPlaylistErrorを使うなど)
        });
      // ★★★ ここまで修正 ★★★
    }
  }
  const songsListTable = document.getElementById("songs-list-table"); // ★ Get song list table ID
  if (songsListTable) {
    // If on main song list page
    console.log("楽曲一覧ページ読み込み、リスト取得開始...");
    appViewModel.loadSongsList(); // ★ Load the main song list
  }
}); // ★★★ End of DOMContentLoaded Listener ★★★
