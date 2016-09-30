<?php

/* Video Slideshow Template */


add_action( 'beans_fixed_wrap[_header]_after_markup', 'beans_child_video_slideshow' );

function beans_child_video_slideshow()
{


    if (is_page('video-slider')) {

        ?>

</header><!-- end header -->
        <div class="uk-slidenav-position f-video-container" data-uk-slideshow="" data-uk-scrollspy="{cls:'uk-animation-fade', delay:400}">

            <div class="inner video-slide-inner">
                <div class="f-developer-wrapper">
                    <h1 class="developer-title">Trusted Developers,<br> ready to join your
                    team.</h1>

                <h2>Feynman Group is trusted by the area's leading brands, <br/> providing high-quality developers when
                    you need them most since 2006.</h2>
                <ul class="buttons video-buttons">
                    <li><a href="//player.vimeo.com/video/126542270?autoplay=1"
                           class="watch js-watch slide-video-button"><span class="sprite"></span>Learn More</a></li>
                </ul>
                </div><!-- end .f-developer-title -->


                <ul class="uk-slideshow homepage-video">
                    <div class="overlay"></div>

                    <li aria-hidden="false" class="uk-active">
                        <img style="width:100%;height:auto;" src="">

                        <video width="600" height="auto" autoplay="" loop="" muted=""
                               class="uk-cover-object uk-position-absolute">
                            <source
                                src="http://x-team.com/wp-content/themes/x-team.com/assets/img/frontpage_loop.mp4?ver=1467269170"
                                type="video/mp4">
                        </video>
                    </li>

                    <li aria-hidden="true" style="height: 700px;"><img style="width:100%;height:auto;" src="">
                        <iframe
                            src="http://x-team.com/wp-content/themes/x-team.com/assets/img/frontpage_loop.mp4?ver=1467269170"
                            width="500" height="700" frameborder="0" allowfullscreen="" data-player-id="sw-1"
                            class="uk-position-absolute" data-uk-cover="{}"
                            style="pointer-events: none; width: 977px; height: 549px;"></iframe>
                    </li>
                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                   data-uk-slideshow-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            </div>


        </div>


        <div class="intro-wrapper" style="margin: 0 auto;">

            <h1 class="intro-title sub-titles title-new"> Custom Web Solutions to Manage Your Content </h1>
            <hr class="title-separator">

            <div class="uk-container">
                <div class="introduction-rows" data-uk-grid>
                    <div class="uk-width-medium-1-1">
                        <p class="page-intro"> Are you tired of struggling to update content on your website? Wish there was
                            an easier way to manage your content? With our simple and flexible content management
                            plugins, we offer both free and premium Plugins to provide you with exactly what you're
                            looking for. </p>

                    </div>
                </div>
                <!-- end of uk-data-grid -->
            </div>
            &nbsp;
            <!--<div class="center-highlight">
                <p class="title-highlight highlight-small"></p>
            </div>-->

            <div class="services-rows" data-uk-grid>
                <div class="uk-width-medium-1-4">
                    <div class="grid-title">
                        <a href="<?php echo $homeUrl . "/what-is-a-domain/"; ?>">

                    <span class="fa-stack fa-5x">
                        <i class="uk-icon-cutlery uk-icon-large"></i>
                    </span>
                        </a>

                        <div class="grid-body">
                            <h4><a href="<?php echo $homeUrl . "/what-is-a-domain/"; ?>">Food Menu</a></h4>

                            <p> Simple menu management for restaurants.</p>
                            <a href="/testimonials" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="uk-width-medium-1-4">
                    <div class="grid-title">
                        <a href="<?php echo $homeUrl . "/google-friendly-seo/"; ?>">
                    <span class="fa-stack fa-5x">
                      <i class="uk-icon-camera uk-icon-large"></i>
                    </span>

                        </a>

                        <div class="grid-body">
                            <h4><a href="<?php echo $homeUrl . "/google-friendly-seo/"; ?>">Portfolio</a></h4>

                            <p> Simple and customizable portfolio management. </p>
                            <a href="/testimonials" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="uk-width-medium-1-4">
                    <div class="grid-title">
                        <a href="<?php echo $homeUrl . "/pagespeed/"; ?>">

                    <span class="fa-stack fa-5x">
                      <i class="uk-icon-users uk-icon-large"></i>
                    </span>

                        </a>

                        <div class="grid-body">
                            <h4><a href="<?php echo $homeUrl . "/pagespeed/"; ?>">Staff Members</a></h4>

                            <p> Manage and Update Staff Members on Your Website</p>
                            <a href="/testimonials" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="uk-width-medium-1-4">
                    <div class="grid-title">
                        <a href="<?php echo $homeUrl . "/social-media-marketing/"; ?>">

                    <span class="fa-stack fa-5x">
                      <i class="uk-icon-heart uk-icon-large"></i>
                    </span>

                        </a>

                        <div class="grid-body">
                            <h4><a href="<?php echo $homeUrl . "/social-media-marketing/"; ?>">Testimonials </a></h4>

                            <p> Create a manageable archive of Testimonials </p>
                            <a href="/testimonials" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>

                </div>
                <!-- end of col -->
            </div>
            <!-- end of Grid -->

        </div><!-- end of intro-wrapper -->


        <!-- start bottom wrapper -->
        <div class="bottom-wrapper">

            <div class="parallaxbox" id="pb2"
                 style="background-image: url('http://localhost:8080/beans_uikit/wp-content/uploads/2016/06/eugene-website-development-design-feynman-10.jpg');">


                <!-- start parallax heading -->

                <div class="parallax-heading">
                    <div class="uk-width-medium-1-1 parallax-text" data-grid-prepared="true"
                         style="position: absolute; box-sizing: border-box; top: 0px; left: 0px; opacity: 1;">

                        <div class="uk-container start-container">
                            <div class="text text-right" data-uk-grid>
                                <div class="uk-width-medium-1-2">
                                </div>

                                <div class="uk-width-medium-1-2">
                                    <h2 class="sub-titles start-sub">Let's Get Started</h2>

                                    <h3><a href="#" class="uk-icon-button uk-icon-check"></a>Creative Web Design</h3>

                                    <h3><a href="#" class="uk-icon-button uk-icon-check"></a>Custom Management Solutions
                                    </h3>

                                    <h3><a href="#" class="uk-icon-button uk-icon-check"></a>The Latest Web Technologies
                                    </h3>

                                    <h3><a href="#" class="uk-icon-button uk-icon-check"></a>Wordpress Done the Right
                                        Way</h3>

                                    <h3><a href="#" class="uk-icon-button uk-icon-check"></a>Minimal Plugins </h3>

                                    <h3><a href="#" class="uk-icon-button uk-icon-check"></a>Update Ready </h3>

                                    <h3><a href="#" class="uk-icon-button uk-icon-check"></a>Easy to Use </h3>
                                </div>
                            </div>
                        </div>
                        <!-- end .start-container -->

                    </div>


                </div>
            </div>
            <!-- end .parallax-heading -->

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

                    </div>
                    <!-- end of data-uk-grid -->

                    <div class="services-rows info-row" data-uk-grid>

                        <div class="uk-width-medium-1-2">

                            <h3 class="info-title">WordPress Theme Development</h3>

                            <p> Using the latest and best reviewed WordPress theme frameworks, we can provide you with a
                                custom website tailored to fit the specific needs of your enterprise. Our seasoned
                                developers program according to WordPress’s best practices to ensure that you’re site is
                                bug free, fast and modern. </p>


                        </div>


                        <div class="uk-width-medium-1-2">

                            <h3 class="info-title">Plugin Development</h3>

                            <p> Looking to manage your own content or do you want to incorporate a custom feature? Using
                                several powerful WordPress APIs, we can provide you with a wide range of content
                                management features and much more. We also provide support for IDX integration from your
                                Multiple Listings Service. </p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end of home-center -->
        </div><!-- end of bottom-wrapper -->


        <!-- Start client section -->


        <div class="client-wrapper">
            <div class="uk-container">
                <div class="grid-rows" data-uk-grid>

                    <div class="uk-width-medium-1-1" data-grid-prepared="true"
                         style="position: absolute; box-sizing: border-box; top: 0px; left: 0px; opacity: 1;">
                        <h2 class="sub-titles"> We Make Your Wordpress Site Usable for You </h2>

                        <p class="page-intro"> Usability is our number one priority. </p>
                    </div>

                    <div class="uk-width-medium-1-4">
                        <i class="sprite"></i>

                        <h2>Easy to work with.</h2>

                        <p>Our developers are easy to work with, communicate often, will gladly join your daily
                            standups, and above all, they proactively move projects forward to ensure they're always
                            adding value.</p>


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
                                <a href="#" class="uk-slidenav uk-slidenav-previous"
                                   data-uk-slideset-item="previous"></a>
                                <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
                            </div>
                            <ul class="uk-slideset-nav uk-dotnav uk-flex-center">
                                <li data-uk-slideset-item="0" class=""><a></a></li>
                                <li data-uk-slideset-item="1" class="uk-active"><a></a></li>
                                <li data-uk-slideset-item="2" class=""><a></a></li>
                            </ul>
                        </div>


                    </div>
                    <div class="uk-width-medium-1-4">
                        <i class="sprite"></i>

                        <h2>Champions of quality.</h2>

                        <p>Creating high-quality, efficient and maintainable code is our highest priority. Our
                            developers write nothing less than code that lasts.</p>

                    </div>
                    <div class="uk-width-medium-1-4">
                        <i class="sprite"></i>

                        <h2>Passionate leaders.</h2>

                        <p>Our vetting process not only screens for quality, expertise and communication, but also their
                            values and passion for learning and growing.</p>

                    </div>
                    <div class="uk-width-medium-1-4">
                        <i class="sprite"></i>

                        <h2>Dedicated and focused.</h2>

                        <p>X-Team developers are dedicated full-time to only one project, meaning they're focused and
                            there when you need them.</p>

                    </div>

                </div>
                <!-- end .grid-rows -->
            </div>
            <!-- end .uk-container -->
        </div><!--end .client-wrapper -->

        <!-- Start Footer Call -->

        <div class="uk-container call-container">
            <div class="grid-rows call-row" data-uk-grid>
                <div class="uk-width-medium-2-3">
                    <h3 class="call-title"><i class="uk-icon-medium uk-icon-comments"
                                              style="visibility:hidden;"></i><span style="margin-left:-20px;">Got Questions?</span><span
                            style="margin-left: 60px;"> We've Got Answers.</span></h3>
                </div>

                <div class="uk-width-medium-1-3">
                    <h3 class="call-title"><a href=""><i class="uk-icon-medium uk-icon-comments"></i> <span
                                style="margin-left: 20px;">Check Out Our Website FAQ</span></a></h3>
                </div>
            </div>
        </div><!-- End of uk-container -->

        <?php
    }

}

?>