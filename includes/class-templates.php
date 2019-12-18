<?php 

/**
 * @package PTC Events
 * @version 1.0
 */

/**
 * Apply templates
 */

namespace PTC_Shows;

class Templates
{
    protected $template_path;
    protected $theme_file;
    
    public function __construct() {
        add_filter( 'template_include', array( $this, 'ptc_templates' ) );
    }
    
    public function ptc_templates($original_template) {
        if ( is_tax( '' ) ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
                if ( $this->theme_file = locate_template( array ( 'taxonomy-ptc_shows.php' ) ) ) {
                        $this->template_path = $this->theme_file;
                    } else {
                        $this->template_path = plugin_dir_path( __FILE__ ) . '../templates/taxonomy-ptc_shows.php';
                    }
            }
        
           else if ( is_singular( 'ptc_shows' ) ) {
                if ( $this->theme_file = locate_template( array ( 'single-ptc_shows.php' ) ) ) {
                        $this->template_path = $this->theme_file;
                    } else {
                        $this->template_path = plugin_dir_path( __FILE__ ) . '../templates/single-ptc_shows.php';
                    }
            }


            else {
                $this->template_path = $original_template;
            }
           
            return $this->template_path;
    }
}


new Templates();