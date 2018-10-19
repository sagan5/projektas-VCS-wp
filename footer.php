
	<!-- footer begin -->

	<div class="footer">
		<div class="container flex-container">
			<div class="footer-text">
				<p><?php the_field('ct_copyright', 'option'); ?></p>
			</div>
			<nav class="soc-nav">
				<ul class="flex-container">
					<?php
					get_template_part('partials/social_navigation');
					?>
				</ul>
			</nav>
		</div>
	</div>

	<!-- footer end -->

	<!-- scripts begin-->

	<?php wp_footer(); ?>

	<!-- scripts end -->
</body>