<?php
Config::set('title', 'サイト名');
Config::set('description', 'ディスクリプション');
Config::set('keywords', 'キーワード1, キーワード2');
Config::set('og:description', 'OGP用ディスクリプション');
Config::set('og:image', Config::get('SITE_URL') . '/img/***'); //OGP用画像のURL
Config::set('og:url', ''); // 現在のURLとOGP用のURLが異なる場合は記載
Config::set('id', 'home'); //bodyにIDをつけることができます。（homeの場合は<body id="pageHome">）
Config::set('class', ''); //bodyにClassをつけることができます。（homeの場合は<body class="pageHome">）
View::elements('user_header'); //ヘッダーファイルをインクルード
?>

<h1>ViewPHP</h1>
<p>Hello World</p>

<?php View::elements('user_side');?>
<?php View::elements('user_footer'); ?>
