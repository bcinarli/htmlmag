<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/

$md = new md(router::getMatches(1));

html::$class = 'article';
html::$lang = $md::getMeta('lang');

?>
<?php tools::inc('includes/header'); ?>
	<div id="main" class="main-content">
		<article class="article-content">
			<header class="article-header">
				<h1 class="article-title"><?php echo html::$title; ?></h1>
                <div class="article-meta">
                    <span class="article-author"><i class="icon-author"></i> <?php echo html::$author; ?></span>
                    <span class="article-date"><i class="icon-time"></i> <?php echo tools::formatLocaleDate(html::$date); ?></span>
                    <?php if(html::$comments == 'true'): ?>
                    <span class="article-comments"><i class="icon-comment"></i> <a href="#disqus_thread" data-disqus-identifier="<?php echo html::$slug; ?>"></a></span>
                    <?php endif; ?>
                </div>
			</header>

			<div class="article-content group">
				<?php $md::printContent(); ?>
			</div>

			<footer class="article-footer">
				<h3 class="like-article"><i class="icon-share"></i> Sevdiniz mi? O halde paylaşın!</h3>
				<?php tools::inc('widgets/share.php'); ?>
			</footer>
		</article>

		<?php if(html::$comments == 'true'): ?>
		<div id="comments" class="article-comments">
			<div id="disqus_thread"></div>
		</div>
		<?php endif; ?>
	</div>

<?php tools::inc('includes/aside'); ?>
<?php tools::inc('includes/footer');