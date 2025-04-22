<h2>ホーム (全体ページ)</h2>
<p>ここに全体ページのコンテンツが表示されます。</p>

<sction>
    <h3>楽曲</h3>
    <p><a href="<?php Uri::create('songs/index'); ?>">楽曲一覧へ</a></p>
    <button type="button" id="add-song-button">楽曲を追加</button>
    <input type="file" id="song-file-input" accept=".mp3,.wav" style="display: none;">
    <div id="upload-status" style="margin-top: 10px;"></div>
</section>

<section>
    <h3>プレイリスト一覧</h3>
    <ul id="playlist-list" style="margin-top: 10px;">
        <?php if (isset($playlists) && !empty($playlists)): ?>
            <?php foreach ($playlists as $playlist): ?>
                <li>
                    <a href="<?php echo Uri::create('playlist/view/' . e($playlist['id'])); ?>">
                        <?php echo e($playlist['name']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>プレイリストはまだありません。</li>
        <?php endif; ?>
    </ul>
    <button type="button" id="create-playlist-button">新しいプレイリストを作成する</button>
    <div id="create-playlist-form" style="display: none; margin-top: 10px;">
        <input type="text" id="new-playlist-name" placeholder="新しいプレイリスト名">
        <button type="button" id="submit-playlist-button">作成</button>
        <span id="create-playlist-status"></span>
    </div>
</section>