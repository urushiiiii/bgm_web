<h2>楽曲一覧</h2>
<?php if(empty($songs)): ?>
    <p>登録されている楽曲はありません</p>
<?php else: ?>
    <table>
        <thread>
            <tr>
                <th>ID</th>
                <th>楽曲名</th>
                <th>登録日時</th>
                <th>操作</th>
            </tr>
        </thread>
        <tbody>
            <?php foreach ($songs as $song):　?>
                <tr>
                    <td><?php echo e($song['id']); ?></td>
                    <td><?php echo e($song['name']); ?></td>
                    <td><?php echo e(Date::forge(strtotime($song['created_at']))->format('%Y/%m/%d %H:%M')); ?></td>
                    <td>
                        <button class="play-button" data-song-id="<?php echo e($song['id']); ?>" data-file-path="<?php echo e($song['file_path']); ?>">▶ 再生</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>


<p><a href="<?php echo Uri::base(false); ?>">ホームに戻る</a></p> 
