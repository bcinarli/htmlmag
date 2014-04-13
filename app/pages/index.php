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
		<div class="articles group">
			<?php foreach($GLOBALS['articles'] as $article): ?>
				<article class="summary">
					<span class="date"><?php echo tools::formatDate($article['date']); ?></span>
					<h2 class="article-title"><a href="<?php echo url::make_url('article/' . $article['slug']); ?>"><?php echo $article['title']; ?></a></h2>
					<p class="excerpt"><?php echo $article['excerpt']; ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>

<?php tools::inc('includes/aside'); ?>
<?php tools::inc('includes/footer');
