<?php 
  $settings = json_decode(get_option('scroll_to_top'),true);
?>
<style>

#scrollUp {
    right: <?php echo $settings['padding_right']; ?>;
    bottom: <?php echo $settings['padding_buttom']; ?>;
    width: <?php echo $settings['button_width']; ?>;
    height: <?php echo $settings['height']; ?>;
    padding: <?php echo $settings['padding_all']; ?>;
    font: <?php echo $settings['font_size']; ?>/20px sans-serif;
    text-align: center;
    border-radius:<?php echo $settings['border_Radius']; ?>;
    text-decoration: none;
    text-shadow: 0 1px 0 #fff;
    color: <?php echo $settings['text_color']; ?>;
    -webkit-box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
    background-color: <?php echo $settings['background_color']; ?> !important;   
    background-repeat: repeat-x;
    -webkit-transition: margin-bottom 150ms linear;
    -moz-transition: margin-bottom 150ms linear;
    -o-transition: margin-bottom 150ms linear;
    transition: margin-bottom 150ms linear;
}

#scrollUp:hover {
    margin-bottom: 0;
}

</style>