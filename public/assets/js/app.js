// public/assets/js/app.js

/**
 * Knockout.js ViewModel Definition
 */
function AppViewModel() {
  var self = this; // 'this' in Knockout viewModels often refers to the ViewModel itself. 'self' is a common convention.

  // For song list in the "Add Song" modal
  self.allSongs = ko.observableArray([]); // Holds the list of all available songs
  self.allSongsLoaded = ko.observable(false); // Flag to track if allSongs has been loaded
  self.loadingSongsError = ko.observable(null); // Holds error message if loading allSongs fails

  // For song list in the playlist detail view
  self.currentPlaylistSongs = ko.observableArray([]); // Holds the songs for the currently viewed playlist
  self.loadingPlaylistError = ko.observable(null); // Holds error message if loading currentPlaylistSongs fails

  /**
   * Loads all songs from the API for the "Add Song" modal.
   */
  self.loadAllSongs = function () {
    // Optional: Prevent reloading if already loaded or if there was an error
    // if (self.allSongsLoaded() || self.loadingSongsError()) {
    //     console.log('All songs already loaded or failed previously.');
    //     return;
    // }
    self.loadingSongsError(null); // Reset error message
    console.log("Loading all songs from API...");

    fetch("/api/songs") // GET request to fetch all songs
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          self.allSongs(data.songs); // Update the observableArray with fetched songs
          self.allSongsLoaded(true); // Set loaded flag
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
        self.loadingSongsError(error.message); // Store the error message
      });
  };

  /**
   * Loads songs for a specific playlist ID for the detail view.
   * @param {number} playlistId - The ID of the playlist to load songs for.
   */
  self.loadCurrentPlaylistSongs = function (playlistId) {
    if (!playlistId) {
      console.warn("loadCurrentPlaylistSongs called with invalid playlistId");
      return;
    }
    self.loadingPlaylistError(null); // Reset playlist specific error
    self.currentPlaylistSongs([]); // Clear the current list while loading
    console.log(`Loading songs for playlist ID: ${playlistId}...`);

    const apiUrl = `/api/playlists/${playlistId}/songs`;

    fetch(apiUrl) // GET request to fetch songs for the specific playlist
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          self.currentPlaylistSongs(data.songs); // Update the observableArray
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
        self.loadingPlaylistError(error.message); // Store playlist specific error
      });
  };

  // --- Add other ViewModel properties or methods here if needed ---
  // Example for playlist deletion confirmation (to be implemented later)
  // self.confirmDeletePlaylist = function(playlist) { ... }
}

/**
 * File Upload Function (using fetch)
 * @param {File} file - The file object to upload.
 */
function uploadFile(file) {
  const uploadStatusDiv = document.getElementById("upload-status");
  if (!uploadStatusDiv) {
    console.error('Element with id "upload-status" not found.');
    return; // Exit if status element doesn't exist
  }
  uploadStatusDiv.textContent = `アップロード中: ${file.name}...`;
  uploadStatusDiv.style.color = "black"; // Reset color

  const formData = new FormData();
  formData.append("song_file", file); // Key name must match server-side expectation

  fetch("/api/songs/upload", {
    // API endpoint for song upload
    method: "POST",
    body: formData,
    // Content-Type is automatically set by the browser for FormData
  })
    .then((response) => {
      // Handle the initial response
      if (!response.ok) {
        // Check for HTTP errors (4xx, 5xx)
        // Try to parse error response as JSON, otherwise throw basic HTTP error
        return response
          .json()
          .catch(() => {
            throw new Error(`HTTP error! status: ${response.status}`);
          })
          .then((errData) => {
            throw { status: response.status, data: errData }; // Throw an object with status and data
          });
      }
      return response.json(); // Parse successful response (2xx) as JSON
    })
    .then((data) => {
      // Process the parsed JSON data
      console.log("サーバーからの応答 (ファイルアップロード):", data);
      if (data.success) {
        uploadStatusDiv.textContent = `成功: ${data.message} (${data.file_info.name} として登録)`;
        uploadStatusDiv.style.color = "green";
        // TODO: Optionally refresh the main song list if displayed via Knockout
      } else {
        const errorMsg = data.errors ? data.errors.join(", ") : data.message;
        uploadStatusDiv.textContent = `エラー: ${errorMsg}`;
        uploadStatusDiv.style.color = "red";
      }
    })
    .catch((error) => {
      // Handle network errors or errors thrown above
      console.error("アップロードエラー:", error);
      let errorMessage = "アップロード中にエラーが発生しました。";
      if (error.data && error.data.message) {
        errorMessage = error.data.message;
      } // Use server error message if available
      else if (error.message) {
        errorMessage = error.message;
      } // Use generic fetch error message
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

  // --- ② Song Upload Event Listeners ---
  const addSongButton = document.getElementById("add-song-button");
  const songFileInput = document.getElementById("song-file-input");
  const uploadStatusDiv = document.getElementById("upload-status"); // Also get it here if needed immediately

  if (addSongButton && songFileInput) {
    addSongButton.addEventListener("click", function () {
      songFileInput.click(); // Trigger hidden file input
    });
  }
  if (songFileInput && uploadStatusDiv) {
    // Check if uploadStatusDiv exists
    songFileInput.addEventListener("change", function (event) {
      const files = event.target.files;
      if (files.length > 0) {
        const selectedFile = files[0];
        // uploadFile function will display "Uploading..." message
        uploadFile(selectedFile);
        event.target.value = null; // Reset file input to allow selecting the same file again
      } else {
        console.log("ファイル選択がキャンセルされました。");
        // uploadStatusDiv.textContent = ''; // Clear status message
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
  const playlistListUl = document.getElementById("playlist-list"); // This is the list on the main page

  // Toggle create playlist form visibility
  if (createPlaylistButton && createPlaylistForm) {
    createPlaylistButton.addEventListener("click", function () {
      createPlaylistForm.style.display =
        createPlaylistForm.style.display === "none" ||
        createPlaylistForm.style.display === ""
          ? "block"
          : "none";
    });
  }
  // Handle playlist creation submission
  if (
    submitPlaylistButton &&
    newPlaylistNameInput &&
    createPlaylistStatusSpan &&
    playlistListUl
  ) {
    submitPlaylistButton.addEventListener("click", function () {
      const playlistName = newPlaylistNameInput.value.trim();
      if (playlistName === "") {
        createPlaylistStatusSpan.textContent =
          "プレイリスト名を入力してください。";
        createPlaylistStatusSpan.style.color = "red";
        return;
      }
      createPlaylistStatusSpan.textContent = "作成中...";
      createPlaylistStatusSpan.style.color = "black";
      submitPlaylistButton.disabled = true;
      const formData = new FormData();
      formData.append("name", playlistName);

      fetch("/api/playlists/create", { method: "POST", body: formData })
        .then((response) => {
          if (!response.ok) {
            throw new Error(`HTTP ${response.status}`);
          }
          return response.json();
        })
        .then((data) => {
          if (data.success) {
            createPlaylistStatusSpan.textContent = data.message;
            createPlaylistStatusSpan.style.color = "green";
            newPlaylistNameInput.value = "";
            createPlaylistForm.style.display = "none";
            // --- ★★★ Update main page playlist list (DOM manipulation example) ★★★ ---
            const newListItem = document.createElement("li");
            const newLink = document.createElement("a");
            newLink.href = `/playlist/view/${data.playlist.id}`;
            newLink.textContent = data.playlist.name;
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
            // --- ★★★ This part might be better handled by Knockout if the main list is also bound ★★★ ---
          } else {
            createPlaylistStatusSpan.textContent = `エラー: ${data.message}`;
            createPlaylistStatusSpan.style.color = "red";
          }
        })
        .catch((error) => {
          console.error("プレイリスト作成エラー:", error);
          createPlaylistStatusSpan.textContent = `エラー: ${error.message}`;
          createPlaylistStatusSpan.style.color = "red";
        })
        .finally(() => {
          submitPlaylistButton.disabled = false;
        });
    });
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
  ); // Button inside the modal
  const addSongListDiv = document.getElementById("add-song-list"); // Div where song checkboxes are listed
  const addSongStatusDiv = document.getElementById("add-song-status"); // Status message div inside the modal
  const playlistSongsTable = document.getElementById("playlist-songs-table"); // The table showing songs in the current playlist

  // Show modal and load all songs
  if (addSongToPlaylistButton && addSongModal) {
    addSongToPlaylistButton.addEventListener("click", function () {
      addSongModal.style.display = "block";
      // ★ Use the ViewModel instance to call the method ★
      appViewModel.loadAllSongs();
    });
  }
  // Hide modal on cancel
  if (cancelAddSongsButton && addSongModal) {
    cancelAddSongsButton.addEventListener("click", function () {
      addSongModal.style.display = "none";
      // Optional: Clear checkboxes or error messages in the modal here
      if (addSongStatusDiv) addSongStatusDiv.textContent = "";
      const checkboxes = addSongListDiv
        ? addSongListDiv.querySelectorAll('input[type="checkbox"]:checked')
        : [];
      checkboxes.forEach((checkbox) => (checkbox.checked = false));
    });
  }
  // Handle adding selected songs to the playlist
  if (
    submitAddSongsButton &&
    addSongListDiv &&
    addSongStatusDiv &&
    addSongModal &&
    playlistSongsTable
  ) {
    submitAddSongsButton.addEventListener("click", function () {
      // 1. Get selected song IDs from checkboxes
      const checkedBoxes = addSongListDiv.querySelectorAll(
        'input[type="checkbox"]:checked'
      );
      const songIdsToAdd = [];
      checkedBoxes.forEach(function (checkbox) {
        songIdsToAdd.push(checkbox.value); // Assumes checkbox value is the song ID
      });

      if (songIdsToAdd.length === 0) {
        addSongStatusDiv.textContent = "追加する楽曲を選択してください。";
        addSongStatusDiv.style.color = "red";
        return;
      }

      // 2. Get current playlist ID from the table's data attribute
      const currentPlaylistId =
        playlistSongsTable.getAttribute("data-playlist-id");
      if (!currentPlaylistId) {
        addSongStatusDiv.textContent =
          "エラー: プレイリストIDを取得できませんでした。";
        addSongStatusDiv.style.color = "red";
        return;
      }

      addSongStatusDiv.textContent = "楽曲を追加中...";
      addSongStatusDiv.style.color = "black";
      submitAddSongsButton.disabled = true;

      // 3. Create FormData and send API request
      const formData = new FormData();
      songIdsToAdd.forEach(function (songId) {
        formData.append("song_ids[]", songId);
      }); // Send as an array
      const apiUrl = `/api/playlists/${currentPlaylistId}/songs`;

      fetch(apiUrl, { method: "POST", body: formData })
        .then((response) => {
          // Standard error handling for fetch
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
          console.log("楽曲追加応答:", data);
          if (data.success) {
            addSongStatusDiv.textContent = `成功: ${data.message}`;
            addSongStatusDiv.style.color = "green";
            // Don't close modal immediately, show success message for a bit? Or close it:
            setTimeout(() => {
              // Close modal after a short delay
              addSongModal.style.display = "none";
              addSongStatusDiv.textContent = ""; // Clear status
            }, 1500); // Close after 1.5 seconds

            // ★★★ Refresh the playlist song list using the ViewModel ★★★
            console.log("楽曲追加成功、リストを再読み込みします。");
            appViewModel.loadCurrentPlaylistSongs(currentPlaylistId); // Call ViewModel method
          } else {
            addSongStatusDiv.textContent = `エラー: ${data.message}`;
            addSongStatusDiv.style.color = "red";
          }
        })
        .catch((error) => {
          console.error("楽曲追加エラー:", error);
          let errorMessage = "追加中にエラーが発生しました。";
          if (error.data && error.data.message) {
            errorMessage = error.data.message;
          } else if (error.message) {
            errorMessage = error.message;
          }
          addSongStatusDiv.textContent = `エラー: ${errorMessage}`;
          addSongStatusDiv.style.color = "red";
        })
        .finally(() => {
          submitAddSongsButton.disabled = false; // Re-enable button
          // Clear checkboxes after attempt
          checkedBoxes.forEach((checkbox) => (checkbox.checked = false));
        });
    });
  }

  // --- ⑤ Initial data loading for playlist detail page ---
  // This needs to be inside DOMContentLoaded as well
  if (playlistSongsTable) {
    // Check if we are on the playlist detail page
    const currentPlaylistId =
      playlistSongsTable.getAttribute("data-playlist-id");
    if (currentPlaylistId) {
      console.log(
        "プレイリスト詳細ページを読み込みます ID:",
        currentPlaylistId
      );
      // ★ Use the ViewModel instance to load initial songs ★
      appViewModel.loadCurrentPlaylistSongs(currentPlaylistId);
      // Optionally store currentPlaylistId in ViewModel if needed by other bindings/methods
      // appViewModel.currentPlaylistId = currentPlaylistId;
    }
  }
}); // ★★★ End of DOMContentLoaded Listener ★★★
