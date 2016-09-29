<?php

/* Primary Homepage template */



add_action( 'beans_fixed_wrap[_header]_after_markup', 'beans_child_custom_home' );

function beans_child_custom_home()
{


    if (is_front_page()) {

        $homeUrl = site_url('/', 'http');
        $slideUrl = site_url('/', 'http');

        ?>
	
	</header><!-- end header -->

        <div class="parallaxbox intro-background" id="pb0" data-uk-scrollspy="{cls:'uk-animation-fade', delay:200}"></div>


        <div class="f-textbox info-container">
            <div class="row-center intro-statement" data-uk-grid>
                <div class="uk-width-medium-1-1">
                    <div class="description-container">
                        <div class="description-border">

                            <ul class="uk-subnav description-tabs"
                                data-uk-switcher="{connect:'#switcher-content-a-scale', animation: 'scale'}">
                                <li class="uk-active" aria-expanded="true"><a href="#">Welcome</a></li>
                                <li aria-expanded="false" class=""><a href="#">Vision</a></li>
                                <li aria-expanded="false" class=""><a href="#">Mission</a></li>
                            </ul>
                        </div>
                        <ul id="switcher-content-a-scale" class="uk-switcher uk-margin description-content">
                            <li aria-hidden="false" class="uk-active" style="animation-duration: 200ms;">At Feynman
                                Group, our business is technology. With a focus on sincere, human relationships,
                                industry-leading products, and superiority in service, Feynman Group helps businesses
                                prosper through their use of the internet and associated technologies. We maintain our
                                commitment to integrity, consistency, and creativity through all of our services, from
                                networking to collaboration, web design, digital marketing, and beyond. Contact us to
                                find out how we can solve your business's technology problems.
                            </li>
                            <li aria-hidden="true" class="" style="animation-duration: 200ms;">Inspired by some of Richard Feynman's basic values,
                            such as keeping an open mind, finding pleasure in problem-solving, fostering curiosity, and keeping things simple,
                            our vision is to create and promote the best IT products available on today's market while maintaining the highest
                            standards of integrity, sustainabiltiy, and preofessionalism. At the end of the day, we strive to make a positive impact
                            on our community and world around us.


                            </li>
                            <li aria-hidden="true" class="" style="animation-duration: 200ms;">Our mission at Feynman Group
                            is to empower local businesses throughout Oregon through the use of today's most innovative technolgies.
                            With a compassionate approach, we want to help you build a successful infrastructure to break down any barriers
                            of communcation between you and your customers. Each day we strive to maintain a culture centered around the people
                            we serve, and when you value respect as an asset, technology becomes a little more human.
                            </li>
                        </ul>


                    </div>
                </div>

            </div>
            <!-- end .row-center -->

        </div><!-- end .info-container -->


        <div class="parallaxbox intro-box-1" id="pb1">

            <div class="uk-container">
                <div class="row-center" data-uk-grid>
                    <div class="uk-width-medium-1-3">
                        <div class="wireframe service-box"
                             data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">
                            <h2><a href="/networks"><i class="uk-icon-medium uk-icon-server intro-icons"></i>
                                    NETWORKS</a></h2>

                            <div class="wf-dash"></div>
                            <p>Expert network architecture, maintenance, and monitoring ensures all of your hardware and
                                software are securely connected and performing flawlessly.</p>
                        </div>
                    </div>

                    <div class="uk-width-medium-1-3">
                        <div class="wireframe service-box"
                             data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">
                            <h2><a href="/web-design"><i class="uk-icon-medium uk-icon-paint-brush intro-icons"></i>WEB
                                    DESIGN</a></h2>

                            <div class="wf-dash"></div>
                            <p>Artistically constructed websites, custom applications, and unforgettable
                                user-experiences all begin with brilliant code.</p>
                        </div>
                    </div>

                    <div class="uk-width-medium-1-3">
                        <div class="wireframe service-box"
                             data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">
                            <h2><a href="/digital-marketing"><i
                                        class="uk-icon-medium uk-icon-search-plus intro-icons"></i>SEO</a></h2>

                            <div class="wf-dash"></div>
                            <p>Amplify your visibility across the web and reach those seeking you out across the digital
                                space.</p>
                        </div>
                    </div>
                </div>
                <!-- end .row-center-2 -->

                <div class="row center bottom-row" data-uk-grid>
                    <div class="uk-width-medium-1-3 hidden-xs">
                        <div class="wireframe service-box"
                             data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">
                            <h2><a href="/support"><i class="uk-icon-medium uk-icon-support intro-icons"></i>SUPPORT</a>
                            </h2>

                            <div class="wf-dash"></div>
                            <p>Need help? Our staff has been solving technology problems since 1995, effectively
                                bridging the gap between the technical and the human.</p>
                        </div>
                    </div>

                    <div class="uk-width-medium-1-3 hidden-sm hidden-xs">
                        <div class="wireframe service-box"
                             data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">
                            <h2><a href="/cloud"><i class="uk-icon-medium uk-icon-cloud intro-icons"></i>CLOUD</a></h2>

                            <div class="wf-dash"></div>
                            <p>Cloud solutions from hosted exchange, to data backup, colocation, and virtual private
                                servers help you thrive wherever you are.</p>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-3 hidden-sm hidden-xs">
                        <div class="wireframe service-box"
                             data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">
                            <h2><a href="/collaboration"><i class="uk-icon-medium uk-icon-share-alt intro-icons"></i>COLLABORATION</a>
                            </h2>

                            <div class="wf-dash"></div>
                            <p>Communication is vital. Keep in contact from any location or device with advanced Voice
                                over IP, video conferencing, and connected messaging tools.</p>
                        </div>
                    </div>
                </div>
                <!-- end of services list -->

            </div>
        </div><!-- end .uk-container -->

        <div class="intro-box-2">
            <h2 class="sub-titles dark-title" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}"> We Solve
                Technology Problems </h2>
            <hr class="title-separator" style="border-color:white;">
            <div class="page-intro">
                <p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}"> Integrity - Consistency -
                    Creativity</p>

                <p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}"> Empower your business with tech
                    solutions tailored to fit your specific needs.</p>
                <p class="f-button-wrapper" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}"><a href="http://localhost:8080/beans_uikit/contact/" class="contact-buttons">Contact Us </a></p>

            </div>
        </div><!-- end .intro-box-2 -->

        <div class="parallaxbox contact-box" id="pb2">
            <div class="uk-container">
                <div class="ad-row" data-uk-grid>
                    <div class="uk-width-medium-1-1 f-quote-wrap" data-grid-prepared="true"
                         style="position: absolute; box-sizing: border-box; top: 0px; left: 560px; opacity: 1;">
                        <h3 class="f-feynman-quote" data-uk-scrollspy="{cls:'uk-animation-fade', delay:200}"> "My mother taught me that the highest forms of understanding we can achieve are laughter and human compassion."
                            </h3>
                        <h3 class="f-feynman-credit" data-uk-scrollspy="{cls:'uk-animation-fade', delay:200}"> - Richard Feynman </h3>

                    </div>
                </div>
            </div>
        </div><!-- end #pb2 -->

        <div class="intro-box-3">
            <div class="uk-container">

                <div class="service-rows" data-uk-grid>
                    <div class="uk-width-medium-1-1">
                        <h2 class="sub-titles box-3-title"
                            data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}"> Our Web Development
                            Strategy </h2>
                        <hr class="title-separator">
                    </div>
                </div>

                <div class="services-rows info-row" data-uk-grid>
                    <div class="uk-width-medium-1-3">

                        <h3 data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}"><i
                                class="uk-icon-large uk-icon-bar-chart service-icons"></i><span>1 Analysis</span></h3>

                        <p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">In the first phase, we
                            clearly organize and define our objectives to meet the exact needs of your project. These
                            include aspects such as target audience, information architecture, specific features, and
                            more.</p>
                    </div>


                    <div class="uk-width-medium-1-3">
                        <h3 data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}"><i
                                class="uk-icon-large uk-icon-image service-icons"></i><span> 2 Graphic Design</span>
                        </h3>

                        <p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">Using all information
                            obtained through our analysis, we address the overall aesthetic of the site. Components such
                            as navigation, page layout, and user interface critically affect the way users will interact
                            with your page.</p>
                    </div>

                    <div class="uk-width-medium-1-3">
                        <h3 data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}"><i
                                class="uk-icon-large uk-icon-connectdevelop service-icons"></i>
                            <span>3 Development</span></h3>

                        <p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">When all of our designs,
                            features, and user interface elements are approved, we begin creating the framework which
                            will bring your website to life. Here, we develop the HTML, CSS, and CMS (Content Management
                            System) which will provide a rock-solid foundation to your website.</p>
                    </div>
                </div>
                <!- end data-uk-grid -->

                <div class="row-center info-row" data-uk-grid>

                    <div class="uk-width-medium-1-3">
                        <h3 data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}"><i
                                class="uk-icon-large uk-icon-pencil-square-o service-icons"></i><span> 4 Content Development</span>
                        </h3>

                        <p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">All of the pieces fit
                            together in this step where we assist you in creating high quality, keyword rich copy. Your
                            content is then integrated and refined into the foundation we have built.</p>
                    </div>

                    <div class="uk-width-medium-1-3">
                        <h3 data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}"><i
                                class="uk-icon-large uk-icon-balance-scale service-icons"></i> <span>5 Testing</span>
                        </h3>

                        <p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">The final phase of our
                            process involves rigorous testing, approval, and training. We confirm the site functions
                            perfectly on all ends, verify that all content is correct, and ensure the necessary members
                            of your staff understand how to manage your new site.</p>
                    </div>


                    <div class="uk-width-medium-1-3">
                        <h3 data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}"><i
                                class="uk-icon-large uk-icon-rocket service-icons" =></i><span>6 Site Launch</span></h3>

                        <p data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">The final phase of our
                            process involves rigorous testing, approval, and training. We confirm the site functions
                            perfectly on all ends, verify that all content is correct, and ensure the necessary members
                            of your staff understand how to manage your new site.</p>
                    </div>
                </div>
                <!-- end uk-data-grid -->
            </div>
            <!-- end .uk-container -->

            <div class="certified-background">
                <div class="certified-container uk-container">
                    <div class="certified-row" data-uk-grid>
                        <div class="uk-width-medium-1-1 certified-col">
                            <h2 class="sub-titles box-3-title"
                                data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:200}">Certified By Top
                                Industry Brands </h2>
                            <hr class="title-separator">
                        </div>


                        <div class="uk-width-medium-1-1">

                            <div class="uk-margin" data-uk-slideset="{small: 2, medium: 4}" style="padding-top:80px;">
                                <div class="uk-slidenav-position uk-margin">
                                    <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4 uk-grid-width-small-1-2">
                                        <li class="uk-active"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-google.png'; ?>"
                                                width="600" height="400" alt="1 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:1/size:100"
                                                data-holder-rendered="true"></li>
                                        <li class="uk-active"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-symantec.png'; ?>"
                                                width="600" height="400" alt="2 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:2/size:100"
                                                data-holder-rendered="true"></li>
                                        <li class="uk-active" style=""><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-authorize-net.png'; ?>"
                                                width="600" height="400" alt="3 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:3/size:100"
                                                data-holder-rendered="true"></li>
                                        <li class="uk-active" style=""><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-verizon.png'; ?>"
                                                width="600" height="400" alt="4 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:4/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-network-solutions.png'; ?>"
                                                width="600" height="400" alt="5 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:5/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-microsoft-gold.png'; ?>"
                                                width="600" height="400" alt="6 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:6/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-pax-8.png'; ?>"
                                                width="600" height="400" alt="7 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:7/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-bing.png'; ?>"
                                                width="600" height="400" alt="8 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:8/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-century-link.png'; ?>"
                                                width="600" height="400" alt="9 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:9/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-carbonite.png'; ?>"
                                                width="600" height="400" alt="10 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:10/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-web-sense.png'; ?>"
                                                width="600" height="400" alt="9 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:9/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-vm-ware.png'; ?>"
                                                width="600" height="400" alt="10 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:10/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-thawte.png'; ?>"
                                                width="600" height="400" alt="9 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:9/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-integra.png'; ?>"
                                                width="600" height="400" alt="10 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:10/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-comcast.png'; ?>"
                                                width="600" height="400" alt="9 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:9/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-hewlett-packard.png'; ?>"
                                                width="600" height="400" alt="10 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:10/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-dell.png'; ?>"
                                                width="600" height="400" alt="9 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:9/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/09/feynman-group-certified-partnerships-comstor.png'; ?>"
                                                width="600" height="400" alt="10 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:10/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/08/feynman-group-certified-partnerships-meraki-cisco.png'; ?>"
                                                width="600" height="400" alt="10 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:10/size:100"
                                                data-holder-rendered="true"></li>
                                        <li style="display: none;"><img
                                                src="<?php echo $homeUrl . '/wp-content/uploads/2016/08/feynman-group-certified-partnerships-apc.png'; ?>"
                                                width="600" height="400" alt="10 [600x400]"
                                                data-src="holder.js/600x400/sky/auto/text:10/size:100"
                                                data-holder-rendered="true"></li>
                                    </ul>
                                    <a href="#" class="uk-slidenav uk-slidenav-previous"
                                       data-uk-slideset-item="previous"></a>
                                    <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
                                </div>
                                <ul class="uk-slideset-nav uk-dotnav uk-flex-center">
                                    <li data-uk-slideset-item="0" class="uk-active"><a></a></li>
                                    <li data-uk-slideset-item="1"><a></a></li>
                                    <li data-uk-slideset-item="2"><a></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end .intro-box-3 -->

        <?php
    }

}
?>