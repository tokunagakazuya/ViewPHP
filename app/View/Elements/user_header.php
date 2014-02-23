<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="google-site-verification" content="<?=Config::get('GOOGLE_WEBMASTERTOOL')?>">
    <meta charset="UTF-8">
<? //<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"> ?>
<?=View::meta('name', 'description')?>
<?=View::meta('name', 'keywords')?>
<?=View::meta('name', 'author', Config::get('SITE_NAME'))?>
<?=View::meta('property', 'og:title', Config::get('title') . ' - ' . Config::get('SITE_NAME'))?>
<?=View::meta('property', 'og:description', Config::get('description'))?>
<?=View::meta('property', 'og:image')?>
<?=View::meta('property', 'og:url', Config::get('PAGE_URL'))?>
<?=View::meta('property', 'og:site_name', Config::get('SITE_NAME'))?>
<?=View::meta('property', 'og:type', Config::get('id') === 'home' ? 'website' : 'article')?>
    <title><?=Config::get('title') . ' - ';?><?=Config::get('SITE_NAME')?></title>
    <link rel="stylesheet" href="//common-css.googlecode.com/git-history/1.1.0/common.css">
    <link rel="stylesheet" href="<?=Config::get('SITE_URL')?>/css/style.css">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="//ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
</head>

<body<?=Config::get('id') ? 'id="page' .ucwords(Config::get('id')). '"' : "";?><?=Config::get('class') ? 'class="page' .ucwords(Config::get('class')). '"' : "";?>>

<header id="header">
    header
</header>

<hr>