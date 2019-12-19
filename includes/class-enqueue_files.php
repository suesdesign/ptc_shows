<?php
/**
 * @package LB Portfolio
 * @version 1.0
 */

/**
 * Enqueue the CSS and JS
 */

namespace PTC_Shows;

class Enqueue_Files
{
    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'ptc_shows_css_styles' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'ptc_shows_js' ) );
    }

    public function ptc_shows_css_styles() {
        wp_enqueue_style( 'ptc_shows', plugin_dir_url( __FILE__ ) . '../assets/css/ptc_shows.css', array(),'','screen' );
    }

    public function ptc_shows_js() {
        wp_register_script('jquery-accessible-tabs', plugin_dir_url( __FILE__ ) . '../assets/js/jquery-accessible-tabs.js', array('jquery'), '', 1);
	    wp_enqueue_script('jquery-accessible-tabs' );
    }
}

new Enqueue_Files();