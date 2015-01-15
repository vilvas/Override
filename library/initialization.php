<?php

/*====================================================================================
 * Plugin Name: Override
 * Plugin URI: http://preview.vilvas.com/override/
 * Description: Override allows you to customize your own WordPress admin login page, 
 with modernized and security responsibilities features.
 * Version: 1.0
 * Author: Vilvas, Inc.
 * Author URI: http://www.vilvas.com
 * License: http://codecanyon.net/licenses/standard?license=regular
======================================================================================*/

/*==========================================
** Menu Init
============================================*/

/*Extending WordPress Setting Menu*/
function register_override() {
	add_submenu_page( 'options-general.php', 'Override', 'Override', 'manage_options', 'overridemenu', 'Overide_callback' );
}add_action('admin_menu', 'register_override');

/*Init Override Setting Page*/
function Overide_callback() {
	require ( plugin_dir_path( __FILE__ ) . '../admin/admin_screen.php' );
}

/*==========================================
** Front Style & Scripts Init
============================================*/

/*Registering Scripts and Styles*/
function register_stylesheets() {

	/*Registering Styles*/
   	wp_register_style( 'override-styles', plugins_url('../css/override.css', __FILE__) );
   	wp_register_style( 'foundation-styles', plugins_url('../css/foundation.min.css', __FILE__) );
   	/*Registering Scripts*/
  	wp_register_script( 'overide-scripts', plugins_url('../js/override.js', __FILE__));
  	wp_register_script( 'foundation-scripts', plugins_url('../js/foundation.min.js', __FILE__));

}add_action( 'login_enqueue_scripts', 'register_stylesheets' );

/*Deploying Scripts and Styles for login page*/
function login_stylesheets() {

    /*Load jQuery on admin page */
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
    wp_enqueue_script('jquery');

	  /*Deploying  Scripts*/
   	wp_enqueue_style( 'override-styles' );
   	wp_enqueue_style( 'foundation-styles' );

   	/*Deploying  Scripts*/
   	wp_enqueue_script( 'overide-scripts');
   	wp_enqueue_script( 'foundation-scripts');

}add_action( 'login_enqueue_scripts', 'login_stylesheets' );


/*==========================================
** Overwrite Native Login page Settings
============================================*/

function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            display: none;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


/*==========================================
** Settings Fields and Data Init
============================================*/

function override_settings_page(){
  require ( plugin_dir_path( __FILE__ ) . '../admin/settings.php' );
}

/*Dummy Setting Field*/
function override_settings_dummy(){}



function override_settings_fields(){

    /*Add Settings Section*/
    add_settings_section('override_settings', '<h1>Override Settings</h1>', 'override_settings_page', 'overridemenu' );
    
    /*Add Settings Fields*/

    //General/Security Fields
    add_settings_field( 'OR_logo', 'Logo', 'override_settings_page', 'overridemenu');
    add_settings_field( 'admin_url', 'Logo', 'override_settings_page', 'overridemenu');

    //Customization Fields
    add_settings_field( 'background_color', 'Background Color', 'override_settings_dummy', 'overridemenu');
    add_settings_field( 'background_image', 'Background Image', 'override_settings_dummy', 'overridemenu');
    add_settings_field( 'box_background', 'Box Background', 'override_settings_dummy', 'overridemenu');
    add_settings_field( 'label_color', 'Label Color', 'override_settings_dummy', 'overridemenu');
    add_settings_field( 'link_color', 'Link Color', 'override_settings_dummy', 'overridemenu');
    add_settings_field( 'button_color', 'Button Color', 'override_settings_dummy', 'overridemenu');
    add_settings_field( 'button_hover', 'Button Hover', 'override_settings_dummy', 'overridemenu');

    //Custom CSS/JS Textarea
    add_settings_field( 'override_custom_CSS', 'Custom Style', 'override_settings_dummy', 'overridemenu');
    add_settings_field( 'override_custom_JS', 'Custom Javascript', 'override_settings_dummy', 'overridemenu');

    /*Register Settings Fields*/
    //General/Security Fields
    register_setting( 'override_settings', 'OR_logo');
    register_setting( 'override_settings', 'admin_url');

    //Customization Fields
    register_setting( 'override_settings', 'background_color');
    register_setting( 'override_settings', 'background_image');
    register_setting( 'override_settings', 'box_background');
    register_setting( 'override_settings', 'label_color');
    register_setting( 'override_settings', 'link_color');
    register_setting( 'override_settings', 'button_color');
    register_setting( 'override_settings', 'button_hover');

    //Custom CSS/JS Textarea
    register_setting( 'override_settings', 'override_custom_CSS');
    register_setting( 'override_settings', 'override_custom_JS');


} add_action('admin_init', 'override_settings_fields');

/*==========================================
** Enqueue Media Uploader WordPress 3.5+
============================================*/

function enqueue_media(){

    /*Activate Media Uploader only on Override Plugin*/
    if($_REQUEST['page']=='overridemenu')
    wp_enqueue_media();

}add_action( 'admin_enqueue_scripts', 'enqueue_media' );

/*==========================================
** Enqueue WordPress Color Picker 3.5+
============================================*/

add_action( 'admin_enqueue_scripts', 'enqueue_color_picker' );
function enqueue_color_picker( $hook_suffix ) {

   /*Activate Color Picker only on Override Plugin*/
    if($_REQUEST['page']=='overridemenu')
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker-script', plugins_url('js/script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}






