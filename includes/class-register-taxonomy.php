<?php
/**
 * @package PTC Shows
 * @version 1.0
 */

namespace PTC_Shows;

/**
 * Register the taxnomoy
 */

class Shows_Register_Taxonomy
{
    protected $ptc_shows = 'ptc_shows';
    protected $args;
    protected $labels;

/**
 * Add action to register the taxonomy
 */
    
    public function __construct() {
        add_action( 'init', array( $this, 'register_taxonomy' ) );
    }

    public function register_taxonomy() {
        
        $this->labels = array( 
            'name' => _x( 'Shows Categories', 'taxonomy general name' ),
            'singular_name' => _x( 'Shows category', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Shows categories' ),
            'popular_items' => __( 'Popular Shows categories' ),
            'all_items' => __( 'All Shows categories' ),
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => __( 'Edit Shows category' ), 
            'update_item' => __( 'Update Shows category' ),
            'add_new_item' => __( 'Add New Shows category' ),
            'new_item_name' => __( 'New Shows category Name' ),
            'separate_items_with_commas' => __( 'Separate Shows categories with commas' ),
            'add_or_remove_items' => __( 'Add or remove Shows categories' ),
            'choose_from_most_used' => __( 'Choose from the most used Shows categories' ),
            'menu_name' => __( 'Shows categories' )
        );
    
        register_taxonomy( 'Shows_categories','ptc_shows', array(
            'hierarchical' => false,
            'labels' => $this->labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'shows' ),
            'show_in_rest' => true,
            'exclude_from_search' => false
          ));
        
        register_taxonomy( $this->ptc_shows, $this->args );
    }
}


new Shows_Register_Taxonomy();