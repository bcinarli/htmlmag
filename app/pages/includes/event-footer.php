<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/
?>		
		</div><!-- #content -->
	</div><!-- #wrapper -->
	<script src="<?php echo url::scripts('app-min.js'); ?>"></script>
    <?php if(!role::is_404()): ?>
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