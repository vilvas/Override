<?php 
/**
 * Plugin Name: Override
 * Plugin URI: http://preview.vilvas.com/override/
 * Description: Override allows you to customize your own WordPress admin login page, with modernized and security responsibilities features.
 * Version: 1.0
 * Author: Vilvas, Inc.
 * Author URI: http://www.vilvas.com
 * License: http://codecanyon.net/licenses/standard?license=regular
 */

defined('ABSPATH') or die("No script kiddies please!");

/*==================================================
** Plugin require Initialization File to proceed
====================================================*/

require ( plugin_dir_path( __FILE__ ) . 'library/initialization.php' );


/*==================================================
** Front End/Screen
====================================================*/

require ( plugin_dir_path( __FILE__ ) . 'library/screen.php' );