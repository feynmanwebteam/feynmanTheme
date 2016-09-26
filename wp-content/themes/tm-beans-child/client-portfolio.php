<?php 

/* Template Name: Client Portfolio */ 

get_header();

 ?>


<div class="uk-container">
<div class="uk-panel-box">
<div class="portfolio-rows" data-uk-grid>
<div class="portfolio-intro">

<h2 class="tagline" style="text-align: center;"><strong>Web Solutions for Businesses </strong> <a href="http://localhost:8888/operator/contact/"><strong>in Eugene & Springfield</strong>
</a></h2>

<p> We all know how frustrating technology can be at times. That's why at Operator Web Solutions, we take care of all the heavy lifting while gently guiding you through the development process. Using engaging design patterns and leveraging the latest software, we can offer fast and effective services tailored to meet your needs of your business. </p>

</div>

<?php
/* Retrieve Client Projects */

$args = array( 'post_type' => 'clients', 'posts_per_page' => 10 );

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();
  echo'<div class="uk-width-medium-1-3"><div class="custom-panel">'; ?>
<div class="box">
     
       <?php the_post_thumbnail(); ?>
        <a href="<?php the_permalink();  the_title();?>"><h2><?php the_title() ?></h2></a>
   
<?php
 the_content();
  echo '</div></div></div>';
endwhile; ?>

</div><!-- End of grid -->
</div><!-- end of panel box -->
</div><!-- End of uk-container -->

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