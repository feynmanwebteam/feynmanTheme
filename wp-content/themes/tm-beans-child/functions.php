<?php

if ( ! defined( 'ABSPATH') ) exit; // Exit if accessed directly

// Feynman Theme Functions

// Variables & Constants 

define('THEME_HOME', '/wp-content/themes/');

define('HOME_URL', site_url( '/', 'http' ));

define('PLUG_URL', plugins_url());




// Homepage Templates

include( get_stylesheet_directory() . '/templates/custom-home.php');

include( get_stylesheet_directory() . '/templates/slideshow-home.php');

include( get_stylesheet_directory() . '/templates/video-slideshow.php');




// New Functions


// Check if Blog Page

function is_blog() {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}


add_action('wp_head', 'add_head_scripts');

function add_head_scripts() {
	?>

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

	<?php
}



/* Register Footer Widgets */

function opfooter_widgets() {

	register_sidebar( array(
		'name' => 'Footer Area 1 ',
		'id' => 'footer_widget_1',
		'before_widget' => '<div id="op-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );

register_sidebar( array(
		'name' => 'Footer Area 2 ',
		'id' => 'footer_widget_2',
		'before_widget' => '<div id="op-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );

register_sidebar( array(
		'name' => 'Footer Area 3 ',
		'id' => 'footer_widget_3',
		'before_widget' => '<div id="op-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );

register_sidebar( array(
		'name' => 'Footer Area 4 ',
		'id' => 'footer_widget_4',
		'before_widget' => '<div id="wpgyan-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}

add_action( 'widgets_init', 'opfooter_widgets' );



/* Insert Footer Widgets */

add_action('beans_footer_prepend_markup', 'insert_footer');

function insert_footer(){

	echo '<div class="uk-container">';
	echo '<div class="grid-rows" data-uk-grid><!-- Start  Footer Grid Row -->';
	echo '<div class="uk-width-medium-1-4">';
	echo beans_widget_area( 'footer_widget_1' );
	echo '</div>';
	
	echo '<div class="uk-width-medium-1-4">';
	echo beans_widget_area( 'footer_widget_2' );
	echo '</div>';
	
	echo '<div class="uk-width-medium-1-4">';
	echo beans_widget_area( 'footer_widget_3' );
	echo '</div>';
	
	echo '<div class="uk-width-medium-1-4">';
	echo beans_widget_area( 'footer_widget_4' );
	echo '</div>';
	echo '</div>';
	echo '</div>';
	
}

/* Enable All Ui Kit Features */


add_action( 'beans_uikit_enqueue_scripts', 'enable_all_uikit' );

function enable_all_uikit() {

	beans_uikit_enqueue_components( true );
	beans_uikit_enqueue_components( true, 'add-ons' );
	
	
}

add_action('beans_head_prepend_markup', 'add_gradient');






function add_gradient(){
	echo '<link a href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.25.0/css/uikit.gradient.min.css" rel="stylesheet"/>';
}


/* Add bottom footer */

add_action('beans_footer_after_markup', 'create_bottom');

function create_bottom(){
$homeUrl = site_url( '/', 'http' );

?>
<div class="bottom-footer">

	<div class="uk-container">
	<div data-uk-grid>
	<div class="uk-width-medium-1-3" style="text-align:left;">
	&copy <?php echo date("Y"); ?><a href="<?php echo $homeUrl; ?>"> Feynman Group</a>
<i class=”fa fa-arrow-circle-up”></i>
	</div>
<div class="uk-width-medium-1-3" style="text-align:center;">
	<?php wp_nav_menu( array('menu' => 'footersocial' )); ?>
	</div>
<div class="uk-width-medium-1-3" style="text-align:center;">
	<a href="<?php echo $homeUrl; ?>">Sitemap </a>
	</div>
</div><!-- end of grid-rows -->
</div>
</div><!-- End of Footer-->



<?php
}

// add additional attributes to page elements

add_action( 'beans_before_load_document', 'update_title' );

function update_title() {

    beans_remove_markup( 'beans_post_title' );
    beans_remove_markup( 'beans_post_title_text' );

	if(!is_home() || !is_single() || is_page('video-slider')) {
		
	        beans_add_attribute('beans_comments', 'class', 'hide-text');
		
	}

	
}


/* Fullwidth template background color */


add_action( 'beans_body_before_markup', 'fullwidth_body' );

function fullwidth_body(){
	
	if(is_page('fullwidth') || is_page('about')) {

		 beans_add_attribute('beans_main', 'class', 'f-fullwidth-main');

	}
}





/* add body fade  */

add_action('beans_body_before_markup', 'body_fade');

function body_fade() {
	
	beans_add_attribute('beans_body', 'class', 'uk-animation-fade uk-animation-5');

}


/* add title class, hide titles on pages only */

add_action('beans_body_before_markup', 'hidden_titles');

function hidden_titles(){

	beans_add_attribute('beans_post_header', 'class', 'custom-title');

	if(!is_home()) {
	beans_add_attribute('beans_post_header', 'class', 'hide-text');
	}
}


add_action('beans_main_before_markup', 'remove_hometext');

function remove_hometext() {
		
	if(is_page('home')) {
	beans_add_attribute('beans_main', 'class', 'hide-text');
		}
}


add_action('beans_footer_credit_before_markup', 'remove_footertext');

function remove_footertext() {
	beans_add_attribute('beans_footer_credit', 'class', 'hide-text');
	
}

add_action('beans_breadcrumb_before_markup', 'remove_breadcrumbs');

function remove_breadcrumbs() {
	beans_add_attribute( 'beans_breadcrumb', 'class', 'hide-text');
	
}

add_action('beans_main_before_markup', 'bottom_seo');

function bottom_seo() {
	beans_add_attribute( 'beans_main', 'class', 'hide-bottom');

	if(is_page('page-parallax') || is_page('video-slider')) {
	beans_add_attribute( 'beans_main', 'class', 'display-bottom');
}
}



/* Add new Header class attribute */

add_action( 'beans_header_before_markup', 'custom_child_header');

function custom_child_header(){

	beans_add_attribute( 'beans_header', 'class', 'custom_header' );
}

add_action('beans_fixed_wrap[_header]_after_markup', 'close_header');

function close_header() {
    echo '</header>';
}

add_action( 'beans_fixed_wrap[_header]_before_markup', 'custom_child_container');

function custom_child_container(){

	beans_add_attribute( 'beans_fixed_wrap[_header]', 'class', 'cust_container' );
}


	
// Include Beans. Do not remove the line below.
require_once( get_template_directory() . '/lib/init.php' );

/*
 * Remove this action and callback function if you do not wish to use LESS to style your site or overwrite UIkit variables.
 * If you are using LESS, make sure to enable development mode via the Admin->Appearance->Settings option. LESS will then be processed on the fly.
 */

add_action( 'beans_uikit_enqueue_scripts', 'beans_child_enqueue_uikit_assets' );

function beans_child_enqueue_uikit_assets() {

	beans_compiler_add_fragment( 'uikit', get_stylesheet_directory_uri() . '/style.less', 'less' );

}

// Remove this action and callback function if you are not adding CSS in the style.css file.
add_action( 'wp_enqueue_scripts', 'beans_child_enqueue_assets' );

function beans_child_enqueue_assets() {

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );

}


/* Custom Post Types and New Registries */

add_action( 'init', 'client_post_type' );

function client_post_type() {
  register_post_type( 'clients',
    array(
      'labels' => array(
        'name' => __( 'Client Portfolio' ),
        'singular_name' => __( 'client' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}



function client_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Clients', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Clients', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Client', 'twentythirteen' ),
		'all_items'           => __( 'All Clients', 'twentythirteen' ),
		'view_item'           => __( 'View Client', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Client', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Client', 'twentythirteen' ),
		'update_item'         => __( 'Update Client', 'twentythirteen' ),
		'search_items'        => __( 'Search Client', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'clients', 'twentythirteen' ),
		'description'         => __( 'Client news and reviews', 'twentythirteen' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'clients', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'client_type', 0 );





add_action( 'init', 'staff_post_type' );

function staff_post_type() {
  register_post_type( 'staff',
    array(
      'labels' => array(
        'name' => __( 'Staff Portfolio' ),
        'singular_name' => __( 'staff' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}



function staff_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Staff Members', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Sfaff', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Staff Members', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Staff', 'twentythirteen' ),
		'all_items'           => __( 'All Staff Members', 'twentythirteen' ),
		'view_item'           => __( 'View Staff Members', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Staff Member', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Staff Member', 'twentythirteen' ),
		'update_item'         => __( 'Update Staff Member', 'twentythirteen' ),
		'search_items'        => __( 'Search Staff', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Staff Members', 'twentythirteen' ),
		'description'         => __( 'Staff news and reviews', 'twentythirteen' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
register_post_type( 'staff', $args ); 

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'staff_type', 0 );




/* New Resources */

add_action( 'wp_enqueue_scripts', 'my_new_scripts' );

function my_new_scripts() {

wp_register_script('scroll_nav', get_stylesheet_directory_uri() . '/js/scrollnav.js', array('jquery'),'1.1', true);

wp_enqueue_script('scroll_nav');

}



/* Add fullwidth header section */


add_action('beans_fixed_wrap[_header]_after_markup', 'fullwidth_header');

function fullwidth_header() {

if(is_page('fullwidth')) {

?>

<div class="parallaxbox" id="pb4" style="background-image: url('<?php echo HOME_URL . "/wp-content/uploads/2016/08/home-background.jpg"; ?>');">
<div class="uk-container">
<div class="ad-row" data-uk-grid>
<div class="uk-width-medium-1-1" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; top: 0px; left: 560px; opacity: 1;">
<h1 class="pages-title" style="text-align:center;"><?php the_title(); ?></h1> 
</div>
</div>
</div>
</div><!-- end #pb4 -->

<?php

}
}

/* Page header backgrounds */

add_action('beans_fixed_wrap[_header]_after_markup', 'page_headers');

function page_headers() {

if(!is_page('video-slider') && !is_front_page() && !is_page('fullwidth'))
{
	
?>

<div class="parrallax-wrapper pages-wrapper">
<div class="uk-margin pages-header <?php if(is_page('contact')) {echo 'contact-header';} elseif (is_page('mobile-friendly')) {echo 'mobile-header';} elseif (is_page('cms')) {echo 'cms-header';} elseif (is_page('development')) { echo 'dev-header';} elseif (is_page('google-friendly-seo')) { echo 'seo-header';} elseif (is_page('social-media-marketing')) { echo 'social-header';} elseif(is_page('about')) { echo 'about-header';} elseif (is_page('blog') || is_single() || is_archive()) { echo 'blog-header';} elseif (is_home()) { echo 'post-header';} elseif (is_page('client-projects')) {echo 'project-header';} ?> uk-text-contrast uk-text-center uk-flex uk-flex-center uk-flex-middle" data-uk-parallax="{bg: '-300'}">
<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade" style="position: static; width:100%; height: 100%;">
<div data-uk-scrollspy="{cls:'uk-animation-fade', delay:100}">
<div data-uk-parallax="{opacity: '1,0.5', scale: '1,0.2'}"><h1 class="pages-title"> <?php if( !is_home() && !is_page('fullwidth') && !is_page('home')) {echo get_the_title();} elseif(is_home()) {echo 'Blog'; } ?></h1></div>

</div>
</div>

</div>
</div>


<?php
}
}


