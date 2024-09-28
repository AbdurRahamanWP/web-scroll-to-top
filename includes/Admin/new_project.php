<div class="container newProject">
	        <?php 
		    	if( isset( $_GET['inserted'] )){ ?>
			<h4 class='successfull'>Data Updated Successfully</h4>
			<?php } ?>
            
			<h2> Scroll To Top Settings</h2>
            <form class="scroll_top_form" id="scroll_top_form" action="options.php" method="post">
                <!-- <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Select Type</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="scroll_top_type" name='scroll_top_type'>
                            <option value='tab'>Tab Format</option>
                            <option value='images'>Images Format</option>
                            <option value='link'>Link Format</option>
                            <option value='pill'>Pill Format</option>
                        </select>
                    </div>
                </div> -->
            
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Button Height</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="button_height" name="button_height" value="<?php print get_option('button_height'); ?>" placeholder="Enter Button Height. Ex - 10px">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Button Width</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="button_width" name="button_width" value="<?php print get_option('button_width'); ?>" placeholder="Enter Button Width. Ex - 10px">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Padding Right</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="padding_right" name="padding_right" value="<?php print get_option('padding_right'); ?>" placeholder="Enter Padding Right. Ex - 10px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Padding Buttom</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="padding_buttom" name="padding_buttom" value="<?php print get_option('padding_buttom'); ?>" placeholder="Enter Buttom Padding. Ex - 10px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Border Radius</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="border_Radius" name="border_Radius" value="<?php print get_option('border_Radius'); ?>" placeholder="Enter Border Radius. Ex - 10px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Backgorund Color</label>
                    <div class="col-sm-2">
                        <input type="color" id="background_color" name="background_color" value="<?php print get_option('background_color'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Button Icon/Images</label>
                    <div class="col-sm-2">
                        <input type="file" id="button_icon_img" name="button_icon_img" value="<?php print get_option('button_icon_img'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Text Color</label>
                    <div class="col-sm-2">
                        <input type="color" id="text_color" name="text_color" value="<?php print get_option('text_color'); ?>">
                    </div>
                </div>

                
                <div class="form-group row">
                    <div class="col-sm-8">
                    <?php wp_nonce_field('update-options'); ?>
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="page_options" value="button_height">
                    <input type="hidden" name="page_options" value="button_width">
                    <input type="hidden" name="page_options" value="padding_right">
                    <input type="hidden" name="page_options" value="padding_buttom">
                    <input type="hidden" name="page_options" value="border_Radius">
                    <input type="hidden" name="page_options" value="background_color">
                    <input type="hidden" name="page_options" value="button_icon_img">
                    <input type="hidden" name="page_options" value="text_color">
                    <button type="submit" name="submit" id='submit' class="btn btn-primary">Save Information</button>
                    </div>
                </div>
            </form>
</div>