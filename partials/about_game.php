
<!-- about game begin -->

<section class="about-game">
	<div class="container flex-container wrap">
		<div class="description">
			<h2 id="about-game"><?php the_field('ag_section_title'); ?></h2>
			<p><?php echo nl2br(get_field('ag_section_description')); ?></p>
			<?php echo get_field('ag_section_citate'); ?>
		</div>
		<div class="advantages flex-container wrap">
			<?php 
			if(have_rows('ag_advantages_repeater')):
				while(have_rows('ag_advantages_repeater')):
					the_row();
					$image = get_sub_field('image');
					?>
					<div class="advantages-box">
						<img src="<?php echo $image['sizes']['advantage_thumb']; ?>" alt="<?php echo $image['alt']; ?>">
						<h3><?php the_sub_field('title'); ?></h3>
						<p><?php the_sub_field('desription'); ?></p>
					</div>
					<?php
			    endwhile;
			endif;
			?>	
		</div>
	</div>			
</section>

<!-- about game end -->
