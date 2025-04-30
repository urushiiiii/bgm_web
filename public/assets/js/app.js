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

  // --- Loading/Error Status Observables ---
  self.allSongsLoaded = ko.observable(false); // Flag: Have all songs been loaded?
  self.loadingSongsError = ko.observable(null); // Error message when loading all songs
  self.loadingPlaylistError = ko.observable(null); // Error message when loading playlist songs

  // --- Audio Player Reference ---
  self.audioElement = null; // Reference to the HTML <audio> element

  self.songsList = ko.observableArray([]); // 楽曲一覧ページに表示するリスト
  self.loadingSongsListError = ko.observable(null); // 楽曲一覧読み込みエラー

  self.loadSongsList = function () {
    self.loadingSongsListError(null); // エラーリセット
    console.log("Loading songs list from API...");

    fetch("/api/songs") // 既存の全楽曲取得APIを流用
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP ${response.status}`);
        }
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          self.songsList(data.songs); // ★ songsList observableArray を更新
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
   * Initializes the HTML audio element and sets up event listeners.
   * Called once after the DOM is ready.
   * @param {HTMLAudioElement} audioElement - The <audio> DOM element.
   */
  self.initAudioPlayer = function (audioElement) {
    if (!audioElement) {
      console.error("Audio element not provided for init.");
      return;
    }
    self.audioElement = audioElement;
    console.log("Audio player initialized with element:", self.audioElement);

    // Event listener for when a song finishes playing
    self.audioElement.addEventListener("ended", function () {
      console.log("Audio ended");
      self.isPlaying(false);
      // TODO: Implement playlist "next song" logic here
      // For now, just clear the current song
      self.currentSong(null);
    });

    // Event listener for time updates (for progress bar)
    self.audioElement.addEventListener("timeupdate", function () {
      if (!self.audioElement) return;
      // TODO: Implement progress bar update logic here
      // console.log('Time update:', self.audioElement.currentTime, '/', self.audioElement.duration);
    });

    // Event listener for playback errors
    self.audioElement.addEventListener("error", function (e) {
      console.error("Audio player error:", self.audioElement.error, e);
      self.isPlaying(false);
      self.currentSong(null); // Clear current song on error
      alert(
        "音声ファイルの再生中にエラーが発生しました。ファイルが破損しているか、形式がサポートされていない可能性があります。"
      );
    });

    // Event listener for when the audio is ready to play (metadata loaded)
    self.audioElement.addEventListener("canplay", function () {
      if (!self.audioElement) return;
      console.log("Audio can play. Duration:", self.audioElement.duration);
      // TODO: Display song duration if needed
    });
  };

  /**
   * Loads a song into the audio player and starts playback.
   * Called when a play button in a list is clicked.
   * @param {object} songData - The song object {id, name, file_path}.
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
          // ★ Trigger play log recording ★
          self.recordPlayLog(songData.id);
        })
        .catch((error) => {
          console.error("Playback failed:", error);
          self.isPlaying(false);
          self.currentSong(null);
          alert(
            "音声の再生を開始できませんでした。ブラウザの設定を確認するか、ページ上で一度クリック操作を試みてください。"
          );
        });
    }
  };

  /**
   * Pauses the currently playing song.
   */
  self.pauseSong = function () {
    if (self.audioElement && self.isPlaying()) {
      self.audioElement.pause();
      self.isPlaying(false);
      console.log("Playback paused");
    }
  };

  /**
   * Resumes playback of the paused song.
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
   * Toggles playback state (play/pause) for the main control button.
   */
  self.playPauseToggle = function () {
    if (self.isPlaying()) {
      self.pauseSong();
    } else {
      self.resumeSong(); // Will only resume if a song is loaded and paused
    }
  };

  /**
   * Sends a request to the server API to record a play log. (Internal use)
   * @param {number} songId - The ID of the song that started playing.
   */
  self.recordPlayLog = function (songId) {
    if (!songId) return;
    console.log(`TODO: 再生ログ記録API呼び出し (Song ID: ${songId})`);
    // Example fetch call (needs API endpoint and CSRF handling if applicable)
    /*
      fetch('/api/logs/play', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ song_id: songId })
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) { console.log('Play log recorded.'); }
          else { console.error('Failed to record play log:', data.message); }
      })
      .catch(error => console.error('Error recording play log:', error));
      */
  };

  /**
   * Loads the list of all songs from the API (for the "Add Song" modal).
   */
  self.loadAllSongs = function () {
    self.loadingSongsError(null);
    // Optional: Prevent reload if already loaded
    // if (self.allSongsLoaded()) { console.log('Skipping reload of all songs.'); return; }
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
   * Loads the list of songs for a specific playlist (for the detail view).
   * @param {number} playlistId - The ID of the playlist.
   */
  self.loadCurrentPlaylistSongs = function (playlistId) {
    if (!playlistId || isNaN(parseInt(playlistId))) {
      console.warn(
        "loadCurrentPlaylistSongs called with invalid playlistId:",
        playlistId
      );
      return;
    }
    playlistId = parseInt(playlistId);
    self.loadingPlaylistError(null);
    self.currentPlaylistSongs([]); // Clear list while loading
    self.currentPlaylistId(playlistId); // Store the current playlist ID
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
   * Removes a song from the currently viewed playlist.
   * Called by the click binding on the remove button in the playlist detail view.
   * @param {object} songToRemove - The song data object to remove (passed by Knockout).
   */
  self.removeSong = function (songToRemove) {
    console.log("removeSong called with song data:", songToRemove);
    const songId = songToRemove ? songToRemove.id : null;
    const playlistId = self.currentPlaylistId(); // Get from ViewModel observable
    console.log(
      `Attempting to remove Song ID: ${songId} (type: ${typeof songId}) from Playlist ID: ${playlistId} (type: ${typeof playlistId})`
    );

    if (
      !playlistId ||
      !songId ||
      isNaN(parseInt(playlistId)) ||
      isNaN(parseInt(songId))
    ) {
      console.error(
        "Invalid playlistId or songId. Aborting delete.",
        "PlaylistID:",
        playlistId,
        "SongID:",
        songId
      );
      alert("エラー：削除対象を特定できませんでした。");
      return;
    }

    if (
      !confirm(`プレイリストから楽曲「${songToRemove.name}」を削除しますか？`)
    ) {
      return; // User canceled
    }

    console.log(
      `プレイリストID: ${playlistId} から 楽曲ID: ${songId} を削除します。`
    );
    const apiUrl = `/api/playlists/${playlistId}/songs/${songId}`;
    console.log("Calling API URL:", apiUrl);

    fetch(apiUrl, { method: "DELETE" })
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP ${response.status}`);
        }
        if (response.status === 204) {
          return null;
        } // Handle No Content
        return response.json();
      })
      .then((data) => {
        if (data === null || data.success) {
          // Success if 204 or success:true
          const message = data ? data.message : "楽曲を削除しました。";
          console.log(message);
          // Remove the song from the observable array, UI updates automatically
          self.currentPlaylistSongs.remove(songToRemove);
          // Display success message (e.g., using a dedicated status div)
          const statusDiv = document.getElementById("playlist-status"); // Assume an element exists
          if (statusDiv) {
            statusDiv.textContent = message;
            statusDiv.style.color = "green";
            setTimeout(() => (statusDiv.textContent = ""), 3000);
          } else {
            alert(message);
          } // Fallback to alert
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
   * Called by the click binding on the delete playlist button in the detail view.
   * @param {object} data - The data context (usually the AppViewModel itself).
   * @param {Event} event - The click event object.
   */
  self.deletePlaylist = function (data, event) {
    console.log("deletePlaylist called. Event:", event);

    const button = event.currentTarget; // Get the button that was clicked
    if (!button) {
      console.error("Could not get button element from event.");
      alert("エラー: ボタン要素を取得できませんでした。");
      return;
    }

    const playlistId = button.getAttribute("data-playlist-id");
    const playlistName = button.getAttribute("data-playlist-name");
    console.log(
      `Attempting to delete Playlist ID: ${playlistId}, Name: ${playlistName}`
    );

    if (!playlistId || !playlistName || isNaN(parseInt(playlistId))) {
      console.error(
        "Invalid playlistId or playlistName from button attributes."
      );
      alert("エラー: 削除対象のプレイリスト情報を取得できませんでした。");
      return;
    }

    if (
      !confirm(
        `プレイリスト「${playlistName}」を削除しますか？\nこの操作は元に戻せません。関連する予約も削除されます。`
      )
    ) {
      return; // User canceled
    }

    console.log(`プレイリストID: ${playlistId} を削除します。`);
    const apiUrl = `/api/playlists/${playlistId}`;

    fetch(apiUrl, { method: "DELETE" })
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP ${response.status}`);
        }
        if (response.status === 204) {
          return null;
        } // Handle No Content
        return response.json();
      })
      .then((data) => {
        const message = data ? data.message : "プレイリストを削除しました。";
        console.log(message);
        alert(message); // Show success message
        // Redirect to the home page after successful deletion
        window.location.href = "/";
      })
      .catch((error) => {
        console.error("プレイリスト削除エラー:", error);
        alert(`エラーが発生しました: ${error.message || "通信エラー"}`);
      });
  };
} // --- End of AppViewModel ---

/**
 * File Upload Function (using fetch)
 * @param {File} file - The file object to upload.
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
      if (!response.ok) {
        return response
          .json()
          .catch(() => {
            throw new Error(`HTTP error! status: ${response.status}`);
          })
          .then((errData) => {
            throw { data: errData };
          });
      }
      return response.json();
    })
    .then((data) => {
      console.log("サーバーからの応答 (ファイルアップロード):", data);
      if (data.success) {
        uploadStatusDiv.textContent = `成功: ${data.message} (${data.file_info.name} として登録)`;
        uploadStatusDiv.style.color = "green";
        // TODO: Refresh song list if needed, maybe call appViewModel.loadAllSongs()?
      } else {
        const errorMsg = data.errors ? data.errors.join(", ") : data.message;
        uploadStatusDiv.textContent = `エラー: ${errorMsg}`;
        uploadStatusDiv.style.color = "red";
      }
    })
    .catch((error) => {
      console.error("アップロードエラー:", error);
      let errorMessage = "アップロード中にエラーが発生しました。";
      if (error.data && error.data.message) {
        errorMessage = error.data.message;
      } else if (error.message) {
        errorMessage = error.message;
      }
      uploadStatusDiv.textContent = `エラー: ${errorMessage}`;
      uploadStatusDiv.style.color = "red";
    });
}

// ★★★ Execute when the HTML document is fully loaded ★★★
document.addEventListener("DOMContentLoaded", function () {
  // --- ① Initialize ViewModel and apply Knockout bindings ---
  const appViewModel = new AppViewModel();
  ko.applyBindings(appViewModel);
  console.log("Knockout ViewModel activated!");

  // --- Audio Player の初期化 ---
  const audioElement = document.getElementById("audio-player");
  if (audioElement) {
    appViewModel.initAudioPlayer(audioElement);
  } else {
    console.error("Audio player element not found!");
  }

  // --- ② Song Upload Event Listeners ---
  const addSongButton = document.getElementById("add-song-button");
  const songFileInput = document.getElementById("song-file-input");
  const uploadStatusDiv = document.getElementById("upload-status"); // Re-get for this scope if needed, though already retrieved in uploadFile

  if (addSongButton && songFileInput) {
    addSongButton.addEventListener("click", function () {
      songFileInput.click();
    });
  }
  if (songFileInput) {
    // Check only for file input existence
    songFileInput.addEventListener("change", function (event) {
      const files = event.target.files;
      if (files.length > 0) {
        uploadFile(files[0]); // Call the upload function
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

  // Toggle form visibility
  if (createPlaylistButton && createPlaylistForm) {
    createPlaylistButton.addEventListener("click", function () {
      createPlaylistForm.style.display =
        createPlaylistForm.style.display === "none" ||
        createPlaylistForm.style.display === ""
          ? "block"
          : "none";
    });
  }
  // Handle form submission
  if (
    submitPlaylistButton &&
    newPlaylistNameInput &&
    createPlaylistStatusSpan &&
    playlistListUl
  ) {
    submitPlaylistButton.addEventListener("click", function () {
      const playlistName = newPlaylistNameInput.value.trim();
      if (playlistName === "") {
        /* ... Error handling ... */ return;
      }
      createPlaylistStatusSpan.textContent = "作成中..."; /* ... */
      submitPlaylistButton.disabled = true;
      const formData = new FormData();
      formData.append("name", playlistName);

      fetch("/api/playlists/create", { method: "POST", body: formData })
        .then((response) => {
          if (!response.ok) {
            /* ... Error handling ... */ throw new Error(
              `HTTP ${response.status}`
            );
          }
          return response.json();
        })
        .then((data) => {
          if (data.success) {
            /* ... Success message, clear input, hide form ... */
            // --- ★★★ DOM Update for main playlist list ★★★ ---
            const newListItem = document.createElement("li");
            /* ... */ newLink.href = `/playlist/view/${data.playlist.id}`;
            newLink.textContent = data.playlist.name; /* ... */
            const noPlaylistLi = playlistListUl.querySelector("li:only-child");
            if (
              noPlaylistLi &&
              noPlaylistLi.textContent.includes("まだありません")
            ) {
              playlistListUl.innerHTML = "";
            }
            playlistListUl.appendChild(newListItem);
            // --- ★★★ Consider using Knockout for this list too eventually ★★★ ---
          } else {
            /* Error display */
          }
        })
        .catch((error) => {
          /* Error handling */
        })
        .finally(() => {
          submitPlaylistButton.disabled = false;
        });
    });
  }

  // --- ④ Playlist Detail Page - Add Song Modal Event Listeners ---
  const playlistSongsTable = document.getElementById("playlist-songs-table");
  if (playlistSongsTable) {
    // 詳細ページの場合
    const currentPlaylistId =
      playlistSongsTable.getAttribute("data-playlist-id");
    if (currentPlaylistId) {
      console.log(
        "プレイリスト詳細ページ読み込み、楽曲リスト取得開始 ID:",
        currentPlaylistId
      );
      appViewModel.loadCurrentPlaylistSongs(currentPlaylistId); // 詳細ページのリストを読み込む
    }
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
    const playlistSongsTable = document.getElementById("playlist-songs-table"); // Detail page table

    // Show modal and load all songs list
    if (addSongToPlaylistButton && addSongModal) {
      addSongToPlaylistButton.addEventListener("click", function () {
        addSongModal.style.display = "block";
        appViewModel.loadAllSongs(); // Load song list when modal opens
      });
    }
    // Hide modal on cancel
    if (cancelAddSongsButton && addSongModal) {
      cancelAddSongsButton.addEventListener("click", function () {
        addSongModal.style.display = "none";
        if (addSongStatusDiv) addSongStatusDiv.textContent = ""; // Clear status
        const checkboxes = addSongListDiv
          ? addSongListDiv.querySelectorAll('input[type="checkbox"]:checked')
          : [];
        checkboxes.forEach((checkbox) => (checkbox.checked = false)); // Uncheck boxes
      });
    }
    // Handle adding selected songs to the current playlist
    if (
      submitAddSongsButton &&
      addSongListDiv &&
      addSongStatusDiv &&
      addSongModal &&
      playlistSongsTable
    ) {
      submitAddSongsButton.addEventListener("click", function () {
        const checkedBoxes = addSongListDiv.querySelectorAll(
          'input[type="checkbox"]:checked'
        );
        const songIdsToAdd = [];
        checkedBoxes.forEach((checkbox) => {
          songIdsToAdd.push(checkbox.value);
        });

        if (songIdsToAdd.length === 0) {
          /* ... Show error ... */ return;
        }

        const currentPlaylistId =
          playlistSongsTable.getAttribute("data-playlist-id");
        if (!currentPlaylistId) {
          /* ... Show error ... */ return;
        }

        addSongStatusDiv.textContent = "楽曲を追加中..."; /* ... */
        submitAddSongsButton.disabled = true;
        const formData = new FormData();
        songIdsToAdd.forEach((songId) => {
          formData.append("song_ids[]", songId);
        });
        const apiUrl = `/api/playlists/${currentPlaylistId}/songs`;

        fetch(apiUrl, { method: "POST", body: formData })
          .then((response) => {
            /* ... Error handling ... */ return response.json();
          })
          .then((data) => {
            if (data.success) {
              addSongStatusDiv.textContent = `成功: ${data.message}`; /* ... */
              setTimeout(() => {
                addSongModal.style.display = "none";
                addSongStatusDiv.textContent = "";
              }, 1500);
              // ★★★ Refresh the current playlist's song list ★★★
              appViewModel.loadCurrentPlaylistSongs(currentPlaylistId);
            } else {
              /* ... Error display ... */
            }
          })
          .catch((error) => {
            /* ... Error handling ... */
          })
          .finally(() => {
            submitAddSongsButton.disabled = false;
            checkedBoxes.forEach((checkbox) => (checkbox.checked = false));
          });
      });
    }
  }

  // --- ★★★ ⑤ 楽曲一覧ページの初期データ読み込み ★★★ ---
  const songsListTable = document.getElementById("songs-list-table"); // 楽曲一覧テーブルのID (後でViewに追加)
  if (songsListTable) {
    // 楽曲一覧ページかどうかをテーブルの存在で判定
    console.log("楽曲一覧ページ読み込み、リスト取得開始...");
    appViewModel.loadSongsList(); // ViewModelのメソッドを呼び出してリストを読み込む
  }
}); // ★★★ End of DOMContentLoaded Listener ★★★
