<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/


    $routes = array();
    $routes['404'] = array('url' => null, 'page' => '/pages/404.php', 'role' => 404);

    $routes['homepage'] = array('url' => '/', 'page' => '/pages/index.php', 'role' => 'homepage');
	$routes['feed']  = array('url' => '/feed', 'page' => '/pages/feed.php', 'role' => 'feed');
	$routes['article']  = array('url' => '/article/([a-z0-9-]+)', 'page' => '/pages/article.php', 'match' => 'regex', 'role' => 'article');
	$routes['event']  = array('url' => '/etkinlik/([a-z0-9-]+)', 'page' => '/pages/event.php', 'match' => 'regex', 'role' => 'event');
	$routes['page']  = array('url' => '/([a-z0-9-]+)', 'page' => '/pages/page.php', 'match' => 'regex');