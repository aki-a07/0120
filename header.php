<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>repos coffee</title>
    <meta name="description" content="説明文">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Noto+Sans+JP&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <?php wp_head(); ?>
</head>

<body>
    <!-- ヘッダーここから -->
    <header>
        <h1>repos coffee</h1>

            <!-- ナビゲーションメニュー -->
       <!-- ヘッダーにメニューを表示 -->
        <?php $args =array(//まず変数$argsを作ってarray()の中にデータを入れる。
                    'theme_location' => 'header_nav',// functions.phpで設定したメニューの名前を設定 //
                    'container' => 'nav',// <nav>タグを自動で出力してくれる。必ず書かなくてもデフォルトでは<div>タグを出力する。 //
                );
                wp_nav_menu($args);//メニューを表示
        ?>
    </header>
   
   <!-- ヘッダーここまで -->
