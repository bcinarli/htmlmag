<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/

include "articles.php";

$main_nav = array(
    array('name' => 'ANA SAYFA <span class="description">HTML Merkezi</span>', 'url' => '/', 'linkclass' => 'main-nav-item'),
    array('name' => 'HAKKIMIZDA <span class="description">Arkasında Kim Var?</span>', 'url' => '/about', 'linkclass' => 'main-nav-item')
);

$GLOBALS['main_nav'] = $main_nav;