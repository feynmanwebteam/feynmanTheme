/*jQuery(document).ready(function($) {

$(window).scroll(function() {

if($(this).scrollTop() > 55 && $(this).scrollTop() < 600 ) {

    $('.tm-header').addClass('hide-sticky');
}
else if ($(this).scrollTop() > 600){  

    $('.tm-header').addClass('sticky');
     $('.cust_slideshow').addClass('slider-topper');
  }
  
  else{
    $('.tm-header').removeClass('sticky');
    $('.tm-header').removeClass('hide-sticky');
    $('.cust_slideshow').removeClass('slider-topper');
  }
});

});*/




/* parallax test */

function parallax() {
    setpos("#pb0");
    setpos("#pb1");
    setpos("#pb2", 4);
    setpos("#pb3");
    setpos("#pb4");
}



function setpos(element, factor) {
    factor = factor || 2;
    
    var offset = jQuery(element).offset();
    var w = jQuery(window);
    
    var posx = (offset.left - w.scrollLeft()) / factor;
    var posy = (offset.top - w.scrollTop()) / factor;
    
    jQuery(element).css('background-position', '50% '+posy+'px');
    
    // use this to have parralax scrolling vertical and horizontal
    //$(element).css('background-position', posx+'px '+posy+'px');
}

jQuery(document).ready(function () {
    parallax();
}).scroll(function () {
    parallax();
});