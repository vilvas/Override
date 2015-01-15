<div class="tabs section group">
   
   <div class="tab">
       <input type="radio" id="tab-1" name="tab-group-1" checked>
       <label for="tab-1">General</label>
       
       <div class="content">
           <h2>General</h2>
           <hr >
           <h3>Logo</h3>
           <!-- Image Thumbnail -->
           <img class="custom_media_image" src="<?php echo get_option('OR_logo'); ?>" style="max-width:100px; float:left; margin: 0px     10px 0px 0px; display:inline-block;" />
           <!-- Upload button and text field -->
           <input id="OR_logo" type="text" name="OR_logo" value="<?php echo get_option('OR_logo'); ?>">
           <button class="button media_upload">Upload</button>

          <div class="clear"></div>
          <!--- Admin_URL
           <h3>Admin URL</h3>
           <hr>
           <h4>http://example.com/<input placeholder="Enter anything" id="admin_url" type="text" name="admin_url" value="<?php echo get_option('admin_url'); ?>"></h4>
          -->

       </div> 
   </div>
    
   <div class="tab">
       <input type="radio" id="tab-2" name="tab-group-1">
       <label for="tab-2">Customizations</label>
       
       <div class="content">
           <h2>Customizations</h2>
           <hr >

          <h3>Background</h3>
          <hr >

           <div class="col span_3_of_8">
             <h4>Background Image</h4>
             <!-- Image Thumbnail -->
             <img class="custom_media_image" src="<?php echo get_option('background_image'); ?>" style="max-width:100px; float:left; margin: 0px     10px 0px 0px; display:inline-block;" />
             <!-- Upload button and text field -->
             <input id="background_image" type="text" name="background_image" value="<?php echo get_option('background_image'); ?>">
             <button class="button media_upload">Upload</button>
           </div>

           <div class="col span_2_of_8">
             <h4>Background Color</h4>
             <input name="background_color" id="background_color" type="text" value="<?php echo get_option('background_color'); ?>" class="color-picker-field" data-default-color="<?php echo get_option('background_color'); ?>" />
           </div>

           <div class="col span_2_of_8">
             <h4>Box Background</h4>
             <input name="box_background" id="box_background" type="text" value="<?php echo get_option('box_background'); ?>" class="color-picker-field" data-default-color="<?php echo get_option('box_background'); ?>" />
           </div>

          <div class="clear"></div>
          <div class="col span_4_of_8">
          <h3>Fonts</h3>
          <hr >

           <div class="col span_2_of_8">
             <h4>Label Color</h4>
             <input name="label_color" id="label_color" type="text" value="<?php echo get_option('label_color'); ?>" class="color-picker-field" data-default-color="<?php echo get_option('label_color'); ?>" />
           </div>

           <div class="col span_2_of_8">
             <h4>Link Color</h4>
             <input name="link_color" id="link_color" type="text" value="<?php echo get_option('link_color'); ?>" class="color-picker-field" data-default-color="<?php echo get_option('link_color'); ?>" />
           </div>
           </div>

          <div class="col span_4_of_8">
          <h3>Buttons</h3>
          <hr >

           <div class="col span_2_of_8">
             <h4>Color</h4>
             <input name="button_color" id="button_color" type="text" value="<?php echo get_option('button_color'); ?>" class="color-picker-field" data-default-color="<?php echo get_option('button_color'); ?>" />
           </div>

           <div class="col span_2_of_8">
             <h4>On Hover Color</h4>
             <input name="button_hover" id="button_hover" type="text" value="<?php echo get_option('button_hover'); ?>" class="color-picker-field" data-default-color="<?php echo get_option('button_hover'); ?>" />
           </div>
           </div>

       </div> 
   </div>
    
   <div class="tab">
       <input type="radio" id="tab-3" name="tab-group-1">
       <label for="tab-3">Custom CSS/JS</label>
       
       <div class="content">
           <h2>Custom CSS/JS</h2>
           <hr >
           <h3>CSS</h3>
           <p>Enter your CSS class the same format you would write in your .CSS File.</p>
           <textarea id="override_custom_CSS" name="override_custom_CSS"><?php echo esc_textarea(get_option('override_custom_CSS')); ?></textarea>

           <h3>JS</h3>
           <p>Enter your jQuery/Javascript the same format you would write in your .JS File.</p>
           <textarea id="override_custom_JS" name="override_custom_JS"><?php echo esc_textarea(get_option('override_custom_JS')); ?></textarea>

       </div> 
   </div>



</div>

<script type="text/javascript">

/*==========================================
** Media Uploader 3.5+
============================================*/

jQuery(document).ready(function($){

$('.media_upload').click(function() {

        var send_attachment_bkp = wp.media.editor.send.attachment;
        var button = $(this);

        wp.media.editor.send.attachment = function(props, attachment) {

            $(button).prev().prev().attr('src', attachment.url);
            $(button).prev().val(attachment.url);

            wp.media.editor.send.attachment = send_attachment_bkp;
        }

        wp.media.editor.open(button);

        return false;       
    });

});
</script>