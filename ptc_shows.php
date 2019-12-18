<?php
/**
 * @package PTC Shows
 * @version 1.0
 */

 /*
Plugin Name: PTC Shows
Plugin URI: http://suesdesign.co.uk/
Description: People's Theatre Company show listings
Author: Sue Johnson
Version: 1.0
Author URI: http://suesdesign.co.uk/
*/

/**
 * Exit if this file is accessed directly
 */

namespace PTC_Shows;

if( ! defined('ABSPATH') ) {
    exit;
}



/**
 * Required files
 */

require plugin_dir_path( __FILE__ ) . 'includes/class-register_posts.php';
require plugin_dir_path( __FILE__ ) . 'includes/class-templates.php';
require plugin_dir_path( __FILE__ ) . 'includes/class-register-taxonomy.php';