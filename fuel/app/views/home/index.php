<h2>ホーム (全体ページ)</h2>
<p>ここに全体ページのコンテンツが表示されます。</p>

<sction>
    <h3>楽曲</h3>
    <p><a href="<?php Uri::create('songs/index'); ?>">楽曲一覧へ</a></p>
    <button type="button" id="add-song-button">楽曲を追加</button>
    <input type="file" id="song-file-input" accept=".mp3,.wav" style="display: none;">
    <div id="upload-status" style="margin-top: 10px;"></div>
</section>
