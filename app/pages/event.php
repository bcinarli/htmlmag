<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/
$md = new md('_events/' . router::getMatches(1));

html::$class = 'event';
html::$lang = $md::getMeta('lang');

$eventNav = new event($md::getMeta('links'));
?>
<?php tools::inc('includes/event-header'); ?>
    <?php $md::printContent(); ?>
<?php tools::inc('includes/event-footer');