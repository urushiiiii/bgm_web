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

    self.audioElement.addEventListener("ended", function () {
      console.log("Audio ended");
      self.isPlaying(false);
      // TODO: Implement playlist "next song" logic here
      self.currentSong(null);
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
  };

  /**
   * Loads a song and starts playback.
   */
  self.loadAndPlay = function (songData) {
    console.log("Request to play song:", songData);
    if (!self.audioElement) {
      console.error("Audio player not initialized.");
      return;
    }
    if (!songData || !songData.file_path) {
      console.error("Invalid song data provided.");
      return;
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
   * Records play log via API.
   */
  self.recordPlayLog = function (songId) {
    if (!songId) return;
    console.log(`TODO: 再生ログ記録API呼び出し (Song ID: ${songId})`);
    // fetch('/api/logs/play', { /* ... POST { song_id: songId } ... */ })
    // .then(/* ... */).catch(/* ... */);
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
   * Loads songs for the currently viewed playlist.
   */
  self.loadCurrentPlaylistSongs = function (playlistId) {
    if (!playlistId || isNaN(parseInt(playlistId))) {
      console.warn("Invalid playlistId:", playlistId);
      return;
    }
    playlistId = parseInt(playlistId);
    self.loadingPlaylistError(null);
    self.currentPlaylistSongs([]);
    self.currentPlaylistId(playlistId);
    console.log(`Loading songs for playlist ID: ${playlistId}...`);
    const apiUrl = `/api/playlists/${playlistId}/songs`;
    fetch(apiUrl)
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
    if (!songId || isNaN(parseInt(songId))) {
      console.warn("Invalid songId passed to recordPlayLog:", songId);
      return;
    }
    songId = parseInt(songId);
    console.log(`再生ログ記録API呼び出し (Song ID: ${songId})`);

    // --- ↓ fetch 処理を実装 ↓ ---
    fetch("/api/logs/play", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        // 必要であればCSRFトークンなどをヘッダーに追加
        // 'X-CSRF-Token': '<?php // echo Security::fetch_token(); ?>' // これはPHP内での書き方
      },
      body: JSON.stringify({ song_id: songId }), // JSON形式で送信
    })
      .then((response) => {
        // レスポンスは必須ではないが、エラーチェックは行う
        if (!response.ok) {
          // 4xx, 5xx エラーの場合
          return response
            .json()
            .catch(() => {
              // エラー詳細をJSONで取得試行
              throw new Error(
                `ログ記録APIエラー! HTTP status: ${response.status}`
              );
            })
            .then((errData) => {
              throw { status: response.status, data: errData };
            });
        }
        return response.json().catch(() => null); // 成功時はJSONを期待するが、無くても許容
      })
      .then((data) => {
        if (data && data.success) {
          console.log("再生ログ記録成功:", data.message);
        } else if (data) {
          // success: false または予期しない応答
          console.error("再生ログ記録失敗:", data.message || "不明な応答");
        } else {
          // 応答ボディがない場合 (201 Created などでボディなしも考えられる)
          console.log("再生ログ記録API応答受信 (ボディなし)");
        }
      })
      .catch((error) => {
        console.error("再生ログ記録API呼び出しエラー:", error);
        let errorMessage = "ログ記録中にエラー発生";
        if (error.data && error.data.message) {
          errorMessage = error.data.message;
        } else if (error.message) {
          errorMessage = error.message;
        }
        // 必要であればユーザーにエラー通知 (ただしバックグラウンド処理なので必須ではないかも)
        // console.error('ログ記録失敗:', errorMessage);
      });
    // --- ↑ ここまで fetch 処理 ↑ ---
  };
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

  // --- ③ Playlist Creation Event Listeners ---
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
  const playlistListUl = document.getElementById("playlist-list"); // Main page list
  if (createPlaylistButton && createPlaylistForm) {
    /* ... Toggle form ... */ createPlaylistButton.addEventListener(
      "click",
      () =>
        (createPlaylistForm.style.display =
          createPlaylistForm.style.display === "none" ||
          createPlaylistForm.style.display === ""
            ? "block"
            : "none")
    );
  }
  if (
    submitPlaylistButton &&
    newPlaylistNameInput &&
    createPlaylistStatusSpan &&
    playlistListUl
  ) {
    /* ... Submit form (fetch) ... */ submitPlaylistButton.addEventListener(
      "click",
      () => {
        /* ... (previous code for fetch /api/playlists/create and DOM update) ... */
      }
    );
  }

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

  // --- ⑤ Initial data loading based on page ---
  if (playlistSongsTable) {
    // If on playlist detail page
    const currentPlaylistId =
      playlistSongsTable.getAttribute("data-playlist-id");
    if (currentPlaylistId) {
      appViewModel.loadCurrentPlaylistSongs(currentPlaylistId);
    }
  }
  const songsListTable = document.getElementById("songs-list-table"); // ★ Get song list table ID
  if (songsListTable) {
    // If on main song list page
    console.log("楽曲一覧ページ読み込み、リスト取得開始...");
    appViewModel.loadSongsList(); // ★ Load the main song list
  }
}); // ★★★ End of DOMContentLoaded Listener ★★★
