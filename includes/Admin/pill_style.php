<?php 
  $settings = json_decode(get_option('scroll_to_top'),true);
?>
<style>
/* Pill style */
#scrollUp {
    bottom: <?php echo $settings['padding_buttom']; ?>;
    right: <?php echo $settings['padding_right']; ?>;
    background-color: <?php echo $settings['background_color']; ?>;
    color: <?php echo $settings['text_color']; ?>;
    font-size: <?php echo $settings['font_size']; ?>;
    font-family: sans-serif;
    text-decoration: none;
    opacity: .9;
    padding: <?php echo $settings['padding_all']; ?>;
    -webkit-border-radius: <?php echo $settings['border_Radius']; ?>;
    -moz-border-radius: <?php echo $settings['border_Radius']; ?>;
    border-radius: <?php echo $settings['border_Radius']; ?>;
    -webkit-transition: background 200ms linear;
    -moz-transition: background 200ms linear;
    -o-transition: background 200ms linear;
    transition: background 200ms linear;
    -webkit-backface-visibility: hidden;
}

#scrollUp:hover {
    background-color: <?php echo $settings['background_color']; ?>;
}

</style>