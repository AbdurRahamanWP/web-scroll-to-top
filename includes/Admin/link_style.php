<?php 
  $settings = json_decode(get_option('scroll_to_top'),true);
?>
<style>

#scrollUp {
    bottom: <?php echo $settings['padding_buttom']; ?>;
    right: <?php echo $settings['padding_right']; ?>;
    font-size: <?php echo $settings['font_size']; ?>;
    color: <?php echo $settings['text_color']; ?>;
}
</style>