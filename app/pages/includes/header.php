<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/

if(role::is_homepage() && html::$description == ''){
    html::$description = 'HTML Magazin sitesi, HTML, CSS ve JavaScript konularında güncel ve araştırma öncelikli içerikler sunmaya adanmıştır. Hazırlanan yazılan Türkçe ve İngilizce karışık olarak sunulmaktadır.';
}

?>
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="<?php echo html::$lang != '' ? html::$lang : 'en_US'; ?>">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php html::load_meta(); ?>

	<link rel="alternate" type="application/rss+xml" title="HTML Mag &raquo; Feed" href="http://feeds.feedburner.com/htmlmag" />

	<link rel="stylesheet" href="<?php echo url::styles('styles.css'); ?>" />
	<link rel="bookmark icon" href="<?php echo url::images('favicon.png'); ?>" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo url::images('apple-touch-icon.png'); ?>">

    <?php if(!role::is_404()): ?>
	<link rel="canonical" href="http://htmlmag.com<?php echo url::getUrl(); ?>" />
	<link rel="author" href="https://plus.google.com/116168797582640048599/posts">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@htmlmag" />
    <meta name="twitter:title" content="<?php echo html::$title != '' ? html::$title . ' | ' : ''; ?>HTML Mag">
    <?php if(html::$description != ''): ?>
    <meta name="twitter:description" content="<?php echo html::$description; ?>" />
    <?php endif ?>
    <meta name="twitter:creator" content="@bcinarli">
    <meta name="twitter:image" content="http://htmlmag.com<?php echo isset(html::$meta['og_image']) ? html::$meta['og_image'] : '/app/assets/images/og-image.png'; ?>" />

	<meta property="fb:app_id" content="937041086326922" />
	<meta property="og:locale" content="<?php echo html::$lang != '' ? html::$lang : 'en_US'; ?>" />
	<meta property="og:type" content="<?php echo role::is('article') ? 'article' : 'website'; ?>" />
	<meta property="og:title" content="<?php echo html::$title != '' ? html::$title . ' | ' : ''; ?>HTML Mag" />
	<?php if(isset(html::$meta['og_description'])): ?>
	<meta property="og:description" content="<?php echo html::$meta['og_description']; ?>" />
	<?php endif; ?>
	<meta property="og:url" content="http://htmlmag.com<?php echo url::getUrl(); ?>" />
	<meta property="og:site_name" content="HTML Mag" />
    <meta property="og:image" content="http://htmlmag.com<?php echo isset(html::$meta['og_image']) ? html::$meta['og_image'] : '/app/assets/images/og-image.png'; ?>" />
    <?php if(role::is('article')): ?>
	<meta property="article:publisher" content="https://www.facebook.com/htmlmag" />
	<meta property="article:author" content="<?php echo html::$meta['profile']; ?>" />
    <?php endif; ?>

	<?php if(html::$externalCSS != ''): ?>
	<link rel="stylesheet" href="<?php echo html::$externalCSS; ?>" />
	<?php endif; ?>
    <?php endif; ?>
</head>
<body<?php echo html::$id != '' ? ' id="' . html::$id . '"' : ''; ?><?php echo html::$class != '' ? ' class="' . html::$class . '"' : ''; ?>>
<?php tools::inc('widgets/analytics'); ?>
	<div id="wrapper" class="page-wrap">
		<header class="page-header">
            <div class="page-container">
                <a href="<?php echo url::homepage(); ?>/"><h1 class="page-heading"><?php echo SITE_TITLE; ?></h1></a>

                <?php include "navigation.php"; ?>
            </div>
		</header>
		<div id="content" class="page-content group">