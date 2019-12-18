<?php
/**
 * @package LB Portfolio
 * @version 1.0
 */

/**
 * Register the custom post
 */

namespace PTC_Shows;

class Register_Posts
{
    protected $ptc_shows = 'ptc_shows';
    protected $args;
    protected $labels;

/**
 * Add action to register the post type and flush permalinks on plugin activation
 */
    
    public function __construct() {
        add_action( 'init', array( $this, 'register_post_type' ) );
        register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
        register_activation_hook( __FILE__, 'ptc_shows_flush_rewrites' );
    }

    public function register_post_type() {
        
        $this->labels = array( 
            'name'               => _x( 'Shows', 'ptc_shows' ),
            'singular name'      => _x( 'Shows', 'ptc_shows' ),
            'add_new'            => _x( 'Add New Show', 'ptc_shows' ),
            'add_new_item'       => __( 'Add New Show', 'ptc_shows' ),
            'edit_item'          => __( 'Edit Show', 'ptc_shows' ),
            'new_item'           => __( 'New Show', 'ptc_shows' ),
            'all_items'          => __( 'All Shows', 'ptc_shows' ),
            'view_item'          => __( 'View Show', 'ptc_shows' ),
            'search_items'       => __( 'Search Shows', 'ptc_shows' ),
            'not_found'          => __( 'No Shows', 'ptc_shows' ),
            'not_found_in_trash' => __( 'No Shows found in trash', 'ptc_shows' )
        );
    
        $this->args = array(
            'labels' => $this->labels,
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt' ),
            'show_in_rest' => true,
            'rewrite' => array( 'slug' => 'shows' )
        );
        
        register_post_type( $this->ptc_shows, $this->args );
    }

/**
 * Flush rewrite rules
 */

    function ptc_shows_flush_rewrites() {
        register_post_type();
        flush_rewrite_rules();
    }
}

new Register_Posts();