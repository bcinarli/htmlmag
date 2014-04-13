<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/
?>		
		</div><!-- #content -->
		<div id="push"></div>
	</div><!-- #wrapper -->
	<footer id="mastfoot" class="page-footer">
		<div class="footer">
			<p>© <?php echo date('Y'); ?> - <a href="http://twitter.com/bcinarli">Bilal Cinarli</a> & HTML Mag. Built with <a href="http://mistoapp.com" target="_blank">Misto</a></p>
			<p><a href="http://twitter.com/htmlmag">Follow on Twitter</a> and for keep up with the content grap <a href="#">the rss feed</a>.</p>
		</div>
	</footer>
	<script src="<?php echo url::scripts('app-min.js'); ?>"></script>
	<?php if(html::$externalJS != ''): ?>
	<script src="<?php echo html::$externalJS; ?>"></script>
	<?php endif; ?>
</body>
</html>