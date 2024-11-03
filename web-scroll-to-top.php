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


  $settings = json_decode(get_option('scroll_to_top'),true);
  @$scroll_top_type = $settings['scroll_top_type'];

  if($scroll_top_type =='tab'){
    require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/tab_style.php';
  }
  if($scroll_top_type =='images'){
    require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/images_style.php';
  }
  if($scroll_top_type =='link'){
    require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/link_style.php';
  }
  if($scroll_top_type =='pill'){
    require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/pill_style.php';
  }
  if($scroll_top_type =='customizer'){
    require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/customizer.php';
  }
  
}

function Web_Scroll_Top_form_enqueue_admin_styles(){
  wp_enqueue_style( 'bootstrap', plugins_url('css/bootstrap.css',__FILE__));
  wp_enqueue_style( 'bootstrap-min', plugins_url('css/bootstrap.min.css',__FILE__));
  wp_enqueue_style( 'admins', plugins_url('css/admin.css',__FILE__));
  wp_enqueue_script( 'custom_js', plugins_url('js/custom.js',__FILE__));
  wp_enqueue_media();
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

// Add Menu Options
require_once plugin_dir_path( __FILE__ ) . 'includes/Admin/menu.php';


