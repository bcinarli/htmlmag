<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/
?>
            </div><!-- .page-container -->
		</div><!-- #content -->

        <footer id="mastfoot" class="page-footer">
            <div class="content-container">
                <p>© <?php echo date('Y'); ?> - <a href="http://bcinarli.com">Bilal Cinarli</a> & HTML Mag. <a href="http://mistoapp.com" target="_blank">Misto</a> ile hazırlanmıştır. Logo ve tasarımlar <a href="http://www.hasanyalcin.com" target="_blank">Hasan Yalçın</a> tarafından dizayn edilmiştir.</p>
                <p>Güncellemelerden ve yeni içeriklerden haberdar olmak için bizi<a href="http://twitter.com/htmlmag">Twitter'da takip edin</a> ya da RSS okuyucunuz için <a href="http://feeds.feedburner.com/htmlmag">RSS Feed</a>imizi ekleyin.</p>
            </div>
        </footer>

	</div><!-- #wrapper -->
	<script src="<?php echo url::scripts('/vendors/prism.min.js'); ?>"></script>
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
    <?php endif; ?>
</body>
</html>