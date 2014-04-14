<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/

$md = new md('_articles/' . router::getMatches(1));

html::$class = 'article';

?>
<?php tools::inc('includes/header'); ?>
	<div id="main" class="main-content">
		<article class="article-content">
			<header class="article-header">
				<p class="article-meta">
					<span class="date"><?php echo tools::formatDate(html::$date); ?></span>
				</p>
				<h1 class="article-title"><?php echo html::$title; ?></h1>
			</header>

			<div class="article-content group">
				<?php $md::printContent(); ?>
			</div>

			<footer class="article-footer">
				<h3>Like the article?</h3>
				<?php tools::inc('widgets/share.php'); ?>
			</footer>
		</article>

		<?php if(html::$comments == 'true'): ?>
		<div id="comments" class="article-comments">
			<?php tools::inc('widgets/disqus'); ?>
		</div>
		<?php endif; ?>
	</div>

<?php tools::inc('includes/aside'); ?>
<?php tools::inc('includes/footer');