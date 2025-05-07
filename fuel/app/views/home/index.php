<h2>ホーム (全体ページ)</h2>

<sction>
    <h3>楽曲</h3>
    <p><a href="<?php echo Uri::create('songs/index'); ?>">楽曲一覧へ</a></p>
    <button type="button" id="add-song-button">楽曲を追加</button>
    <input type="file" id="song-file-input" accept=".mp3,.wav" style="display: none;">
    <div id="upload-status" style="margin-top: 10px;"></div>
</section>

<?php // DOM操作による動的更新も実装してみたいので、今回初期表示はPHPで行っている ?>
<section>
    <h3>プレイリスト一覧</h3>
    <ul id="playlist-list" style="margin-top: 10px;">
    <?php if (isset($playlists) && !empty($playlists)): ?>
        <?php $last_viewed_id = (isset($last_viewed_playlist_id) && $last_viewed_playlist_id > 0) ? $last_viewed_playlist_id : null; ?>

        <?php foreach ($playlists as $playlist): ?>
            <li <?php if ($last_viewed_id !== null && $playlist['id'] == $last_viewed_id): ?> style="font-weight: bold;" <?php endif; ?>>
                <a href="<?php echo Uri::create('playlist/view/' . e($playlist['id'])); ?>">
                    <?php echo e($playlist['name']); ?>
                     <?php if ($last_viewed_id !== null && $playlist['id'] == $last_viewed_id): ?> (← recently viewed) <?php endif; ?>
                </a>
                    (作成日: <?php echo e(Date::forge(strtotime($playlist['created_at']))->format('%Y/%m/%d')); ?>)
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>プレイリストはまだありません。</li>
        <?php endif; ?>
    </ul>
    <button type="button" id="create-playlist-button">新しいプレイリストを作成する</button>
    <span id="create-playlist-status" style="margin-left: 10px; font-weight: bold;"></span>
    <div id="create-playlist-form" style="display: none; margin-top: 10px;">
        <input type="text" id="new-playlist-name" placeholder="新しいプレイリスト名">
        <button type="button" id="submit-playlist-button">作成</button>
    </div>
</section>

<section>
    <h3>予約一覧</h3>
    <button type="button" id="create-reservation-button">新規予約を作成</button> 

    <table border="1" style="width: 100%; margin-top: 10px;" id="reservations-list-table">
        <thead>
            <tr>
                <th>予約日時</th>
                <th>プレイリスト名</th>
                <th>状態</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody data-bind="foreach: reservations">
            <tr>
                <td data-bind="text: new Date(reservation_datetime).toLocaleString()"></td>
                <td data-bind="text: playlist_name"></td>
                <td data-bind="text: status"></td>
                <td>
                <button type="button" class="edit-reservation-button"
                data-bind="click: $root.startEditReservation, attr: {'data-reservation-id': id}">編集</button>
                    <button type="button" class="delete-reservation-button" data-bind="click: $root.deleteReservation, attr: {'data-reservation-id': id}">削除</button>
                </td>
            </tr>
        </tbody>
    </table>
    <?php // Knockout.jsでデータがない場合やエラー時の表示 ?>
    <p data-bind="visible: !reservations().length && !loadingReservationsError()">登録されている予約はありません。</p>
    <p data-bind="if: loadingReservationsError" style="color: red;" data-bind="text: 'エラー: ' + loadingReservationsError()"></p>
</section>

<?php // --- 予約作成モーダル用のHTMLを追加 --- ?>
<div id="reservation-modal" style="display: none; padding: 20px; border: 1px solid #ccc; margin-top: 20px; background-color: #f9f9f9;">
<h3 data-bind="text: isEditingReservation() ? '再生予約の編集' : '新規再生予約'"></h3>
    <div style="margin-bottom: 10px;">
        <label for="reservation-playlist">プレイリスト:</label><br>
        <select id="reservation-playlist" name="playlist_id"
            data-bind="options: availablePlaylists,
                       optionsText: 'name',
                       optionsValue: 'id',
                       value: selectedPlaylistId,
                       optionsCaption: '-- 選択してください --'">
    </select>
    </div>
    <div style="margin-bottom: 10px;">
        <label for="reservation-date">再生日時:</label><br>
        <input type="date" id="reservation-date" name="reservation_date">
        <input type="time" id="reservation-time" name="reservation_time">
    </div>
    <div>
        <button type="button" id="save-reservation-button" data-bind="text: isEditingReservation() ? '更新' : '予約を保存'"></button>
        <button type="button" id="cancel-reservation-button">キャンセル</button>
    </div>
    <div id="reservation-status" style="margin-top: 10px; color: red;"></div> <?php // エラーメッセージ等表示用 ?>
</div>


<section>
    <h3>再生ログ</h3>
    <?php // ここからログ一覧表示 ?>
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
                        <td><?php echo e($log['name']); ?></td> 
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="pagination-container" style="margin-top: 10px;">
            <?php echo isset($pagination_links_html) ? html_entity_decode($pagination_links_html) : ''; ?>
        </div>

    <?php else: ?>
        <p style="margin-top: 10px;">再生ログはまだありません。</p>
    <?php endif; ?>
</section>
