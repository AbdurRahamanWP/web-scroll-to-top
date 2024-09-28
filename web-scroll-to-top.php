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
 add_action('admin_enqueue_scripts','Web_Scroll_Top_form_enqueue_admin_styles');

 function Web_Scroll_Top_form_enqueue_styles(){
    wp_enqueue_style( 'web_scroll_top_tab', plugins_url('css/tab.css',__FILE__));
   // wp_enqueue_style( 'web_scroll_top_image', plugins_url('css/image.css',__FILE__));
   // wp_enqueue_style( 'web_scroll_top_link', plugins_url('css/link.css',__FILE__));
   // wp_enqueue_style( 'web_scroll_top_pill', plugins_url('css/pill.css',__FILE__));
    wp_enqueue_style( 'bootstrap', plugins_url('css/bootstrap.css',__FILE__));
    wp_enqueue_style( 'bootstrap-min', plugins_url('css/bootstrap.min.css',__FILE__));
}

function Web_Scroll_Top_form_enqueue_admin_styles(){
  wp_enqueue_style( 'bootstrap', plugins_url('css/bootstrap.css',__FILE__));
  wp_enqueue_style( 'bootstrap-min', plugins_url('css/bootstrap.min.css',__FILE__));
  wp_enqueue_style( 'admins', plugins_url('css/admin.css',__FILE__));
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

    $wp_customize->add_setting('web_scroll_up_height',array(
      'defult' => '40px',
    ));

    $wp_customize->add_setting('web_scroll_up_weight',array(
      'defult' => '40px',
    ));

    $wp_customize->add_setting('web_scroll_up_right',array(
      'defult' => '30',
    ));

    $wp_customize->add_setting('web_scroll_up_buttom',array(
      'defult' => '30',
    ));

    $wp_customize->add_setting('web_scroll_up_border_radius',array(
      'defult' => '10px',
    ));

    $wp_customize->add_control('web_scroll_up_bg',array(
      'label' => 'Backgorund Color',
      'section' => 'web_scroll_up',
      'type'    => 'color',
    ));

    $wp_customize->add_control('web_scroll_up_height',array(
      'label' => 'Height',
      'section' => 'web_scroll_up',
      'type'    => 'text',
      'description' => __( 'Add Scroll Button Height - Ex-30px' ),
    ));

    $wp_customize->add_control('web_scroll_up_weight',array(
      'label' => 'Weight',
      'section' => 'web_scroll_up',
      'type'    => 'text',
      'description' => __( 'Add Scroll Button Weight - Ex-30px' ),
    ));

    $wp_customize->add_control('web_scroll_up_right',array(
      'label' => 'Right',
      'section' => 'web_scroll_up',
      'type'    => 'text',
      'description' => __( 'Add Padding form Right Side - Ex-30px' ),
    ));

    $wp_customize->add_control('web_scroll_up_buttom',array(
      'label' => 'Buttom',
      'section' => 'web_scroll_up',
      'type'    => 'text',
      'description' => __( 'Add Padding form Buttom Side - Ex-30px' ),
    ));

    $wp_customize->add_control('web_scroll_up_border_radius',array(
      'label' => 'Border Radius',
      'section' => 'web_scroll_up',
      'type'    => 'text',
      'description' => __( 'Add Border Radius form Buttom - Ex-30px' ),
    ));

}


// Customizaiton setting display settings

add_action("wp_head", "web_scroll_up_custom_display");

function web_scroll_up_custom_display(){
?>
<style>
/* Image style */
  #scrollUp {
    background-color: <?php print get_theme_mod("web_scroll_up_bg"); ?>; 
    bottom: <?php print get_theme_mod("web_scroll_up_buttom"); ?>;
    right: <?php print get_theme_mod("web_scroll_up_right"); ?>;
    width: <?php print get_theme_mod("web_scroll_up_weight"); ?>; 
    height: <?php print get_theme_mod("web_scroll_up_height"); ?>; 
    border-radius: <?php print get_theme_mod("web_scroll_up_border_radius"); ?>; 
}
</style>
<?php
}

require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/menu.php';


