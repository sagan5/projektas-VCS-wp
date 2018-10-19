
<!-- how to play begin-->

<section class="how-to-play">
	<div class="arrow-white">
	</div>
	<div class="container">
		<div class="text-box">
			<h2 id="how-to-play"><?php the_field('htp_section_title'); ?></h2>
			<p><?php echo nl2br(get_field('htp_section_description')); ?></p>
		</div>
		<div class="gallery flex-container wrap">
			<?php 
			if(have_rows('htp_link_box_repeater')):
				while(have_rows('htp_link_box_repeater')):
					the_row();
					$image = get_sub_field('image');
					$link = get_sub_field('link');
					if($link['target']=="_blank"){
			    		$target = ' target="_blank"';
			    	}else{
			    		$target = '';
			    	}
					?>
					<div class="link-box">
						<a href="<?php echo $link['url']; ?>" <?php echo $target; ?> <?php echo 'rel="nofollow"'; ?>>
							<img src="<?php echo $image['sizes']['link_box_image']; ?>" alt="<?php echo $image['alt']; ?>">
						</a>
						<a href="<?php echo $link['url']; ?>" <?php echo $target; ?> <?php echo 'rel="nofollow"'; ?>>
							<h4><?php the_sub_field('title'); ?></h4>
						</a>
						<p><?php the_sub_field('text'); ?></p>
					</div>
					<?php
			    endwhile;
			endif;
			?>	
		</div>
	</div>		
</section>

<!-- how to play end -->
