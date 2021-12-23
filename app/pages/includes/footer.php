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
                <p>© <?php echo date('Y'); ?> - <a href="https://twitter.com/bcinarli">Bilal Çınarlı</a>, <a href="https://twitter.com/sirzataytac">Şirzat Aytaç</a>  & HTML Mag. <a href="https://github.com/bcinarli/misto" target="_blank">Misto</a> ile hazırlanmıştır. Logo <a href="http://www.hasanyalcin.com" target="_blank">Hasan Yalçın</a> tarafından dizayn edilmiştir.</p>
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