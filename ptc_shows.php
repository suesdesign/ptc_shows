<?php
/**
 * @package PTC Shows
 * @version 1.0
 */

 /*
Plugin Name: PTC Shows
Plugin URI: https://suesdesign.co.uk/
Description: People's Theatre Company show listings
Author: Sue Johnson
Version: 1.0
Author URI: https://suesdesign.co.uk/
*/



namespace PTC_Shows;

/**
 * Exit if this file is accessed directly
 */

if( ! defined('ABSPATH') ) {
    exit;
}



/**
 * Required files
 */

require plugin_dir_path( __FILE__ ) . 'includes/class-register_posts.php';
require plugin_dir_path( __FILE__ ) . 'includes/class-templates.php';
require plugin_dir_path( __FILE__ ) . 'includes/class-shows_register_taxonomy.php';
require plugin_dir_path( __FILE__ ) . 'includes/class-enqueue_files.php';