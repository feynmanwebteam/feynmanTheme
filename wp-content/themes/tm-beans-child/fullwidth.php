<?php 

/* Template Name: Full Width */

if ( ! defined( 'ABSPATH') ) exit; // Exit if accessed directly

get_header();

 ?>


<div class="uk-container fullwidth-container">
<div class="fullwidth-rows" data-uk-grid>

<?php

/* Get Page Content */

//begin loop
 if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; 

?>

</div><!-- End of grid -->
</div><!-- End of fullwidth-container -->

<?php


					
echo beans_close_markup( '', 'div' );

echo beans_close_markup( 'beans_main_grid', 'div' );

echo beans_close_markup( 'beans_fixed_wrap[_main]', 'div' );

echo beans_close_markup( 'beans_main', 'main' );

echo beans_close_markup( 'beans_site', 'div' );

wp_footer();

echo beans_close_markup( 'beans_body', 'body' );

echo beans_close_markup( 'beans_html', 'html' );


?>