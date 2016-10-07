<?php

/* Transparent Homepage  Template */

if ( ! defined( 'ABSPATH') ) exit; // Exit if accessed directly

add_action( 'beans_fixed_wrap[_header]_after_markup', 'beans_child_homepage_transparent' );

function beans_child_homepage_transparent()
{
    ?>
     <!-- add css for transparent header -->

<?php


}
