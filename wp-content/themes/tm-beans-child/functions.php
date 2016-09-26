<?php


// Variables & Constants 

define('THEME_HOME', '/wp-content/themes/');

define('HOME_URL', site_url( '/', 'http' ));

define('PLUG_URL', plugins_url());



// New Functions


// Check if Blog Page

function is_blog() {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
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

add_action('beans_footer_prepend_markup', 'insert_opfooter');

function insert_opfooter(){

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

	if(!is_home() || !is_single()) {
		
	        beans_add_attribute('beans_comments', 'class', 'hide-text');
		
	}

	
}

add_action( 'beans_before_load_document', 'start_page' );

function start_page(){
	
	if(is_page('getting-started')) {

		 beans_add_attribute('beans_main', 'class', 'fullwidth-container');

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

	if(is_page('page-parallax')) {
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




add_action( 'beans_fixed_wrap[_header]_after_markup', 'beans_child_home_add_title' );

function beans_child_home_add_title() {


if(is_front_page()) {

$homeUrl = site_url( '/', 'http' );
$slideUrl = site_url( '/', 'http' );

?>

<div class="parallaxbox intro-background" id="pb0"></div>


<div class="textbox info-container">
<div class="row-center intro-statement" data-uk-grid>
<div class="uk-width-medium-1-1">
<div class="description-container">
<div class="description-border">

                                    <ul class="uk-subnav description-tabs" data-uk-switcher="{connect:'#switcher-content-a-scale', animation: 'scale'}">
                                        <li class="uk-active" aria-expanded="true"><a href="#">Welcome</a></li>
                                        <li aria-expanded="false" class=""><a href="#">Vision</a></li>
                                        <li aria-expanded="false" class=""><a href="#">Mission</a></li>
                                    </ul>
</div>
                                    <ul id="switcher-content-a-scale" class="uk-switcher uk-margin description-content">
                                        <li aria-hidden="false" class="uk-active" style="animation-duration: 200ms;">At Feynman Group, our business is technology. With a focus on sincere, human relationships, industry-leading products, and superiority in service, Feynman Group helps businesses prosper through their use of the internet and associated technologies. We maintain our commitment to integrity, consistency, and creativity through all of our services, from networking to collaboration, web design, digital marketing, and beyond. Contact us to find out how we’ll solve your business’s technology problems.</li>
                                        <li aria-hidden="true" class="" style="animation-duration: 200ms;">At Feynman Group, our business is technology. With a focus on sincere, human relationships, industry-leading products, and superiority in service, Feynman Group helps businesses prosper through their use of the internet and associated technologies. We maintain our commitment to integrity, consistency, and creativity through all of our services, from networking to collaboration, web design, digital marketing, and beyond. Contact us to find out how we’ll solve your business’s technology problems.</li>
                                        <li aria-hidden="true" class="" style="animation-duration: 200ms;">At Feynman Group, our business is technology. With a focus on sincere, human relationships, industry-leading products, and superiority in service, Feynman Group helps businesses prosper through their use of the internet and associated technologies. We maintain our commitment to integrity, consistency, and creativity through all of our services, from networking to collaboration, web design, digital marketing, and beyond. Contact us to find out how we’ll solve your business’s technology problems.</li>
                                    </ul>


</div>
</div>
   
        </div><!-- end .row-center -->

</div><!-- end .info-container -->


<div class="parallaxbox intro-box-1" id="pb1">

<div class="uk-container">
<div class="row-center" data-uk-grid>
                        <div class="uk-width-medium-1-3">
                            <div class="wireframe service-box" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:300}" >
                            <h2><a href="/networks"><i class="uk-icon-medium uk-icon-server intro-icons"></i> NETWORKS</a></h2>
                            <div class="wf-dash"></div>
            <p>Expert network architecture, maintenance, and monitoring ensures all of your hardware and software are securely connected and performing flawlessly.</p>
                            </div>
                        </div>

                        <div class="uk-width-medium-1-3">
                            <div class="wireframe service-box" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:300}">
                                <h2><a href="/web-design"><i class="uk-icon-medium uk-icon-paint-brush intro-icons"></i>WEB DESIGN</a></h2>
                                <div class="wf-dash"></div>
                                <p>Artistically constructed websites, custom applications, and unforgettable user-experiences all begin with brilliant code.</p>
                            </div>
                        </div>

                        <div class="uk-width-medium-1-3">
                            <div class="wireframe service-box" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:300}">
                                <h2><a href="/digital-marketing"><i class="uk-icon-medium uk-icon-search-plus intro-icons"></i>SEO</a></h2>
                                <div class="wf-dash"></div>
                                <p>Amplify your visibility across the web and reach those seeking you out across the digital space.</p>
                            </div>
                        </div>
</div><!-- end .row-center-2 -->

<div class="row center bottom-row" data-uk-grid>
                        <div class="uk-width-medium-1-3 hidden-xs">
                            <div class="wireframe service-box" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:300}">
                                <h2><a href="/support"><i class="uk-icon-medium uk-icon-support intro-icons"></i>SUPPORT</a></h2>
                                <div class="wf-dash"></div>
                                <p>Need help? Our staff has been solving technology problems since 1995, effectively bridging the gap between the technical and the human.</p>
                            </div>
                        </div>

                        <div class="uk-width-medium-1-3 hidden-sm hidden-xs">
                            <div class="wireframe service-box" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:300}">
                                <h2><a href="/cloud"><i class="uk-icon-medium uk-icon-cloud intro-icons"></i>CLOUD</a></h2>
                                <div class="wf-dash"></div>
                                <p>Cloud solutions from hosted exchange, to data backup, colocation, and virtual private servers help you thrive wherever you are.</p>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3 hidden-sm hidden-xs">
                            <div class="wireframe service-box" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:300}">
                                <h2><a href="/collaboration"><i class="uk-icon-medium uk-icon-share-alt intro-icons"></i>COLLABORATION</a></h2>
                                <div class="wf-dash"></div>
                                <p>Communication is vital. Keep in contact from any location or device with advanced Voice over IP, video conferencing, and connected messaging tools.</p>
                            </div>
                        </div>
                    </div><!-- end of services list -->

</div>
</div><!-- end .uk-container -->

<div class="intro-box-2">
<h2 class="sub-titles dark-title" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:300}"> We Solve Technology Problems </h2>
<hr class="title-separator" style="border-color:white;">
<div class="page-intro">
<p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:300}"> Integrity - Consistency - Creativity</p>
<p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:300}"> Empower your business with tech solutions tailored to fit your specific needs.</p>

</div>
</div><!-- end .intro-box-2 -->

<div class="parallaxbox contact-box" id="pb2">
<div class="uk-container">
<div class="ad-row" data-uk-grid>
<div class="uk-width-medium-1-1" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; top: 0px; left: 560px; opacity: 1;">
<!--<h2 class="sub-titles start-sub" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300}">Need a Better Website?</h2> 
<h3 data-uk-scrollspy="{cls:'uk-animation-fade', delay:300}" style="font-size:32px;"> You've come to the right place!</h3>
<h3 data-uk-scrollspy="{cls:'uk-animation-fade', delay:300}"> Drive More Traffic, Increase your Click Through Rate, Elevate your Brand Awareness</h3>
<p class="button-wrapper" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:300}"><a href="/" class="contact-buttons">Contact Us </a></p>-->
</div>
</div>
</div>
</div><!-- end #pb2 -->

<div class="intro-box-3">
<div class="uk-container">

<div class="service-rows" data-uk-grid>
<div class="uk-width-medium-1-1">
<h2 class="sub-titles box-3-title" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}"> Our Web Development Strategy </h2>
<hr class="title-separator">
</div>
</div>

<div class="services-rows info-row" data-uk-grid>
<div class="uk-width-medium-1-3">

<h3 data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}"><i class="uk-icon-large uk-icon-bar-chart service-icons"></i><span>1 Analysis</span></h3>
<p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}">In the first phase, we clearly organize and define our objectives to meet the exact needs of your project. These include aspects such as target audience, information architecture, specific features, and more.</p>
</div>


<div class="uk-width-medium-1-3">
<h3  data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}"><i class="uk-icon-large uk-icon-image service-icons"></i><span> 2 Graphic Design</span></h3>
<p  data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}">Using all information obtained through our analysis, we address the overall aesthetic of the site. Components such as navigation, page layout, and user interface critically affect the way users will interact with your page.</p>
</div>

<div class="uk-width-medium-1-3">
<h3 data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}"><i class="uk-icon-large uk-icon-connectdevelop service-icons"></i> <span>3 Development</span></h3>
<p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}">When all of our designs, features, and user interface elements are approved, we begin creating the framework which will bring your website to life. Here, we develop the HTML, CSS, and CMS (Content Management System) which will provide a rock-solid foundation to your website.</p>
</div>
</div><!- end data-uk-grid -->

<div class="row-center info-row" data-uk-grid>

<div class="uk-width-medium-1-3">
<h3 data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}"><i class="uk-icon-large uk-icon-pencil-square-o service-icons"></i><span> 4 Content Development</span></h3>
<p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}">All of the pieces fit together in this step where we assist you in creating high quality, keyword rich copy. Your content is then  integrated and refined into the foundation we have built.</p>
</div>

<div class="uk-width-medium-1-3">
<h3 data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}"><i class="uk-icon-large uk-icon-balance-scale service-icons"></i> <span>5 Testing</span></h3>
<p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}">The final phase of our process involves rigorous testing, approval, and training. We confirm the site functions perfectly on all ends, verify that all content is correct, and ensure the necessary members of your staff understand how to manage your new site.</p>
</div>


<div class="uk-width-medium-1-3">
<h3 data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}"><i class="uk-icon-large uk-icon-rocket service-icons" =></i><span>6 Site Launch</span></h3>
<p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}">The final phase of our process involves rigorous testing, approval, and training. We confirm the site functions perfectly on all ends, verify that all content is correct, and ensure the necessary members of your staff understand how to manage your new site.</p>
</div>
</div><!-- end uk-data-grid -->
</div><!-- end .uk-container -->

<div class="certified-background">
<div class="certified-container uk-container">
<div class="certified-row" data-uk-grid>
<div class="uk-width-medium-1-1 certified-col">
<h2 class="sub-titles box-3-title" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}">Certified By Top Industry Brands </h2>
<hr class="title-separator">
</div>


<div class="uk-width-medium-1-1">

<div class="uk-margin" data-uk-slideset="{small: 2, medium: 4}" style="padding-top:80px;">
                                <div class="uk-slidenav-position uk-margin">
                                    <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4 uk-grid-width-small-1-2">
                                        <li class="uk-active"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-google.png'; ?>" width="600" height="400" alt="1 [600x400]" data-src="holder.js/600x400/sky/auto/text:1/size:100" data-holder-rendered="true"></li>
                                        <li class="uk-active"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-symantec.png'; ?>" width="600" height="400" alt="2 [600x400]" data-src="holder.js/600x400/sky/auto/text:2/size:100" data-holder-rendered="true"></li>
                                        <li class="uk-active" style=""><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-authorize-net.png'; ?>" width="600" height="400" alt="3 [600x400]" data-src="holder.js/600x400/sky/auto/text:3/size:100" data-holder-rendered="true"></li>
                                        <li class="uk-active" style=""><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-verizon.png'; ?>" width="600" height="400" alt="4 [600x400]" data-src="holder.js/600x400/sky/auto/text:4/size:100" data-holder-rendered="true"></li>
                                        <li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-network-solutions.png'; ?>" width="600" height="400" alt="5 [600x400]" data-src="holder.js/600x400/sky/auto/text:5/size:100" data-holder-rendered="true"></li>
                                        <li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-microsoft-gold.png'; ?>" width="600" height="400" alt="6 [600x400]" data-src="holder.js/600x400/sky/auto/text:6/size:100" data-holder-rendered="true"></li>
                                        <li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-pax-8.png'; ?>" width="600" height="400" alt="7 [600x400]" data-src="holder.js/600x400/sky/auto/text:7/size:100" data-holder-rendered="true"></li>
                                        <li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-bing.png'; ?>" width="600" height="400" alt="8 [600x400]" data-src="holder.js/600x400/sky/auto/text:8/size:100" data-holder-rendered="true"></li>
                                        <li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-century-link.png'; ?>" width="600" height="400" alt="9 [600x400]" data-src="holder.js/600x400/sky/auto/text:9/size:100" data-holder-rendered="true"></li>
                                        <li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-carbonite.png'; ?>" width="600" height="400" alt="10 [600x400]" data-src="holder.js/600x400/sky/auto/text:10/size:100" data-holder-rendered="true"></li>
					<li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-web-sense.png'; ?>" width="600" height="400" alt="9 [600x400]" data-src="holder.js/600x400/sky/auto/text:9/size:100" data-holder-rendered="true"></li>
                                        <li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-vm-ware.png'; ?>" width="600" height="400" alt="10 [600x400]" data-src="holder.js/600x400/sky/auto/text:10/size:100" data-holder-rendered="true"></li>
					<li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-thawte.png'; ?>" width="600" height="400" alt="9 [600x400]" data-src="holder.js/600x400/sky/auto/text:9/size:100" data-holder-rendered="true"></li>
                                        <li style="display: none;"><img src="<?php echo $homeUrl .'/wp-content/uploads/2016/08/feynman-group-certified-partnerships-integra.png'; ?>" width="600" height="400" alt="10 [600x400]" data-src="holder.js/600x400/sky/auto/text:10/size:100" data-holder-rendered="true"></li>
					<li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-comcast.png'; ?>" width="600" height="400" alt="9 [600x400]" data-src="holder.js/600x400/sky/auto/text:9/size:100" data-holder-rendered="true"></li>
                                        <li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-hewlett-packard.png'; ?>" width="600" height="400" alt="10 [600x400]" data-src="holder.js/600x400/sky/auto/text:10/size:100" data-holder-rendered="true"></li>
					<li style="display: none;"><img src="<?php echo $homeUrl . 'wp-content/uploads/2016/08/feynman-group-certified-partnerships-dell.png'; ?>" width="600" height="400" alt="9 [600x400]" data-src="holder.js/600x400/sky/auto/text:9/size:100" data-holder-rendered="true"></li>
                                        <li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-comstor.png'; ?>" width="600" height="400" alt="10 [600x400]" data-src="holder.js/600x400/sky/auto/text:10/size:100" data-holder-rendered="true"></li>
					<li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-meraki-cisco.png'; ?>" width="600" height="400" alt="10 [600x400]" data-src="holder.js/600x400/sky/auto/text:10/size:100" data-holder-rendered="true"></li>
					<li style="display: none;"><img src="<?php echo $homeUrl .'wp-content/uploads/2016/08/feynman-group-certified-partnerships-apc.png'; ?>" width="600" height="400" alt="10 [600x400]" data-src="holder.js/600x400/sky/auto/text:10/size:100" data-holder-rendered="true"></li>
                                    </ul>
                                    <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                    <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
                                </div>
                                <ul class="uk-slideset-nav uk-dotnav uk-flex-center"><li data-uk-slideset-item="0" class="uk-active"><a></a></li><li data-uk-slideset-item="1"><a></a></li><li data-uk-slideset-item="2"><a></a></li></ul>
                            </div>
</div>
</div>
</div>
</div>
</div><!-- end .intro-box-3 -->

<?php
}


	if(is_page('video-slider')){
   
   ?>


<div class="uk-slidenav-position" data-uk-slideshow="">

<div class="inner video-slide-inner"> <h1 class="developer-title">Trusted Developers,<br> ready to join your team.</h1> <h2>Feynman Group is trusted by the area's leading brands, <br /> providing high-quality developers when you need them most since 2006.</h2> <ul class="buttons video-buttons"> <li><a href="//player.vimeo.com/video/126542270?autoplay=1" class="watch js-watch slide-video-button"><span class="sprite"></span>Learn More</a></li> </ul> 


<ul class="uk-slideshow homepage-video">
<div class="overlay"></div>

<li aria-hidden="false" class="uk-active">
<img style="width:100%;height:auto;" src="">

<video width="600" height="900px" autoplay="" loop="" muted="" controls="" class="uk-cover-object uk-position-absolute">
<source src="http://x-team.com/wp-content/themes/x-team.com/assets/img/frontpage_loop.mp4?ver=1467269170" type="video/mp4">
</video>
</li>

<li aria-hidden="true" style="height: 700px;"><img style="width:100%;height:auto;" src="">
                                        <iframe src="http://x-team.com/wp-content/themes/x-team.com/assets/img/frontpage_loop.mp4?ver=1467269170" width="500" height="700" frameborder="0" allowfullscreen="" data-player-id="sw-1" class="uk-position-absolute" data-uk-cover="{}" style="pointer-events: none; width: 977px; height: 549px;"></iframe>
                                    </li>
                                </ul>
                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
</div>


</div>






<div class="intro-wrapper" style="margin: 0 auto;">

<h1 class="intro-title title-new"> Custom Wordpress Solutions to Manage Your Content </h1>

<div class="uk-container">
<div class="introduction-rows" data-uk-grid>
<div class="uk-width-medium-1-1">
<p class="page-intro"> Are you tired of struggling to update your Wordpress site? Wish there was an easier way to manage your content? With our simple and flexible content management plugins, we offer both free and premium Plugins to provide you with exactly what you're looking for. </p>

</div>
</div><!-- end of uk-data-grid -->
</div>
&nbsp;
<div class="center-highlight">
<p class="title-highlight highlight-small"></p>
</div>

<div class="services-rows" data-uk-grid>
<div class="uk-width-medium-1-4">
<div class="grid-title">
	<a href="<?php echo $homeUrl . "/what-is-a-domain/";?>">
                
                    <span class="fa-stack fa-5x">
                        <i class="uk-icon-cutlery uk-icon-large"></i>
                    </span>
</a>
                <div class="grid-body">
                    <h4><a href="<?php echo $homeUrl . "/what-is-a-domain/";?>">Food Menu</a></h4>
                    <p> Simple menu management for restaurants.</p>
                    <a href="/testimonials" class="btn btn-primary">Learn More</a>
                </div>
            </div>
</div><!-- end of col -->

<div class="uk-width-medium-1-4">
<div class="grid-title">
	<a href="<?php echo $homeUrl . "/google-friendly-seo/";?>">
                    <span class="fa-stack fa-5x">
                      <i class="uk-icon-camera uk-icon-large"></i>
                    </span>
              
	</a>
                <div class="grid-body">
                    <h4><a href="<?php echo $homeUrl . "/google-friendly-seo/";?>">Portfolio</a></h4>
                    <p> Simple and customizable portfolio management. </p>
                    <a href="/testimonials" class="btn btn-primary">Learn More</a>
                </div>
            </div>
</div><!-- end of col -->

<div class="uk-width-medium-1-4">
<div class="grid-title">
	<a href="<?php echo $homeUrl . "/pagespeed/";?>">
                
                    <span class="fa-stack fa-5x">
                      <i class="uk-icon-users uk-icon-large"></i>
                    </span>
                
	</a>
                <div class="grid-body">
                    <h4><a href="<?php echo $homeUrl . "/pagespeed/";?>">Staff Members</a></h4>
                    <p> Manage and Update Staff Members on Your Website</p>
                    <a href="/testimonials" class="btn btn-primary">Learn More</a>
                </div>
            </div>
</div><!-- end of col -->

<div class="uk-width-medium-1-4">
<div class="grid-title">
	<a href="<?php echo $homeUrl . "/social-media-marketing/";?>">
              
                    <span class="fa-stack fa-5x">
                      <i class="uk-icon-heart uk-icon-large"></i>
                    </span>
              
	</a>
                <div class="grid-body">
                    <h4><a href="<?php echo $homeUrl . "/social-media-marketing/";?>">Testimonials </a></h4>
                    <p> Create a manageable archive of Testimonials </p>
                    <a href="/testimonials" class="btn btn-primary">Learn More</a>
                </div>
            </div>

</div><!-- end of col -->
</div><!-- end of Grid -->

</div><!-- end of intro-wrapper -->


<!-- start bottom wrapper -->
<div class="bottom-wrapper">

<div class="parallaxbox" id="pb2" style="background-image: url('http://localhost:8080/beans_uikit/wp-content/uploads/2016/06/eugene-website-development-design-feynman-10.jpg');">


<!-- start parallax heading -->

<div class="parallax-heading">
<div class="uk-width-medium-1-1 parallax-text" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; top: 0px; left: 0px; opacity: 1;">

<div class="uk-container start-container">
<div class="text text-right" data-uk-grid>
<div class="uk-width-medium-1-2">
</div>

<div class="uk-width-medium-1-2">
<h2 class="sub-titles start-sub">Let's Get Started</h2> 

<h3><a href="#" class="uk-icon-button uk-icon-check"></a>Creative Web Design</h3>
<h3><a href="#" class="uk-icon-button uk-icon-check"></a>Custom Management Solutions</h3>
<h3><a href="#" class="uk-icon-button uk-icon-check"></a>The Latest Web Technologies</h3>

<h3><a href="#" class="uk-icon-button uk-icon-check"></a>Wordpress Done the Right Way</h3>
<h3> <a href="#" class="uk-icon-button uk-icon-check"></a>Minimal Plugins </h3>
<h3> <a href="#" class="uk-icon-button uk-icon-check"></a>Update Ready </h3>
<h3> <a href="#" class="uk-icon-button uk-icon-check"></a>Easy to Use </h3>
</div>
</div>
</div><!-- end .start-container -->

</div>


</div>
</div><!-- end .parallax-heading -->

<div class="bottom-content-wrapper">

<!-- Start .home-center -->

<div class="home-center">
<div class="services-rows" data-uk-grid>
&nbsp;
<div class="uk-width-medium-1-1">
<h2 class="sub-titles"> We Make User Friendly Wordpress Sites </h2>
<p class="title-highlight highlight-small-blue"></p>
<p class="page-intro"> Usability is our number one priority. </p>
</div>

</div><!-- end of data-uk-grid -->

<div class="services-rows info-row" data-uk-grid>

<div class="uk-width-medium-1-2">

<h3 class="info-title">WordPress Theme Development</h3>

<p> Using the latest and best reviewed WordPress theme frameworks, we can provide you with a custom website tailored to fit the specific needs of your enterprise. Our seasoned developers program according to WordPress’s best practices to ensure that you’re site is bug free, fast and modern. </p>


</div>


<div class="uk-width-medium-1-2">

<h3 class="info-title">Plugin Development</h3>

<p> Looking to manage your own content or do you want to incorporate a custom feature? Using several powerful WordPress APIs, we can provide you with a wide range of content management features and much more. We also provide support for IDX integration from your Multiple Listings Service. </p>
</div>
</div>

</div>
</div><!-- end of home-center -->
</div><!-- end of bottom-wrapper -->


<!-- Start client section -->


<div class="client-wrapper">
<div class="uk-container">
<div class="grid-rows" data-uk-grid>

<div class="uk-width-medium-1-1" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; top: 0px; left: 0px; opacity: 1;">
<h2 class="sub-titles"> We Make Your Wordpress Site Usable for You </h2>
<p class="page-intro"> Usability is our number one priority. </p>
</div>

<div class="uk-width-medium-1-4">
<i class="sprite"></i> <h2>Easy to work with.</h2> <p>Our developers are easy to work with, communicate often, will gladly join your daily standups, and above all, they proactively move projects forward to ensure they're always adding value.</p>


<div class="uk-margin" data-uk-slideset="{small: 2, medium: 4}">
                                <div class="uk-slidenav-position uk-margin">
                                    <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4 uk-grid-width-small-1-2">
                                       <li class="uk-active"><img src="" data-holder-rendered="true"></li>
                                       <li class="uk-active"><img src="" data-holder-rendered="true"></li>
                                       <li class="uk-active"><img src="" data-holder-rendered="true"></li>
                                       <li class="uk-active"><img src="" data-holder-rendered="true"></li>
                                       <li class="uk-active"><img src="" data-holder-rendered="true"></li>
                                       <li class="uk-active"><img src="" data-holder-rendered="true"></li>
                                      
                                    </ul>
                                    <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                    <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
                                </div>
                                <ul class="uk-slideset-nav uk-dotnav uk-flex-center"><li data-uk-slideset-item="0" class=""><a></a></li><li data-uk-slideset-item="1" class="uk-active"><a></a></li><li data-uk-slideset-item="2" class=""><a></a></li></ul>
                            </div>


</div>
<div class="uk-width-medium-1-4">
 <i class="sprite"></i> <h2>Champions of quality.</h2> <p>Creating high-quality, efficient and maintainable code is our highest priority. Our developers write nothing less than code that lasts.</p>

</div>
<div class="uk-width-medium-1-4">
<i class="sprite"></i> <h2>Passionate leaders.</h2> <p>Our vetting process not only screens for quality, expertise and communication, but also their values and passion for learning and growing.</p> 

</div>
<div class="uk-width-medium-1-4">
<i class="sprite"></i> <h2>Dedicated and focused.</h2> <p>X-Team developers are dedicated full-time to only one project, meaning they're focused and there when you need them.</p> 

</div>

</div><!-- end .grid-rows -->
</div><!-- end .uk-container -->
</div><!--end .client-wrapper -->

<!-- Start Footer Call -->

<div class="uk-container call-container">
<div class="grid-rows call-row" data-uk-grid>
<div class="uk-width-medium-2-3">
<h3 class="call-title"><i class="uk-icon-medium uk-icon-comments" style="visibility:hidden;"></i><span style="margin-left:-20px;">Got Questions?</span><span style="margin-left: 60px;"> We've Got Answers.</span></h3>
</div>

<div class="uk-width-medium-1-3">
<h3 class="call-title"><a href=""><i class="uk-icon-medium uk-icon-comments"></i> <span style="margin-left: 20px;">Check Out Our Website FAQ</span></a></h3>
</div>
</div>
</div><!-- End of uk-container -->

<?php
}

elseif(!is_page('video-slider') && !is_front_page() && !is_page('fullwidth'))
{
	
?>

<div class="parrallax-wrapper pages-wrapper">
<div class="uk-margin pages-header <?php if(is_page('contact')) {echo 'contact-header';} elseif (is_page('development')) { echo 'dev-header';} elseif (is_page('google-friendly-seo')) { echo 'seo-header';} elseif (is_page('social-media-marketing')) { echo 'social-header';} elseif(is_page('about')) { echo 'about-header';} elseif (is_page('blog') || is_single() || is_archive()) { echo 'blog-header';} elseif (is_home()) { echo 'post-header';} elseif (is_page('client-projects')) {echo 'project-header';} ?> uk-text-contrast uk-text-center uk-flex uk-flex-center uk-flex-middle" data-uk-parallax="{bg: '-300'}">
<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade" style="position: static; width:100%; height: 100%;">
<div data-uk-scrollspy="{cls:'uk-animation-fade', delay:100}">
<div data-uk-parallax="{opacity: '1,0.5', scale: '1,0.2'}"><h1 class="pages-title"> <?php if( !is_home() && !is_page('fullwidth') && !is_page('home')) {echo get_the_title();} elseif(is_home()) {echo 'Blog'; } ?></h1></div>

</div>
</div>

</div>
</div>

<!--Start Testimonials-box -->

<div class="parallaxbox testimonials-box" id="pb3">
	<div class="uk-container testimonials-container">
	<div class="testimonials-row" data-uk-grid>
		<div class="uk-width-medium-1-1">
			<h2 class="subtitles testimonials-title">What Are Clients are Saying </h2>
		</div>
	</div>
	</div>
</div>

<!-- Start bottom-info-container -->
<div class="bottom-content-wrapper bottom-info-container">

<h2 class="sub-titles blog-title" data-uk-scrollspy="{cls:'uk-animation-fade', delay:500}"> Feynman Group Blog </h2>
<h4 class="blog-subtitle"  data-uk-scrollspy="{cls:'uk-animation-fade', delay:500}">The latest industry news, notes, & chat</h4>

<!-- Start .home-center -->
<div class="home-center">
<div class="services-rows" data-uk-grid style="position: relative; height: 133px;">


</div><!-- end of data-uk-grid -->

<div class="services-rows" data-uk-grid>
<div class="uk-width-medium-1-2">

</div>
<div class="uk-width-medium-1-2">

</div>


</div><!-- end of data-uk-grid -->


</div>
</div><!-- end .bottom-info-container -->

<?php
}

if(is_page('home-slideshow')) {

?>

<div class="container-fluid home-slide-container">
<div class="uk-slidenav-position" data-uk-slideshow="">
                                <ul class="uk-slideshow uk-overlay-active" style="height: 411px;">
                                    <li aria-hidden="true" class="" style="animation-duration: 500ms; height: 411px;"><div class="uk-cover-background uk-position-cover" style="background-image: url(&quot;images/placeholder_800x400_1.jpg&quot;);"></div>
                                        <canvas width="800" height="400" style="width: 100%; height: auto; opacity: 0;"></canvas>
                                        <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                                            <div>
                                                <h3>Overlay</h3>
                                                <p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr,<br>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                                                <button class="uk-button uk-button-primary">Button</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li aria-hidden="false" style="animation-duration: 500ms; height: 411px;" class="uk-active"><div class="uk-cover-background uk-position-cover" style="background-image: url(&quot;images/placeholder_800x400_2.jpg&quot;);"></div>
                                        <canvas width="800" height="400" style="width: 100%; height: auto; opacity: 0;"></canvas>
                                        <div class="uk-overlay-panel uk-overlay-background uk-overlay-top uk-overlay-slide-top">
                                            <h3>Overlay Top</h3>
                                            <p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                                            <button class="uk-button uk-button-primary">Button</button>
                                        </div>
                                    </li>
                                    <li aria-hidden="true" style="height: 411px;"><div class="uk-cover-background uk-position-cover" style="background-image: url(&quot;images/placeholder_800x400_3.jpg&quot;);"></div>
                                        <canvas width="800" height="400" style="width: 100%; height: auto; opacity: 0;"></canvas>
                                        <div class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-bottom">
                                            <h3>Overlay Bottom</h3>
                                            <p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                                            <button class="uk-button uk-button-primary">Button</button>
                                        </div>
                                    </li>
                                    <li aria-hidden="true" style="height: 411px;"><div class="uk-cover-background uk-position-cover" style="background-image: url(&quot;images/placeholder_800x400_1.jpg&quot;);"></div>
                                        <canvas width="800" height="400" style="width: 100%; height: auto; opacity: 0;"></canvas>
                                        <div class="uk-overlay-panel uk-overlay-background uk-overlay-left uk-overlay-slide-left uk-width-1-4">
                                            <h3>Overlay Left</h3>
                                            <p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                                            <button class="uk-button uk-button-primary">Button</button>
                                        </div>
                                    </li>
                                    <li aria-hidden="true" style="height: 411px;"><div class="uk-cover-background uk-position-cover" style="background-image: url(&quot;images/placeholder_800x400_2.jpg&quot;);"></div>
                                        <canvas width="800" height="400" style="width: 100%; height: auto; opacity: 0;"></canvas>
                                        <div class="uk-overlay-panel uk-overlay-background uk-overlay-right uk-overlay-slide-right uk-width-1-4">
                                            <h3>Overlay Right</h3>
                                            <p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                                            <button class="uk-button uk-button-primary">Button</button>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
                            </div>




<!-- Start Ken Burns slideshow -->

<div class="uk-slidenav-position" data-uk-slideshow="{kenburns:true, autoplay:true}">
                                <ul class="uk-slideshow" style="height: 411px;">
                                    <li aria-hidden="true" class="" style="animation-duration: 500ms; height: 411px;"><div class="uk-cover-background uk-position-cover uk-animation-scale uk-animation-reverse uk-animation-top-center" style="animation-duration: 15s; background-image: url(&quot;images/placeholder_800x400_1.jpg&quot;);"></div><canvas width="800" height="400" style="width: 100%; height: auto; opacity: 0;"></canvas></li>
                                    <li aria-hidden="true" class="" style="animation-duration: 500ms; height: 411px;"><div class="uk-cover-background uk-position-cover uk-animation-scale uk-animation-reverse uk-animation-middle-left" style="animation-duration: 15s; background-image: url(&quot;images/placeholder_800x400_2.jpg&quot;);"></div><canvas width="800" height="400" style="width: 100%; height: auto; opacity: 0;"></canvas></li>
                                    <li aria-hidden="false" class="uk-active" style="animation-duration: 500ms; height: 411px;"><div class="uk-cover-background uk-position-cover uk-animation-scale uk-animation-reverse uk-animation-top-right" style="animation-duration: 15s; background-image: url(&quot;images/placeholder_800x400_3.jpg&quot;);"></div><canvas width="800" height="400" style="width: 100%; height: auto; opacity: 0;"></canvas></li>
                                </ul>
                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
                            </div><!-- end ken burns slider -->


<!-- Start Carousel -->


<div class="uk-slidenav-position" data-uk-slideshow="">
                                <ul class="uk-slideshow uk-text-center" style="height: 232px;">
                                    <li aria-hidden="true" class="" style="animation-duration: 500ms; height: 232px;">
                                        <div class="uk-panel uk-panel-box">
                                            <div class="uk-grid">
                                                <div class="uk-width-1-3">
                                                    <img src="images/placeholder_200x200.svg" width="200" height="200" alt="">
                                                </div>
                                                <div class="uk-width-2-3">
                                                    <h3 class="uk-panel-title">Headline 1</h3>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                                    <button class="uk-button">Read more</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li aria-hidden="false" style="animation-duration: 500ms; height: 232px;" class="uk-active">
                                        <div class="uk-panel uk-panel-box uk-panel-box-primary">
                                            <div class="uk-grid">
                                                <div class="uk-width-2-3">
                                                    <h3 class="uk-panel-title">Headline 2</h3>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                                    <button class="uk-button">Read more</button>
                                                </div>
                                                <div class="uk-width-1-3">
                                                    <img src="images/placeholder_200x200.svg" width="200" height="200" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                            </div>


</div><!-- end of .home-slide-container -->


<?php


}



if(is_page('fullwidth')) {

?>

<div class="parallaxbox" id="pb4" style="background-image: url('<?php echo HOME_URL . "/wp-content/uploads/2016/08/home-background.jpg"; ?>');">
<div class="uk-container">
<div class="ad-row" data-uk-grid>
<div class="uk-width-medium-1-1" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; top: 0px; left: 560px; opacity: 1;">
<h2 class="sub-titles start-sub" style="text-align:center;"><?php the_title(); ?></h2> 
<h3> We're Here to Help </h3>
<a href="/">Contact Us </a>
</div>
</div>
</div>
</div><!-- end #pb4 -->

<div class="pricing-container">
<div class="row col-no-gutter triple-top-padding double-bottom-padding single-h-padding limit-width row-parent" data-imgready="true"><div class="row-inner"><div class="pos-middle pos-center align_center column_parent col-lg-4 boomapps_vccolumn single-internal-gutter"><div class="uncol style-light"><div class="uncoltable"><div class="uncell  boomapps_vccolumn no-block-padding"><div class="uncont"><div class="uncode-wrapper uncode-pricing"><div class="plan"><div class="plan-container"><div class="plan-title"><h3 class="">STARTER</h3><span class="plan-title-data">for new user's</span></div><div class="plan-price"><span class="price">$25</span><span>per month</span></div><div class="plan-list"><ul class="item-list"><li><strong>5GB</strong> Disk Space
</li><li><strong>15</strong> Email Addresses
</li><li><strong>50 </strong>  Subdomains</li></ul><div class="plan-button"><a href="http://www.undsgn.com/anima/team-members/" class="btn btn-default" target="">Sign up</a></div></div></div></div></div></div></div></div></div></div><div class="pos-middle pos-center align_center column_parent col-lg-4 boomapps_vccolumn single-internal-gutter"><div class="uncol style-light"><div class="uncoltable"><div class="uncell  boomapps_vccolumn no-block-padding"><div class="uncont"><div class="uncode-wrapper uncode-pricing"><div class="plan plan-most-popular"><div class="plan-container"><div class="plan-title"><h3 class="">BUSINESS</h3><span class="plan-title-data">for new user's</span></div><div class="plan-price"><span class="price">$50</span><span>per month</span></div><div class="plan-list"><ul class="item-list"><li><strong>10GB</strong> Disk Space
</li><li><strong>25</strong> Email Addresses
</li><li><strong>60 </strong>  Subdomains</li></ul><div class="plan-button"><a href="http://www.undsgn.com/anima/team-members/" class="btn btn-default" target="">Sign up</a></div></div></div></div></div></div></div></div></div></div><div class="pos-middle pos-center align_center column_parent col-lg-4 boomapps_vccolumn single-internal-gutter"><div class="uncol style-light"><div class="uncoltable"><div class="uncell  boomapps_vccolumn no-block-padding"><div class="uncont"><div class="uncode-wrapper uncode-pricing"><div class="plan"><div class="plan-container"><div class="plan-title"><h3 class="">PREMIUM</h3><span class="plan-title-data">for new user's</span></div><div class="plan-price"><span class="price">$75</span><span>per month</span></div><div class="plan-list"><ul class="item-list"><li><strong>15GB</strong> Disk Space
</li><li><strong>50</strong> Email Addresses
</li><li><strong>65 </strong>  Subdomains</li></ul><div class="plan-button"><a href="http://www.undsgn.com/anima/team-members/" class="btn btn-default" target="">Sign up</a></div></div></div></div></div></div></div></div></div></div><script id="script-466698" type="text/javascript">UNCODE.initRow(document.getElementById("script-466698"));</script></div></div>
</div>

<div class="testimonial-container">
<div class="parallaxbox" id="pb5" style="background-image: url('<?php echo HOME_URL . "/wp-content/uploads/2016/07/eugene-seo-search-engine-optimization-springfield-oregon-development.jpg"; ?>');">
<div class="uk-container">
<div class="ad-row" data-uk-grid>
<div class="uk-width-medium-1-1" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; top: 0px; left: 560px; opacity: 1;">
<h2 class="sub-titles start-sub" style="text-align:center;">Contact </h2> 
<h3> We're Here to Help </h3>
<a href="/">Contact Us </a>
</div>
</div>
</div>
</div><!-- end #pb5 -->
<div class="testimonial-bottom">
<h2 class="sub-titles start-sub" style="text-align:center;">Testimonials</h2> 
</div>
</div><!-- end .testimonial-container -->

<div class="portfolio-container">
<div class="uk-container">
<div class="portfolio-row" data-uk-grid>
<div class="uk-width-medium-1-1">
<h2 class="sub-titles box-3-title"> Recent Projects </h2>
<hr class="title-separator">
</div>
</div>

<div class="portfolio-row" data-uk-grid>

<div class="uk-width-medium-1-3">
</div>
<div class="uk-width-medium-1-3">
</div>
<div class="uk-width-medium-1-3">
</div>

</div>

</div>
</div>


<?php

}


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