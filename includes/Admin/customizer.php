<?php 
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
