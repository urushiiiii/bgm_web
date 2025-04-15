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
        <?php // ↓ Knockout.jsでメッセージを表示する例 ↓ ?>
        <p><strong data-bind="text: welcomeMessage"></strong></p>
        <p>現在時刻: <span data-bind="text: currentDateTime"></span></p>
        <?php // ↑ ここまで追加例 ↑ ?>
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

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Your Name or App Name</p>
    </footer>

    <?php // body 閉じタグ直前でJSを読み込む場合 ?>
    <?php // echo Asset::js('scripts_footer.js'); ?>

</body>
</html>