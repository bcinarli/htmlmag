<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/
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

	<link rel="canonical" href="http://htmlmag.com<?php echo url::getUrl(); ?>" />
	<link rel="author" href="https://plus.google.com/116168797582640048599/posts">

	<meta property="og:locale" content="<?php echo html::$lang != '' ? html::$lang : 'en_US'; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo html::$title != '' ? html::$title . ' | ' : ''; ?>HTML Mag" />
	<meta property="og:url" content="http://htmlmag.com<?php echo url::getUrl(); ?>" />
	<meta property="og:site_name" content="HTML Mag" />
	<meta property="article:publisher" content="https://www.facebook.com/htmlmag" />
</head>
<body<?php echo html::$id != '' ? ' id="' . html::$id . '"' : ''; ?><?php echo html::$class != '' ? ' class="' . html::$class . '"' : ''; ?>>
<?php tools::inc('widgets/analytics'); ?>
	<div id="wrapper" class="event-page-wrap">
		<header class="event-page-header">
            <div class="event-page-container">
                <nav class="event-nav group">
                    <?php echo navigation::getNav('event_nav', 'output=""&wrap=""'); ?>
                </nav>
            </div>
		</header>
		<div id="content" class="event-page-content group">