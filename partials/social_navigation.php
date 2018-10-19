<?php
	if( have_rows('sn_social_navigation_repeater', 'option') ):
	    while ( have_rows('sn_social_navigation_repeater', 'option') ) : the_row();
	    	$link = get_sub_field('link');
	    	$icon = get_sub_field('icon');
	    	// dump($icon);
	    	if($link['target']=="_blank"){
	    		$target = ' target="_blank"';
	    	}else{
	    		$target = ' target="_blank"'; // if forgot to check
	    	}
	    	?>
			<li>
				<a href="<?php echo $link['url']; ?>" <?php echo $target; ?>>
					<?php echo $icon; ?>
				</a>
			</li>
	    	<?php
	    endwhile;
	endif;
?>