<!-- banner begin -->

<section class="banner" style="background-image: url(
	<?php
		$image = get_field('hb_banner_image');
		echo $image['sizes']['banner']; 
	?>
	)">
	<div class="container">
			<h1><?php the_field('hb_banner_title'); ?></h1>
	</div>
</section>

<!-- banner end -->