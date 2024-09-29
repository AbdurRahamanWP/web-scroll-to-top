<div class="container newProject">

        <?php
        
        if(isset($_POST['submit'])){
            $data = [
                'scroll_top_type'  => isset($_POST['scroll_top_type']) ? $_POST['scroll_top_type'] : '',
                'height' => isset($_POST['button_height']) ? $_POST['button_height'] : '',
                'button_width' => isset($_POST['button_width']) ? $_POST['button_width'] : '',
                'padding_right' => isset($_POST['padding_right']) ? $_POST['padding_right'] : '',
                'padding_buttom' => isset($_POST['padding_buttom']) ? $_POST['padding_buttom'] : '',
                'border_Radius' => isset($_POST['border_Radius']) ? $_POST['border_Radius'] : '',
                'background_color' => isset($_POST['background_color']) ? $_POST['background_color'] : '',
                'button_icon_img' => isset($_POST['button_icon_img']) ? $_POST['button_icon_img'] : '',
                'text_color' => isset($_POST['text_color']) ? $_POST['text_color'] : ''
            ];
            update_option('scroll_to_top', json_encode($data));
        }  

        
        ?>

	        <?php 
		    if( isset($data)){ ?>
			<h4 class='successfull'>Data Updated Successfully</h4>
			<?php }
             $settings = json_decode(get_option('scroll_to_top'),true);
            ?>
            
			<h2> Scroll To Top Settings</h2>
            <form class="scroll_top_form" id="scroll_top_form" action="" method="post">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Select Type</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="scroll_top_type" name='scroll_top_type'>
                            <option value='<?php echo $settings['scroll_top_type']; ?>'><?php echo $settings['scroll_top_type']; ?></option>
                            <option value='tab'>Tab Format</option>
                            <option value='images'>Images Format</option>
                            <option value='link'>Link Format</option>
                            <option value='pill'>Pill Format</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Button Height</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="button_height" name="button_height" value="<?php echo $settings['height']; ?>" placeholder="Enter Button Height. Ex - 10px">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Button Width</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="button_width" name="button_width" value="<?php echo $settings['button_width']; ?>" placeholder="Enter Button Width. Ex - 10px">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Padding Right</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="padding_right" name="padding_right" value="<?php echo $settings['padding_right']; ?>" placeholder="Enter Padding Right. Ex - 10px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Padding Buttom</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="padding_buttom" name="padding_buttom" value="<?php echo $settings['padding_buttom']; ?>" placeholder="Enter Buttom Padding. Ex - 10px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Border Radius</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="border_Radius" name="border_Radius" value="<?php echo $settings['border_Radius']; ?>" placeholder="Enter Border Radius. Ex - 10px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Backgorund Color</label>
                    <div class="col-sm-2">
                        <input type="color" id="background_color" name="background_color" value="<?php echo $settings['background_color']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Button Icon/Images</label>
                    <div class="col-sm-2">
                        <input type="file" id="button_icon_img" name="button_icon_img" value="<?php echo $settings['button_icon_img']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Text Color</label>
                    <div class="col-sm-2">
                        <input type="color" id="text_color" name="text_color" value="<?php echo $settings['text_color']; ?>">
                    </div>
                </div>

                
                <div class="form-group row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-8">
                    <?php wp_nonce_field('update-options'); ?>
                    <button type="submit" name="submit" id='submit' class="btn btn-primary">Save Information</button>
                    </div>
                </div>
            </form>

</div>