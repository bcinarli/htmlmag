<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/

html::$id = 'error-404';
html::$class = 'error-404';

?>
<?php tools::inc('includes/header'); ?>
	<div id="main" class="main-content">
		<h1 class="page-title">Aradığınız sayfayı bulamadık :(</h1>
		<p>Belki yanlış bir linke basmış ya da kaldırılmış bir sayfaya denk gelmiş olabilirsiniz. Dilerseniz, aşağıdaki yazı listemizden ilginizi çeken birine bakabilirsiniz.</p>
		<ul class="article-list">
		<?php foreach($GLOBALS['articles'] as $article): ?>
			<li class="article">
				<a href="<?php echo url::make_url('article/' . $article['slug']); ?>"><?php echo $article['title']; ?></a>
				<span class="date"><?php echo tools::formatLocaleDate($article['date']); ?></span>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php tools::inc('includes/footer');
