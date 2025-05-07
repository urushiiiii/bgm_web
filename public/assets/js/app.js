// public/assets/js/app.js

/**
 * Knockout.js ViewModel
 */
function AppViewModel() {
  var self = this;

  // --- 楽曲一覧表示 ---
  self.songsList = ko.observableArray([]); // 楽曲一覧データ用
  self.loadingSongsListError = ko.observable(null); // 楽曲一覧取得エラー表示用
  self.allSongs = ko.observableArray([]); // モーダル用全曲リスト

  // --- 再生関連プロパティ ---
  self.isPlaying = ko.observable(false); // 再生中かどうか
  self.currentSong = ko.observable(null); // 現在再生中の楽曲
  self.currentPlaylistSongs = ko.observableArray([]); // プレイリスト再生用
  self.currentVolume = ko.observable(0.8); // オーディオの音量
  self.audioElement = null; // HTMLのオーディオ要素
  self.currentSongIndex = ko.observable(-1); // 再生中の曲のインデックス (-1 はプレイリスト再生中でない)

  // --- Session ---
  self.currentPlaylistId = ko.observable(null); // 直前で閲覧したプレイリストのID

  // --- Loading/Error Status Observables ---
  self.allSongsLoaded = ko.observable(false); // すべての楽曲がロードされたか確認
  self.loadingSongsError = ko.observable(null); // 楽曲取得エラーメッセージ
  self.loadingPlaylistError = ko.observable(null); // プレイリスト楽曲取得エラーメッセージ

  // --- オーディオプレイヤー ---
  self.currentPlayingPlaylistSongs = ko.observableArray([]); // 現在再生中のプレイリストの曲リスト

  // --- 予約用プレイリスト選択肢を追加 ---
  self.availablePlaylists = ko.observableArray([]); // モーダル用プレイリストリスト
  self.loadingAvailablePlaylistsError = ko.observable(null); //予約用プレイリストエラーメッセージ
  self.selectedPlaylistId = ko.observable(null); // 予約フォームで選択されたIDを保持する用も追加

  // --- 予約表示 ---
  self.reservations = ko.observableArray([]); // 全体ページに表示する予約リスト
  self.loadingReservationsError = ko.observable(null); //予約取得エラーメッセージ用

  // --- 予約通知用のプロパティとメソッドを追加 ---
  self.currentNotification = ko.observable(null); // 表示する通知データ {id, playlist_name, reservation_datetime}
  self.reservationCheckInterval = null; // setIntervalのIDを保持する用

  /**
   * オーディオ要素の初期化とイベントリスナー設定
   */
  self.initAudioPlayer = function (audioElement) {
    if (!audioElement) {
      console.error("Audio element not provided for init.");
      return;
    }
    self.audioElement = audioElement;
    console.log("Audio player initialized with element:", self.audioElement);

    //　初期音量をViewModelの値で設定
    self.audioElement.volume = self.currentVolume();
    console.log("Initial audio volume set to:", self.audioElement.volume);
    //　曲の再生が最後まで終わったとき
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
        currentIndex++;
        self.currentSongIndex(currentIndex);
        const nextSong = currentPlaylist[currentIndex];
        console.log("Playing next song in playlist:", nextSong);
        self.loadAndPlay(nextSong, true);
      } else {
        // プレイリストの最後の曲が終わった、またはプレイリスト再生中でない場合
        console.log("Playlist finished or not playing playlist.");
        self.currentSong(null);
        self.currentPlayingPlaylistSongs([]);
        self.currentSongIndex(-1);
      }
    });

    //エラーイベント
    self.audioElement.addEventListener("error", function (e) {
      console.error("Audio player error:", self.audioElement.error, e);
      self.isPlaying(false);
      self.currentSong(null);
      alert("音声ファイルの再生中にエラーが発生しました。");
    });

    /**
     * 指定された曲データが、現在ロードされている曲と同じかどうかを判定する
     */
    self.isCurrentSong = function (songData) {
      const current = self.currentSong();
      // 現在ロードされている曲があり、かつIDが一致するかどうか
      return current && songData && current.id === songData.id;
    };

    /**
     * 指定された曲データが、現在再生中(一時停止ではなく)かどうかを判定する
     */
    self.isCurrentlyPlaying = function (songData) {
      // 現在ロード中の曲と同じで、かつ再生中(isPlayingがtrue)か
      return self.isCurrentSong(songData) && self.isPlaying();
    };

    /**
     * リスト内の再生/一時停止ボタンがクリックされたときに呼び出されるメソッド
     */
    self.togglePlayPauseList = function (songData) {
      console.log("List togglePlayPause called for:", songData.name);
      if (self.isCurrentlyPlaying(songData)) {
        // もし再生中の曲の「一時停止」ボタンが押されたら -> 一時停止する
        self.pauseSong();
      } else if (self.isCurrentSong(songData)) {
        // もし一時停止中の曲の「再生」ボタンが押されたら -> 再開する
        self.resumeSong();
      } else {
        // もしまだ再生されていない曲の「再生」ボタンが押されたら -> 新しく再生する
        self.loadAndPlay(songData);
      }
    };

    //ブラウザ標準コントロール等で音量が変更された場合にViewModelに反映
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
   * 楽曲データを受け取り、それを<audio>要素に読み込んで再生を開始する
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
    //単独で再生した曲が終わったときに、勝手に以前のプレイリストの次の曲に進んでしまうのを防
    if (!isPlaylistTrack) {
      self.currentPlayingPlaylistSongs([]);
      self.currentSongIndex(-1);
      console.log("Playlist playback state reset.");
    }

    self.currentSong(songData);
    self.audioElement.src = songData.file_path;
    self.audioElement.load();

    //<audio> 要素に「再生を開始して！」と命令
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

  // --- プレイリスト全体の再生を開始するメソッド ---
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
    self.currentSongIndex(0);

    // 最初の曲のデータを取得して再生開始
    const firstSong = songsToPlay[0];
    self.loadAndPlay(firstSong, true);
  };

  /**
   * 一時停止
   */
  self.pauseSong = function () {
    if (self.audioElement && self.isPlaying()) {
      self.audioElement.pause();
      self.isPlaying(false);
      console.log("Playback paused");
    }
  };

  /**
   * 再生再開
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
   * 再生状態と一時停止状態を切り替える
   */
  self.playPauseToggle = function () {
    if (self.isPlaying()) {
      self.pauseSong();
    } else {
      self.resumeSong();
    }
  };

  /**
   * 「楽曲を追加」モーダル用に、全楽曲リストをAPIから読み込むメソッド
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
   * 特定のプレイリストの楽曲取得
   */
  self.loadCurrentPlaylistSongs = function (playlistId) {
    if (!playlistId || isNaN(parseInt(playlistId))) {
      console.warn("Invalid playlistId:", playlistId);
      return Promise.reject("Invalid playlistId");
    }
    playlistId = parseInt(playlistId);
    self.loadingPlaylistError(null);
    self.currentPlaylistSongs([]);
    self.currentPlaylistId(playlistId);
    console.log(`Loading songs for playlist ID: ${playlistId}...`);
    const apiUrl = `/api/playlists/${playlistId}/songs`;

    return fetch(apiUrl)
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
        throw error;
      });
  };

  /**
   * 楽曲一覧ページで楽曲データを読み込む用
   */
  self.loadSongsList = function () {
    self.loadingSongsListError(null);
    console.log("Loading main songs list from API...");
    fetch("/api/songs")
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
   * プレイリストから楽曲削除
   */
  self.removeSong = function (songToRemove) {
    const songId = songToRemove ? songToRemove.id : null;
    const playlistId = self.currentPlaylistId();

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
          self.currentPlaylistSongs.remove(songToRemove);
          const statusDiv = document.getElementById("playlist-status");
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
   * プレイリスト全体の削除
   */
  self.deletePlaylist = function (data, event) {
    const button = event.currentTarget;
    if (!button) {
      console.error("Could not get button element.");
      alert("エラー: ボタン要素を取得できませんでした。");
      return;
    }

    const playlistId = button.getAttribute("data-playlist-id");
    const playlistName = button.getAttribute("data-playlist-name");

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
        window.location.href = "/";
      })
      .catch((error) => {
        console.error("プレイリスト削除エラー:", error);
        alert(`エラーが発生しました: ${error.message || "通信エラー"}`);
      });
  };
  /**
   * 再生ログを記録するAPIを呼び出すメソッド
   */
  self.recordPlayLog = function (songId) {
    if (!songId || isNaN(parseInt(songId))) {
      console.warn("Invalid songId passed to recordPlayLog:", songId);
      return;
    }
    songId = parseInt(songId);

    fetch("/api/logs/play", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ song_id: songId }),
    })
      .then((response) => {
        if (!response.ok) {
          return response
            .json()
            .catch(() => {
              throw new Error(
                `ログ記録APIエラー! HTTP status: ${response.status}`
              );
            })
            .then((errData) => {
              throw { status: response.status, data: errData };
            });
        }
        // 成功時
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
      });
  };
  // 予約用プレイリスト一覧を読み込むメソッド
  self.loadAvailablePlaylists = function () {
    self.loadingAvailablePlaylistsError(null);
    console.log("Loading available playlists from API...");

    fetch("/api/playlists")
      .then((response) => {
        if (!response.ok) throw new Error(`HTTP ${response.status}`);
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          self.availablePlaylists(data.playlists);
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

  //データを読み込むメソッド
  self.loadReservations = function () {
    self.loadingReservationsError(null);
    fetch("/api/reservations")
      .then((response) => {
        if (!response.ok) throw new Error(`HTTP ${response.status}`);
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          self.reservations(data.reservations);
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
    console.log(
      "deleteReservation called with reservation data:",
      reservationToDelete
    );
    // 予約IDを正しく取得
    const reservationId = reservationToDelete ? reservationToDelete.id : null;
    if (!reservationId || isNaN(parseInt(reservationId))) {
      console.error("Invalid reservationId. Aborting delete.", reservationId);
      alert("エラー：削除対象の予約を特定できませんでした。");
      return;
    }
    const playlistName =
      reservationToDelete.playlist_name || "不明なプレイリスト";
    const reservationTime =
      reservationToDelete.reservation_datetime || "不明な日時";

    if (
      !confirm(
        `予約 (プレイリスト: ${playlistName}, 日時: ${new Date(
          reservationTime
        ).toLocaleString()}) を削除しますか？`
      )
    ) {
      return;
    }

    console.log(`予約ID: ${reservationId} を削除します。`);
    const apiUrl = `/api/reservations/delete/${reservationId}`;
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
        if (data === null || data.success) {
          const message = data ? data.message : "予約を削除しました。";
          console.log(message);
          self.reservations.remove(reservationToDelete);
          alert(message);
        } else {
          alert(`エラー: ${data.message || "削除に失敗しました。"}`);
        }
      })
      .catch((error) => {
        console.error("予約削除エラー:", error);
        alert(`エラーが発生しました: ${error.message || "通信エラー"}`);
      });
  };

  self.isEditingReservation = ko.observable(false); // モーダルが編集モードかどうかのフラグ
  self.editingReservationId = ko.observable(null); // 現在編集中の予約ID

  // 予約フォームにデータをセットするヘルパー関数
  self.setReservationFormData = function (reservation) {
    if (reservation) {
      // 日時文字列 (YYYY-MM-DD HH:MM:SS) から日付と時刻を分離
      const dateTime = new Date(
        reservation.reservation_datetime.replace(/-/g, "/")
      );
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

      self.selectedPlaylistId(reservation.playlist_id);
      document.getElementById("reservation-date").value = dateStr;
      document.getElementById("reservation-time").value = timeStr;
    } else {
      // データがなければフォームをクリア
      self.selectedPlaylistId(null);
      document.getElementById("reservation-date").value = "";
      document.getElementById("reservation-time").value = "";
    }
  };

  // 編集ボタンがクリックされたときに呼び出されるメソッド
  self.startEditReservation = function (reservationToEdit) {
    console.log("Editing reservation:", reservationToEdit);
    self.isEditingReservation(true);
    self.editingReservationId(reservationToEdit.id);
    self.setReservationFormData(reservationToEdit);

    const reservationStatusDiv = document.getElementById("reservation-status");
    if (reservationStatusDiv) reservationStatusDiv.textContent = "";

    // 利用可能なプレイリストを読み込む
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
    console.log("予約チェック実行:", now.toLocaleTimeString());

    // ViewModelが保持している予約リスト
    const upcomingReservations = self.reservations();

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
          playlist_id: reservation.playlist_id,
        };
        break;
      }
    }
    if (notificationToShow) {
      self.currentNotification(notificationToShow);
      console.log("通知を表示します:", self.currentNotification());
    }
  };

  // 通知バナーを閉じるメソッド
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
        body: JSON.stringify({ status: "canceled" }),
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
        });
    } else {
      self.currentNotification(null);
    }
  };

  // 通知バナーの再生ボタンを押したときの処理
  self.playFromNotification = function () {
    const notification = self.currentNotification();
    if (notification && notification.id && notification.playlist_id) {
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
          // APIの結果に関わらず画面遷移を実行
          self.currentNotification(null);
          // プレイリスト詳細ページへ遷移
          const targetUrl = `/playlist/view/${playlistIdToPlay}?autoplay=1`;
          console.log(
            `プレイリスト詳細ページへ遷移し、自動再生を試みます: ${targetUrl}`
          );
          window.location.href = targetUrl;
        });
    } else {
      console.error(
        "通知データに再生に必要な情報(ID or PlaylistID)がありません。",
        notification
      );
      self.currentNotification(null);
      alert("エラー: 再生に必要な情報を取得できませんでした。");
    }
  };

  // --- ViewModelの初期化処理 ---
  self.initialize = function () {
    // --- Cookieから音量を読み込む処理を追加 ---
    const savedVolume = getCookie("player_volume");
    if (savedVolume !== null && !isNaN(parseFloat(savedVolume))) {
      let volumeValue = parseFloat(savedVolume);
      // 値の範囲を 0.0 ～ 1.0 に補正
      volumeValue = Math.max(0, Math.min(1, volumeValue));
      self.currentVolume(volumeValue);
      console.log("Saved volume loaded from cookie:", volumeValue);
    } else {
      console.log("No saved volume found in cookie or invalid value.");
    }
    // 定期的に予約をチェックするタイマーを開始
    self.reservationCheckInterval = setInterval(
      self.checkReservations,
      60 * 1000
    );
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
 * ファイルアップロードを実行する関数
 */
function uploadFile(file) {
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
    })
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
 * Cookieを設定する関数)
 */
function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie =
    name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
}

/**
 * 指定された名前のCookieを取得する関数
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

// HTML文書の構造が完全に読み込まれたとき
document.addEventListener("DOMContentLoaded", function () {
  // ---①初期化---
  // ViewModelとHTMLの連携
  const appViewModel = new AppViewModel();
  ko.applyBindings(appViewModel);
  // オーディオプレイヤーの初期化
  const audioElement = document.getElementById("audio-player");
  if (audioElement) {
    appViewModel.initAudioPlayer(audioElement);
  } else {
    console.error("Audio player element (#audio-player) not found!");
  }
  // --- ViewModelの初期化処理呼び出し ---
  appViewModel.initialize();

  // ---②楽曲追加イベントリスナー ---
  const addSongButton = document.getElementById("add-song-button");
  const songFileInput = document.getElementById("song-file-input");
  // 「楽曲を追加」ボタンがクリックされたら、隠れたファイル入力をクリック
  if (addSongButton && songFileInput) {
    addSongButton.addEventListener("click", () => songFileInput.click());
  }
  // ファイル入力でファイルが選択されたら(またはキャンセルされたら)
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

  // --- ③ プレイリスト作成関連イベントリスナー ---
  const createPlaylistButton = document.getElementById(
    "create-playlist-button"
  );
  const createPlaylistForm = document.getElementById("create-playlist-form");
  const submitPlaylistButton = document.getElementById(
    "submit-playlist-button"
  );
  const newPlaylistNameInput = document.getElementById("new-playlist-name");
  const createPlaylistStatusSpan = document.getElementById(
    "create-playlist-status"
  );
  const playlistListUl = document.getElementById("playlist-list");

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

      // フォームが表示されるタイミングで実行する処理
      if (isHidden) {
        createPlaylistStatusSpan.textContent = ""; // ★ 前回のメッセージをクリア
        newPlaylistNameInput.value = ""; // ★ 入力欄をクリア
        newPlaylistNameInput.focus(); // ★ 入力欄にフォーカスを当てる
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
      const playlistName = newPlaylistNameInput.value.trim();

      // バリデーション: 名前が空でないか
      if (playlistName === "") {
        createPlaylistStatusSpan.textContent =
          "プレイリスト名を入力してください。";
        createPlaylistStatusSpan.style.color = "red";
        // 3秒後にエラーメッセージを消す
        setTimeout(() => {
          if (
            createPlaylistStatusSpan.textContent ===
            "プレイリスト名を入力してください。"
          )
            createPlaylistStatusSpan.textContent = "";
        }, 3000);
        return;
      }

      // API呼び出し中の表示とボタン無効化
      createPlaylistStatusSpan.textContent = "作成中...";
      createPlaylistStatusSpan.style.color = "black";
      submitPlaylistButton.disabled = true;

      // 送信するデータ準備
      const formData = new FormData();
      formData.append("name", playlistName);

      // プレイリスト作成API (POST /api/playlists/create) を呼び出し
      fetch("/api/playlists/create", {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          return response.json().then((data) => ({
            ok: response.ok,
            status: response.status,
            data: data,
          }));
        })
        .then((result) => {
          // 結果処理
          console.log("プレイリスト作成応答:", result);
          if (result.ok) {
            // API成功
            createPlaylistStatusSpan.textContent = result.data.message;
            createPlaylistStatusSpan.style.color = "green";
            newPlaylistNameInput.value = "";
            createPlaylistForm.style.display = "none";

            //  プレイリスト一覧の動的更新 (DOM操作)
            const newListItem = document.createElement("li");
            const newLink = document.createElement("a");
            // リンク先URLを正しく生成
            newLink.href = "/playlist/view/" + result.data.playlist.id;
            newLink.textContent = result.data.playlist.name;
            const dateSpan = document.createElement("span");
            dateSpan.textContent = ` (作成日: ${new Date().toLocaleDateString()})`;
            newListItem.appendChild(newLink);
            newListItem.appendChild(dateSpan);

            const noPlaylistLi = playlistListUl.querySelector("li:only-child");
            if (
              noPlaylistLi &&
              noPlaylistLi.textContent.includes("まだありません")
            ) {
              playlistListUl.innerHTML = "";
            }
            playlistListUl.appendChild(newListItem);

            // 成功メッセージを3秒後に消す
            setTimeout(() => {
              if (createPlaylistStatusSpan.textContent === result.data.message)
                createPlaylistStatusSpan.textContent = "";
            }, 3000);
          } else {
            // API失敗
            createPlaylistStatusSpan.textContent = `エラー: ${
              result.data.message || "不明なエラー"
            }`;
            createPlaylistStatusSpan.style.color = "red";
            // エラーメッセージを5秒後に消す
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
          //　fetch 自体の失敗
          console.error("プレイリスト作成エラー:", error);
          createPlaylistStatusSpan.textContent = `エラー: ${
            error.message || "通信に失敗しました。"
          }`;
          createPlaylistStatusSpan.style.color = "red";
          // エラーメッセージを5秒後に消す
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

  // --- ④ プレリスト詳細ページ ---
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

  //モーダル表示ボタン
  if (addSongToPlaylistButton && addSongModal) {
    addSongToPlaylistButton.addEventListener("click", () => {
      addSongModal.style.display = "block";
      appViewModel.loadAllSongs();
    });
  }
  //モーダルキャンセルボタン
  if (cancelAddSongsButton && addSongModal) {
    cancelAddSongsButton.addEventListener("click", () => {
      addSongModal.style.display = "none";
    });
  }
  //「選択した曲を追加」ボタン
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
      const songIdsToAdd = Array.from(checkedBoxes).map((cb) => cb.value);
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
            // 1. 成功メッセージを表示
            addSongStatusDiv.textContent = `成功: ${
              data.message || "楽曲を追加しました。"
            }`;
            addSongStatusDiv.style.color = "green";

            // 2. プレイリスト一覧を再読み込みして更新
            console.log("楽曲追加成功、リストを再読み込みします。");
            appViewModel.loadCurrentPlaylistSongs(currentPlaylistId);

            // 3. 少し待ってからモーダルを閉じ、メッセージもクリアする
            setTimeout(() => {
              addSongModal.style.display = "none";
              addSongStatusDiv.textContent = "";
            }, 1500); // 1.5秒後に実行する
          } else {
            // API失敗時の処理
            addSongStatusDiv.textContent = `エラー (${result.status}): ${
              data.message || "不明なエラー"
            }`;
            addSongStatusDiv.style.color = "red";
            // エラーメッセージを5秒後に消す
            setTimeout(() => {
              if (
                addSongStatusDiv.textContent ===
                `エラー (${result.status}): ${data.message || "不明なエラー"}`
              )
                addSongStatusDiv.textContent = "";
            }, 5000);
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
  const reservationModal = document.getElementById("reservation-modal");
  const cancelReservationButton = document.getElementById(
    "cancel-reservation-button"
  ); // モーダルのキャンセルボタン
  const reservationStatusDiv = document.getElementById("reservation-status");

  // 「新規予約を作成」ボタンがクリックされたらモーダルを表示
  if (createReservationButton && reservationModal) {
    createReservationButton.addEventListener("click", function () {
      // モーダル表示前に中身をリセット
      if (reservationStatusDiv) reservationStatusDiv.textContent = "";
      const playlistSelect = document.getElementById("reservation-playlist");
      if (playlistSelect) playlistSelect.selectedIndex = 0;
      document.getElementById("reservation-date").value = "";
      document.getElementById("reservation-time").value = "";
      if (reservationStatusDiv) reservationStatusDiv.textContent = "";
      reservationModal.style.display = "block";
      appViewModel.loadAvailablePlaylists();
    });
  }

  // モーダルの「キャンセル」ボタンがクリックされたらモーダルを非表示
  if (cancelReservationButton && reservationModal) {
    cancelReservationButton.addEventListener("click", function () {
      reservationModal.style.display = "none";
    });
  }

  const saveReservationButton = document.getElementById(
    "save-reservation-button"
  );
  const reservationPlaylistSelect = document.getElementById(
    "reservation-playlist"
  );
  const reservationDateInput = document.getElementById("reservation-date");
  const reservationTimeInput = document.getElementById("reservation-time");
  // --- 予約作成ボタンがクリックされたとき ---
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
      const playlistId = appViewModel.selectedPlaylistId();
      const dateValue = reservationDateInput.value;
      const timeValue = reservationTimeInput.value;

      // 2. バリデーション
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
        // 簡単な未来チェック
        if (selectedDateTime <= new Date(Date.now() + 5 * 60 * 1000)) {
          errors.push("現在時刻より十分に未来の日時を指定してください。");
        }
      }
      if (errors.length > 0) {
        reservationStatusDiv.textContent = errors.join(" ");
        reservationStatusDiv.style.color = "red";
        return;
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

      // 編集モードか新規作成モードかでAPIのURLとメソッドを決定
      let apiUrl;
      let method = "POST";
      let successStatusCode = 201;

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
        apiUrl = `/api/reservations/update/${editingId}`;
        successStatusCode = 200;
      } else {
        // ---- 新規作成モードの場合 ----
        apiUrl = "/api/reservations/create";
      }
      console.log(`Calling API: ${method} ${apiUrl}`);

      // 4. APIを呼び出す
      fetch(apiUrl, { method: method, body: formData })
        .then((response) => {
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
            // HTTPステータスが2xxの場合
            alert(result.data.message);
            reservationModal.style.display = "none";

            // 予約一覧を再読み込みして更新
            console.log("予約処理成功、リストを再読み込みします。");
            appViewModel.loadReservations();
          } else {
            // APIがエラーを返した場合
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
          saveReservationButton.disabled = false;
          // 編集モードを解除し、フォーム内容をリセット
          if (appViewModel.isEditingReservation()) {
            appViewModel.isEditingReservation(false);
            appViewModel.editingReservationId(null);
          }
          appViewModel.setReservationFormData(null);
        });
    });
  }
  // 全体ページ（ホーム）の予約一覧を初期読み込み
  const reservationsListTable = document.getElementById(
    "reservations-list-table"
  ); // Viewに追加したテーブルID
  if (reservationsListTable) {
    // 全体ページかどうかを判定
    appViewModel.loadReservations();
  }

  // --- ⑤ Initial data loading based on page ---
  if (playlistSongsTable) {
    const currentPlaylistId =
      playlistSongsTable.getAttribute("data-playlist-id");
    if (currentPlaylistId) {
      console.log(
        "プレイリスト詳細ページ読み込み、楽曲リスト取得開始 ID:",
        currentPlaylistId
      );

      // 楽曲リスト読み込み完了後に自動再生チェックを行う
      appViewModel
        .loadCurrentPlaylistSongs(currentPlaylistId)
        .then(() => {
          // --- 読み込み成功後に実行される処理 ---
          console.log("楽曲リスト読み込み成功、自動再生チェックへ");
          const urlParams = new URLSearchParams(window.location.search);
          const autoplay = urlParams.get("autoplay");

          if (autoplay === "1") {
            console.log(
              "Autoplay parameter detected. Starting playlist playback..."
            );
            // 少し遅延させる
            setTimeout(() => {
              if (typeof appViewModel.playPlaylist === "function") {
                appViewModel.playPlaylist();
              } else {
                console.error("playPlaylist method not found");
              }
            }, 100);

            try {
              history.replaceState(null, "", window.location.pathname);
              console.log("Autoplay parameter removed from URL.");
            } catch (e) {
              console.warn("Could not remove autoplay parameter.");
            }
          }
        })
        .catch((error) => {
          // 楽曲リスト読み込み失敗時の処理
          console.error(
            "自動再生前の楽曲リスト読み込みに失敗しました。",
            error
          );
        });
    }
  }
  const songsListTable = document.getElementById("songs-list-table"); // Get song list table ID
  if (songsListTable) {
    console.log("楽曲一覧ページ読み込み、リスト取得開始...");
    appViewModel.loadSongsList();
  }
}); // ★★★ End of DOMContentLoaded Listener ★★★
