<?php // ファイルパス: fuel/app/views/playlist/view.php ?>

<?php // Controllerから渡された $playlist 変数が存在するか確認 ?>
<?php if (isset($playlist) && $playlist): ?>
    <h2>プレイリスト: <?php echo e($playlist['name']); ?></h2> <?php // プレイリスト名を表示 (e()でXSS対策) ?>
    <p>作成日: <?php echo e(Date::forge(strtotime($playlist['created_at']))->format('%Y/%m/%d')); ?></p>

    <div>
        <button type="button" id="play-playlist-button" data-playlist-id="<?php echo e($playlist['id']); ?>"
                data-bind="click: playPlaylist, enable: currentPlaylistSongs().length > 0">
            ▶ このプレイリストを再生
        </button>
        <button type="button" id="add-song-to-playlist-button" data-playlist-id="<?php echo e($playlist['id']); ?>">楽曲を追加</button> <?php // 楽曲追加ボタン (機能は後で) ?>
         <?php // ↓ プレイリスト削除ボタンもここに追加 ↓ ?>
         <button type="button" class="delete-playlist-button"
                 data-bind="click: deletePlaylist"
                 data-playlist-id="<?php echo e($playlist['id']); ?>"
                 data-playlist-name="<?php echo e($playlist['name']); ?>">このプレイリストを削除</button>
    </div>

    <h3>収録曲</h3>
    <?php // Controllerから渡された $songs 変数が存在し、空でないか確認 ?>
    <?php if (isset($songs) && !empty($songs)): ?>
        <table border="1" id="playlist-songs-table" data-playlist-id="<?php echo e($playlist['id']); ?>">
            <thead>
                <tr>
                    <th>#</th> <?php // 曲順 (単純な連番) ?>
                    <th>楽曲名</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody data-bind="foreach: currentPlaylistSongs">
                <tr>
                    <td data-bind="text: $index() + 1"></td> <?php // $index() でループのインデックス(0始まり)を取得 ?>
                    <td data-bind="text: name"></td>      <?php // ViewModelのsongs配列内の各要素のnameプロパティを表示 ?>
                    <td>
                        <button type="button" class="remove-song-button"
                        data-bind="click: $parent.removeSong, attr: {'data-song-id': id}">削除</button>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php else: ?>
        <p>このプレイリストにはまだ曲が登録されていません。</p>
        <div id="playlist-songs-table" data-playlist-id="<?php echo e($playlist['id']); ?>"></div>
    <?php endif; ?>

<?php else: ?>
    <?php // Controllerで $playlist が取得できなかった場合 (通常はControllerで404になるはず) ?>
    <p>指定されたプレイリストが見つかりません。</p>
<?php endif; ?>

<hr>
<p><a href="<?php echo Uri::base(false); ?>">ホームに戻る</a></p>

<?php // --- 楽曲追加モーダルのためのHTML --- ?>
<div id="add-song-modal" style="display: none; border: 1px solid #ccc; padding: 15px; margin-top: 15px;">
    <h4>プレイリストに楽曲を追加</h4>
    <?php // ↓ Knockout.js で楽曲リストを表示する部分 ↓ ?>
    <div id="add-song-list" data-bind="foreach: allSongs" style="max-height: 200px; overflow-y: auto; margin-bottom: 10px;">
        <div>
            <input type="checkbox" data-bind="value: id, attr: { id: 'song-check-' + id }">
            <label data-bind="text: name, attr: { for: 'song-check-' + id }"></label>
        </div>
    </div>
    <?php // ↑ ここまで Knockout.js 表示部分 ↑ ?>
    <?php // Knockout.jsで読み込み状態やエラーを表示する例 (任意) ?>
    <div data-bind="if: !allSongsLoaded() && !loadingSongsError()">楽曲リストを読み込み中...</div>
    <div data-bind="if: loadingSongsError" style="color: red;" data-bind="text: 'エラー: ' + loadingSongsError()"></div>
    <div data-bind="if: allSongsLoaded() && !allSongs().length">追加できる楽曲がありません。</div>

    <button type="button" id="submit-add-songs-button">選択した曲を追加</button>
    <button type="button" id="cancel-add-songs-button">キャンセル</button>
    <div id="add-song-status"></div>
</div>
</div>