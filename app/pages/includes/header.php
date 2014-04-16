<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/
?>
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php html::load_meta(); ?>

	<link rel="alternate" type="application/rss+xml" title="HTML Mag &raquo; Feed" href="http://feeds.feedburner.com/htmlmag" />

	<link rel="stylesheet" href="<?php echo url::styles('styles.css'); ?>" />
	<link rel="bookmark icon" href="<?php echo url::images('favicon.png'); ?>" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo url::images('apple-touch-icon.png'); ?>">

	<link rel="canonical" href="http://htmlmag.com<?php echo url::getUrl(); ?>" />
	<link rel="author" href="https://plus.google.com/116168797582640048599/posts">

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="HTML Mag" />
	<meta property="og:description" content="HTML Mag is a website dedicated for HTML, CSS and JavaScript." />
	<meta property="og:url" content="http://htmlmag.com/" />
	<meta property="og:site_name" content="HTML Mag" />
	<meta property="article:publisher" content="https://www.facebook.com/htmlmag" />
	<meta property="og:image" content="http://htmlmag.com/app/assets/images/logo@2x.png" />

	<?php if(html::$externalCSS != ''): ?>
	<link rel="stylesheet" href="<?php echo html::$externalCSS; ?>" />
	<?php endif; ?>
</head>
<body<?php echo html::$id != '' ? ' id="' . html::$id . '"' : ''; ?><?php echo html::$class != '' ? ' class="' . html::$class . '"' : ''; ?>>
<?php tools::inc('widgets/analytics'); ?>
	<div id="wrapper" class="page-wrap">
		<header class="page-header">
			<a href="<?php echo url::homepage(); ?>/"><h1 class="page-heading"><?php echo SITE_TITLE; ?></h1></a>

			<?php include "navigation.php"; ?>
		</header>
		<div id="content" class="page-content group">