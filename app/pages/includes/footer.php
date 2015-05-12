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
		<div class="page-footer-content">
			<p>© <?php echo date('Y'); ?> - <a href="http://twitter.com/bcinarli">Bilal Cinarli</a> & HTML Mag. <a href="http://mistoapp.com" target="_blank">Misto</a> ile hazırlanmıştır. Logo ve tasarımlar <a href="http://www.hasanyalcin.com" target="_blank">Hasan Yalçın</a> tarafından dizayn edilmiştir.</p>
			<p>Güncellemelerden ve yeni içeriklerden haberdar olmak için bizi<a href="http://twitter.com/htmlmag">Twitter'da takip edin</a> ya da RSS okuyucunuz için <a href="http://feeds.feedburner.com/htmlmag">RSS Feed</a>imizi ekleyin.</p>
		</div>
	</footer>
	<script src="<?php echo url::scripts('app-min.js'); ?>"></script>
    <?php if(!role::is_404()): ?>
	<?php if(html::$externalJS != ''): ?>
	<script async src="<?php echo html::$externalJS; ?>"></script>
	<?php endif; ?>
	<?php if(html::$comments == 'true'): ?>
	<?php tools::inc('widgets/disqus'); ?>
	<?php endif; ?>
    <?php if(role::is_homepage() || html::$comments == 'true'): ?>
        <?php tools::inc('widgets/disqus-count'); ?>
    <?php endif; ?>
    <script type="text/javascript">
        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/platform.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>
    <script>
        !function(d,s,id){
            var js,fjs=d.getElementsByTagName(s)[0];
            if(!d.getElementById(id)){
                js=d.createElement(s);
                js.id=id;
                js.src="https://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);
            }
        }(document,"script","twitter-wjs");
    </script>
    <?php endif; ?>
</body>
</html>