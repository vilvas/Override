<?php  function login_form(){   if ( !is_user_logged_in() ) { // Display WordPress login form:?>
<?php $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;   ?>
<style type="text/css">

    body {
        background: none repeat scroll 0% 0% <?php echo get_option('background_color'); ?> !important;
        background-image: url(<?php echo get_option('background_image'); ?>) !important;
        background-size: cover !important;
        color: <?php echo get_option('label_color'); ?> !important;
    }
    h1, h2, h3, h4, h5, h6 {
       color: <?php echo get_option('label_color'); ?> !important;
       font-weight: 100 !important;
   }

    a {
        color: <?php echo get_option('link_color'); ?> !important;
    }
    
    .login form {
        background: none repeat scroll 0% 0% <?php echo get_option('box_background'); ?> !important;
    }

    .reveal-modal {
        background-color: <?php echo get_option('box_background'); ?> !important;
        border-radius: 0px !important;
        border: 0px !important;
    }

    .login label {
        color: <?php echo get_option('label_color'); ?> !important;
    }

    .wp-core-ui .button-primary {
        background: none repeat scroll 0% 0% <?php echo get_option('button_color'); ?> !important;
    }
    .wp-core-ui .button-primary:hover {
        background: none repeat scroll 0% 0% <?php echo get_option('button_hover'); ?> !important;
    }

     <?php echo get_option('override_custom_CSS'); ?>

</style>

<div class="row">
    <div class="columns medium-7 admin-logo medium-centered">
        <img src="<?php echo get_option('OR_logo'); ?>">
    </div>
</div>

<script type="text/javascript">
    <?php echo get_option('override_custom_JS'); ?>
</script>


<?php  } }add_action('login_enqueue_scripts', 'login_form'); ?>
