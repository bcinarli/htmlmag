<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/

html::$id = 'homepage';
html::$class = 'homepage';

?>
<?php tools::inc('includes/header'); ?>
	<div id="main" class="main-content">
		<h1 class="page-title">The page, you've looked, could not found.</h1>
		<p>Please check your url, or try another page listed below</p>
		<ul class="article-list">
		<?php foreach($GLOBALS['articles'] as $article): ?>
			<li class="article">
				<a href="<?php echo url::make_url('article/' . $article['slug']); ?>"><?php echo $article['title']; ?></a>
				<span class="date"><?php echo $article['date']; ?></span>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>

<?php tools::inc('includes/aside'); ?>
<?php tools::inc('includes/footer');
