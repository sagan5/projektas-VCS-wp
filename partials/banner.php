<section class="banner">
	<?php 
		$image = get_field('hb_banner_image');
	?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	<div class="container flex-container">
		<div class="banner-text">
			<h1><?php the_field('hb_banner_title'); ?></h1>
		</div>				
	</div>
</section>


