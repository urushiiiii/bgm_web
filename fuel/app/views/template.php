<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($title) ? e($title) : 'BGM App'; ?></title>
    <?php echo Asset::js('knockout-v3.5.1.js');  ?>
    <?php echo Asset::js('app.js'); ?>
    <?php // --- 通知バナー表示エリアを追加 --- ?>
    <div id="notification-banner" data-bind="if: currentNotification" style="background-color: lightblue; padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
        <span>予約時間です！ プレイリスト「<strong data-bind="text: currentNotification().playlist_name"></strong>」</span>
        <button type="button" data-bind="click: playFromNotification">再生</button>
        <button type="button" data-bind="click: dismissNotification" style="margin-left: 10px;">閉じる</button>
    </div>

</head>
<body>

    <header>
        <h1><a href="<?php echo Uri::base(false); ?>">BGMアプリ</a></h1>
        <nav>
            <ul>
                <li><a href="<?php echo Uri::create('home/index'); ?>">ホーム</a></li> <?php // 全体ページへのリンク ?>
            </ul>
        </nav>
    </header>

    <main>
        <?php // --- 各ページの固有コンテンツがここに表示される --- ?>
        <?php echo isset($content) ? $content : ''; ?>
    </main>

    <?php // 再生用のaudio要素を設置 (通常は非表示)  ?>
    <audio id="audio-player" style="display: none;"></audio>

    <footer>
        <div class="player-controls" style="padding: 10px; border-top: 1px solid #ccc; text-align: center;"> 
            <button type="button" id="play-pause-button" data-bind="click: playPauseToggle, text: isPlaying() ? '⏸ 一時停止' : '▶ 再生', enable: currentSong()">
                <?php // Knockoutの isPlaying 状態に応じてテキストと活性状態が変わる ?>
            </button>
            <span style="margin-left: 15px;">再生中:</span>
            <span data-bind="text: currentSong() ? currentSong().name : '---'"></span> <?php // Knockoutの currentSong の name を表示 ?>
            <?php // --- 音量調整スライダーを追加 --- ?>
                <span style="margin-left: 30px;">音量:</span>
                <input type="range" id="volume-slider" min="0" max="1" step="0.05"
                        data-bind="value: currentVolume, valueUpdate: 'input'">
                <span data-bind="text: Math.round(currentVolume() * 100) + '%'"></span> <?php // 現在の音量を%表示 ?>
        </div>
        <p style="text-align: center; margin-top: 5px;">&copy; <?php echo date('Y'); ?> Your Name or App Name</p> 
    </footer>

</body>
</html>