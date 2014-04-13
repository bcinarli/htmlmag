<?php
/**
 * @author Bilal Cinarli
 *
 * Disqus integration
 */
?>

			<div id="disqus_thread"></div>
			<script type="text/javascript">
				var disqus_shortname  = 'htmlmag';
				var disqus_identifier = '<?php echo html::$slug; ?>';

				(function() {
					var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
					(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				})();
			</script>