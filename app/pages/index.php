<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/

tools::inc_setting('articles');

html::$id = 'homepage';
html::$class = 'homepage';

?>
<?php tools::inc('includes/header'); ?>
	<div id="main" class="main-content">
		<div class="articles">
			<?php foreach($GLOBALS['articles'] as $article): ?>
				<article class="summary">
                    <header class="article-header">
                        <h2 class="article-title"><a href="<?php echo url::make_url('article/' . $article['slug']); ?>"><?php echo $article['title']; ?></a></h2>
                        <div class="article-meta">
                            <span class="article-date"><i class="icon-date"></i> <?php echo tools::formatLocaleDate($article['date']); ?></span>
                            <span class="article-comments"><i class="icon-comment"></i> <a href="<?php echo url::make_url('article/' . $article['slug']); ?>#disqus_thread" data-disqus-identifier="<?php echo $article['slug']; ?>"></a></span>
                        </div>
                    </header>

					<p class="excerpt"><?php echo $article['excerpt']; ?></p>

                    <footer class="article-meta">
                        <span class="article-author"><i class="icon-author"></i> <?php echo $article['author']; ?></span>
                    </footer>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
<?php tools::inc('includes/footer');
