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
					<h2 class="article-title"><a href="<?php echo url::make_url('article/' . $article['slug']); ?>"><?php echo $article['title']; ?></a></h2>
					<p class="excerpt"><?php echo $article['excerpt']; ?></p>
                    <footer class="article-meta">
                        <span class="article-author"><?php echo $article['author']; ?></span>
                        <span class="article-date"><?php echo tools::formatLocaleDate($article['date']); ?></span>
                        <span class="article-comments"><a href="<?php echo url::make_url('article/' . $article['slug']); ?>#disqus_thread" data-disqus-identifier="<?php echo $article['slug']; ?>"></a></span>
                    </footer>
				</article>
			<?php endforeach; ?>
		</div>
	</div>

<?php tools::inc('includes/aside'); ?>
<?php tools::inc('includes/footer');
