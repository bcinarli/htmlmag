<?php
/**
 * @author Bilal Cinarli
 *
 * Feeds
 */

tools::inc_setting('articles');

feed::$feed_source = $GLOBALS['articles'];
feed::$fulltext = true;
feed::$title = 'HTML Magazine';
feed::$author = 'Bilal Cinarli';
feed::$author_email = 'htmlmag@htmlmag.com';
feed::$link = url::make_abs_url('');

$feed = new feed();