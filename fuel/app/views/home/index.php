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

<section>
    <h3>再生ログ</h3>
    <?php // ↓ ここからログ一覧表示 ↓ ?>
    <?php if (isset($logs) && !empty($logs)): ?>
        <table border="1" style="width: 100%; margin-top: 10px;">
            <thead>
                <tr>
                    <th>再生日時</th>
                    <th>楽曲名</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logs as $log): ?>
                    <tr>
                        <?php // 日時のフォーマット ?>
                        <td><?php echo e(Date::forge(strtotime($log['created_at']))->format('%Y/%m/%d %H:%M:%S')); ?></td>
                        <td><?php echo e($log['name']); ?></td> <?php // ModelでJOINして取得した楽曲名 ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="pagination-container" style="margin-top: 10px;">
            <?php // Controllerから $data 配列経由で渡されたHTMLを出力。PHP標準関数でデコード ?>
            <?php echo isset($pagination_links_html) ? html_entity_decode($pagination_links_html) : ''; ?>
        </div>

    <?php else: ?>
        <p style="margin-top: 10px;">再生ログはまだありません。</p>
    <?php endif; ?>
    <?php // ↑ ここまでログ一覧表示 ↑ ?>
</section>
