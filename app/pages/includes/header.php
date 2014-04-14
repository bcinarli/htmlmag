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