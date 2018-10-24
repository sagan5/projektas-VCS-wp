<!-- banner begin -->

<section class="banner">
	<div class="slick-carousel">
		<?php 
		if(have_rows('hb_banner_image_repeater')):
			while(have_rows('hb_banner_image_repeater')):
				the_row();
				$image = get_sub_field('image');
				?>
					<div class="slick-item">
						<img src="<?php echo $image['sizes']['banner']; ?>" alt="<?php echo $image['alt']; ?>">
					</div>
				<?php
		    endwhile;
		endif;
		?>
	</div>
	<div class="container flex-container">
		<div class="title flex-container">
			<div>
				<i class="fa fa-angle-left prev-slide"></i>
			</div>
			<div class="banner-text">
				<h1><?php the_field('hb_banner_title'); ?></h1>
			</div>
			<div>
				<i class="fa fa-angle-right next-slide"></i>	
			</div>
		</div>
	</div>
</section>

<!-- banner end -->