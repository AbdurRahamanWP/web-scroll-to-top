<?php

/**
 * Plugin Name:       Web Scroll To Top
 * Plugin URI:        http://targetsoftbd.com/
 * Description:       Website Scroll to top plugin will help you to enable Back to Top button to your WordPress website.
 * Version:           1.0.0
 * Author:            Target Soft BD
 * Author URI:        https://www.facebook.com/AbdurRahamanWP
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/AbdurRahamanWP/web-scroll-to-top
 * Text Domain:       web-scroll-to-top
 * Domain Path:       /languages
 *  Required at lest :  5.2
 *  Required php :  7.2
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/** 
 * include script CSS/Js
 */

 add_action('wp_enqueue_scripts','Web_Scroll_Top_form_enqueue_styles');
 function Web_Scroll_Top_form_enqueue_styles(){
   // wp_enqueue_style( 'web_scroll_top_tab', plugins_url('css/tab.css',__FILE__));
    wp_enqueue_style( 'web_scroll_top_image', plugins_url('css/image.css',__FILE__));
    //wp_enqueue_style( 'web_scroll_top_link', plugins_url('css/link.css',__FILE__));
  //  wp_enqueue_style( 'web_scroll_top_pill', plugins_url('css/pill.css',__FILE__));
}

add_action('wp_enqueue_scripts','Web_Scroll_Top_form_enqueue_script');
function Web_Scroll_Top_form_enqueue_script(){
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'web_scrollUp', plugins_url('js/web_scrollUp.js',__FILE__));
}

function web_scroll_top_function(){
?>
<script>

    jQuery(document).ready(function(){
        jQuery.scrollUp();
    });

</script>

<?php 
}
add_action('wp_footer','web_scroll_top_function');

// Plugin Customization Settings

add_action("customize_register", "web_scroll_up_customiza");

function web_scroll_up_customiza($wp_customize){

    $wp_customize->add_section('web_scroll_up',array(
      'title' => __('Web Scroll Top','web-scroll-to-top'),
      'description' => 'If you change to Web Scroll To Top Button',
    ));

    $wp_customize->add_setting('web_scroll_up_bg',array(
      'defult' => '#000000',
    ));

    $wp_customize->add_control('web_scroll_up_bg',array(
      'label' => 'Backgorund Color',
      'section' => 'web_scroll_up',
      'type'    => 'color',
    ));

}


// Customizaiton setting display settings

add_action("wp_head", "web_scroll_up_custom_display");

function web_scroll_up_custom_display(){
?>
<style>
/* Image style */
  #scrollUp {
    background-image: url("../images/top.png");   
    background-color: <?php print get_theme_mod("web_scroll_up_bg"); ?>;  /* Height of image */

}
</style>

<?php
}
