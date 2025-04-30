<?php // ファイルパス: fuel/app/views/songs/index.php ?>

<h2>楽曲一覧</h2>

<?php // ↓ Knockout.js で描画するためのテーブルコンテナ ↓ ?>
<table border="1" id="songs-list-table"> <?php // ← JSから参照するためのIDを追加 ?>
    <thead>
        <tr>
            <th>ID</th>
            <th>楽曲名</th>
            <th>登録日時</th>
            <th>操作</th>
        </tr>
    </thead>
    <?php // ↓ tbody に data-bind="foreach: ..." を指定 ↓ ?>
    <tbody data-bind="foreach: $root.songsList"> <?php // ViewModelの songsList 配列でループ ?>
        <tr>
            <td data-bind="text: id"></td>
            <td data-bind="text: name"></td>
            <?php /* 日付のフォーマットはViewModel側で行うか、カスタムバインディングを使うのがよりKnockoutらしい */ ?>
            <td data-bind="text: new Date(created_at).toLocaleString()"></td> <?php // 簡単な表示例 ?>
            <td>
                <button type="button" class="play-button" data-bind="click: $root.loadAndPlay">▶ 再生</button>
            </td>
        </tr>
    </tbody>
</table>
<?php // ↑ Knockout.js で描画する部分 ↑ ?>

<?php // Knockout.jsでデータがない場合やエラー時の表示 (任意) ?>
<p data-bind="visible: !$root.songsList().length && !$root.loadingSongsListError()">登録されている楽曲はありません。</p>
<p data-bind="if: $root.loadingSongsListError" style="color: red;" data-bind="text: 'エラー: ' + $root.loadingSongsListError()"></p>

<p><a href="<?php echo Uri::base(false); ?>">ホームに戻る</a></p>