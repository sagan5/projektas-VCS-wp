<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?> 
</head>
<body>
	<!-- header begin -->

	<div class="header">
		<div class="container flex-container">
			<div class="logo">
				<a href="<?php echo site_url(); ?>">
					<?php
						if(get_field('op_logo_type', 'option')):
							$image = get_field('op_logo_image', 'option');
							?>
							<img src="<?php echo $image['sizes']['logo']; ?>" alt="<?php bloginfo('name'); ?>">	
							<?php
						else:
							the_field('op_logo_text', 'option');
						endif;
					?>
				</a>
			</div>
			<nav class="soc-nav">
				<ul class="flex-container">
					<li><a href="https://facebook.com/groups/1054411517905019/?fref=nf" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://reddit.com/r/agameofthroneslcg" target="_blank"><i class="fab fa-reddit-alien"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCsZzNCKqWflwhjXd-1AqTKQ/videos" target="_blank"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- header end -->

	<!-- navigation begin-->

	<div class="navigation">
		<div class="container flex-container">
			<nav class="main-nav">
				<div class="burger">
				<i class="fas fa-bars"></i>
				</div>
				<?php
					$args = [
						'menu_class' => 'nav',
						'container' => false,
						'theme_location'=> 'primary-navigation'
					];

					wp_nav_menu($args);
				?>
				<!--
					<ul class="nav">
					<li class="menu-item"><a href="#top">Home</a></li>
					<li class="menu-item"><a href="#about-game">Game</a></li>
					<li class="menu-item"><a href="#about-us">About us</a></li>
					<li class="menu-item"><a href="#how-to-play">Rules</a></li>
					<li class="menu-item"><a href="#events">Events</a></li>
					<li class="menu-item"><a href="#get-in-touch">Contact</a></li>
					</ul> 
				-->			
			</nav>
			<div class="search-box">
			<form action="/search.php" class="flex-container">
      			<input type="text" placeholder="Search" name="search">
      			<button type="submit"><i class="fa fa-search"></i></button>
    		</form>
    		</div>
		</div>
	</div>

	<!-- navigation end-->