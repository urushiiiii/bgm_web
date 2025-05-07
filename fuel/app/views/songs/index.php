<?php // ファイルパス: fuel/app/views/songs/index.php ?>

<h2>楽曲一覧</h2>

<table border="1" id="songs-list-table"> 
    <thead>
        <tr>
            <th>ID</th>
            <th>楽曲名</th>
            <th>登録日時</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody data-bind="foreach: $root.songsList"> <?php // ViewModelの songsList 配列でループ ?>
        <tr>
            <td data-bind="text: id"></td>
            <td data-bind="text: name"></td>
            <td data-bind="text: new Date(created_at).toLocaleString()"></td>
            <td>
            <button type="button" class="play-button"
            data-bind="click: $root.togglePlayPauseList, 
                       text: $root.isCurrentlyPlaying($data) ? '⏸' : '▶', 
                       attr: {'data-song-id': id}">
            </td>
        </tr>
    </tbody>
</table>

<?php // Knockout.jsでデータがない場合やエラー時の表示 ?>
<p data-bind="visible: !$root.songsList().length && !$root.loadingSongsListError()">登録されている楽曲はありません。</p>
<p data-bind="if: $root.loadingSongsListError" style="color: red;" data-bind="text: 'エラー: ' + $root.loadingSongsListError()"></p>

<p><a href="<?php echo Uri::base(false); ?>">ホームに戻る</a></p>