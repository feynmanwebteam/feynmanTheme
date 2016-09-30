<?php



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