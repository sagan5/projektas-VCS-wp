
<!-- events begin -->

<section class="events">
	<div class="arrow-grey">
	</div>
	<div class="container">
		<div class="event-box">
			<h2 id="events"><?php the_field('e_section_title'); ?></h2>
			<img src="
				<?php
					$image = get_field('e_event_image');
					echo $image['sizes']['event_image']; 
				?>" 
			alt="<?php echo $image['alt']; ?>">
			<p><?php echo nl2br(get_field('e_event_description')); ?></p>
			<div class="event-description flex-container">
				<div class="details">
					<h5>Date</h5> <!-- // prideti vertima -->
					<p><?php the_field('e_event_date'); ?></p>
					<h5>Start</h5>
					<p><?php the_field('e_event_time'); ?></p>
					<h5>Place</h5>
					<p><?php the_field('e_event_place'); ?></p>
					<h5>Fee</h5>
					<p><?php the_field('e_event_fee'); ?></p>
				</div>
				<div id="map">
					<?php 
 					$location = get_field('e_event_map');
					if( !empty($location) ):
					?>
					<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- events end -->
