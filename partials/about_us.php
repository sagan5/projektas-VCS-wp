
<!-- about us begin -->

<section class="about-us">
	<div class="arrow-grey">
	</div>
	<div class="container flex-container">
		<div class="text-box">
			<h2 id="about-us"><?php the_field('au_section_title'); ?></h2>
			<p><?php echo nl2br(get_field('au_section_description')); ?></p>
		</div>
		<div class="owl-carousel gallery">
			<?php 
			if(have_rows('au_gallery')):
				while(have_rows('au_gallery')):
					the_row();
					$image = get_sub_field('image');
					?>
						<img src="<?php echo $image['sizes']['gallery_image']; ?>" alt="<?php echo $image['alt']; ?>">
					<?php
			    endwhile;
			endif;
			?>
		</div>
	</div>		
</section>

<!-- about us end -->
