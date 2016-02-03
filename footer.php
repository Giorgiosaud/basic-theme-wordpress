</div>
<div class="footer container-fluid text-center">
			<!-- footer -->
			<footer role="contentinfo">
				<?php the_field('footer_text','option')?>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<script>
		$( document ).ready(function() {
			$('.toogler').click(function(){$(this).siblings('.sub-menu').slideToggle()});
			$('.editMeHelper').hide();
		});
		</script>
	</body>
</html>