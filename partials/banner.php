<section class="banner">
	<?php 
		$image = get_field('hb_banner_image');
		if( !empty($image) ): ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	<?php endif; ?>
	<div class="container flex-container">
		<div class="banner-text">
			<h1><?php the_field('hb_banner_title'); ?></h1>
		</div>				
	</div>
</section>


