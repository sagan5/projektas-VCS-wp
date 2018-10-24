<?php

/* Template Name: Homepage */

get_header();

?>

<!-- Start Point -->

<!-- partial files begin-->
<?php
get_template_part('partials/banner');
get_template_part('partials/about_game');
get_template_part('partials/about_us');
get_template_part('partials/how_to_play');
get_template_part('partials/events');
get_template_part('partials/get_in_touch');
?>
<!-- partial files end-->

<?php get_footer(); ?>