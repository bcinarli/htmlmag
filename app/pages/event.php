<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/
md::$doc_root = '_events';

$md = new md(router::getMatches(1));

html::$class = 'event';
html::$lang = $md::getMeta('lang');

$eventNav = new event($md::getMeta('links'));
?>
<?php tools::inc('includes/event-header'); ?>
    <?php $md::printContent(); ?>
<?php tools::inc('includes/event-footer');