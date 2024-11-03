<?php 
  $settings = json_decode(get_option('scroll_to_top'),true);
?>
<style>

#scrollUp {
    background-image: url("<?php echo @$settings['button_icon_img']; ?>");
    bottom: 20px;
    right: 20px;
    width: 38px;    /* Width of image */
    height: 38px; 
    background-color: black;  /* Height of image */
    text-indent: -999999px;
    display: block;
}
</style>