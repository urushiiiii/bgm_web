<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($title) ? $title : 'BGM App'; ?></title> <?php // Controllerで設定したタイトルを表示 ?>


    <?php // --- CSSファイルの読み込み --- ?>
    <?php // Assetクラスを使うと便利 (例: public/assets/css/style.css を読み込む場合) ?>
    <?php // echo Asset::css('style.css'); ?>
    <?php // (もしCSSファイルがまだなければ、この行はコメントアウトしておくか削除) ?>

    <?php // --- JavaScriptファイルの読み込み --- ?>
    <?php // jQueryやKnockout.js、自作JSファイルを読み込む ?>
    <?php // 例: public/assets/js/knockout.js や public/assets/js/main.js など ?>
    <?php // echo Asset::js('knockout-x.y.z.js'); // x.y.zは実際のバージョン ?>
    <?php // echo Asset::js('main.js'); ?>
    <?php // (ファイルがまだなければコメントアウトしておくか削除) ?>
    <?php // まずKnockout.jsライブラリ本体を読み込む (ファイル名はダウンロードしたものに合わせてください) ?>
    <?php echo Asset::js('knockout-v3.5.1.js');  ?>

    <?php // 自作のJavaScriptファイル (ViewModelなどを書く) を読み込む ?>
    <?php echo Asset::js('app.js'); ?>

</head>
<body>

    <header>
        <h1><a href="<?php echo Uri::base(false); ?>">BGMアプリ</a></h1>
        <nav>
            <ul>
                <li><a href="<?php echo Uri::create('home/index'); ?>">ホーム</a></li> <?php // 全体ページへのリンク ?>
                <li><a href="<?php echo Uri::create('songs/index'); ?>">楽曲一覧</a></li> <?php // 楽曲ページへのリンク (仮) ?>
                <?php // 他に必要なナビゲーションリンクを追加 ?>
            </ul>
        </nav>
    </header>

    <main>
        <?php // --- 各ページの固有コンテンツがここに表示される --- ?>
        <?php echo isset($content) ? $content : ''; ?>
    </main>

    <?php // ↓ 再生用のaudio要素を設置 (通常は非表示) ↓ ?>
    <audio id="audio-player" style="display: none;"></audio>

    <footer>
        <div class="player-controls" style="padding: 10px; border-top: 1px solid #ccc; text-align: center;"> 
            <button type="button" id="play-pause-button" data-bind="click: playPauseToggle, text: isPlaying() ? '⏸ 一時停止' : '▶ 再生', enable: currentSong()">
                <?php // Knockoutの isPlaying 状態に応じてテキストと活性状態が変わる ?>
            </button>
            <span style="margin-left: 15px;">再生中:</span>
            <span data-bind="text: currentSong() ? currentSong().name : '---'"></span> <?php // Knockoutの currentSong の name を表示 ?>
                <?php // ここに後でプログレスバーや音量調整などを追加 ?>
        </div>
        <p style="text-align: center; margin-top: 5px;">&copy; <?php echo date('Y'); ?> Your Name or App Name</p> <?php // コピーライトも中央揃えに(例) ?>
    </footer>

    <?php // body 閉じタグ直前でJSを読み込む場合 ?>
    <?php // echo Asset::js('scripts_footer.js'); ?>

</body>
</html>