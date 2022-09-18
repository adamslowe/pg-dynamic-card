<?php
/**
 * Plugin Name:       biography card
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Crazy cool WordPress Blocks
 * Version:           1.0.1
 * Requires at least: 5.5
 * Requires PHP:      5.3
 * Author:            Adam Lowe
 * Author URI:        https://peakperformancedigital.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       pg_biocard
 * Domain Path:       /languages
*/

 

if ( ! function_exists( 'pg_biocard_plugin_base_url' ) ) :
 
function pg_biocard_plugin_base_url() {
    global $pg_biocard_plugin_base_url_value;
    if(empty($pg_biocard_plugin_base_url_value)) {
        $pg_biocard_plugin_base_url_value = plugin_dir_url( __FILE__ );
    }
    return $pg_biocard_plugin_base_url_value;
}

endif;

if ( ! function_exists( 'pg_biocard_plugin_base_path' ) ) :
 
function pg_biocard_plugin_base_path() {
    global $pg_biocard_plugin_base_path_value;
    if(empty($pg_biocard_plugin_base_path_value)) {
        $pg_biocard_plugin_base_path_value = plugin_dir_path(  __FILE__ );
    }
    return $pg_biocard_plugin_base_path_value;
}

endif;
 
if ( ! function_exists( 'pg_biocard_setup' ) ) :

function pg_biocard_setup() {

    pg_biocard_plugin_base_url();
    /*
     * Make the plugin available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_plugin_textdomain( 'pg_biocard', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    /*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
    /*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
}
endif; // pg_biocard_setup

add_action( 'after_setup_theme', 'pg_biocard_setup' );


if ( ! function_exists( 'pg_biocard_init' ) ) :

function pg_biocard_init() {

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('bio_posttype', array(
        'labels' => 
            array(
                'name' => __( 'Employees', 'pg_biocard' ),
                'singular_name' => __( 'Employee', 'pg_biocard' )
            ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes' ),
        'has_archive' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 20
    ));

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    register_taxonomy('bio-jobtitle', 'bio_posttype', array(
        'labels' => 
            array(
                'name' => __( 'Job Titles', 'pg_biocard' ),
                'singular_name' => __( 'Job Title', 'pg_biocard' )
            ),
        'show_in_rest' => true,
        'hierarchical' => true
    ));

    /* Pinegrow generated Taxonomies End */

}
endif; // pg_biocard_setup

add_action( 'init', 'pg_biocard_init' );


if ( ! function_exists( 'pg_biocard_custom_image_sizes_names' ) ) :

function pg_biocard_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'pg_biocard_custom_image_sizes_names' );
endif;// pg_biocard_custom_image_sizes_names


if ( ! function_exists( 'pg_biocard_widgets_init' ) ) :

function pg_biocard_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'pg_biocard_widgets_init' );
endif;// pg_biocard_widgets_init



if ( ! function_exists( 'pg_biocard_customize_register' ) ) :

function pg_biocard_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'pg_biocard_customize_register' );
endif;// pg_biocard_customize_register


if ( ! function_exists( 'pg_biocard_enqueue_scripts' ) ) :
    function pg_biocard_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pg_biocard_enqueue_scripts' );
endif;

if ( ! function_exists( 'pg_biocard_pgwp_sanitize_placeholder' ) ) :
    function pg_biocard_pgwp_sanitize_placeholder($input) { return $input; }
endif;

    /*
     * Resource files included by Pinegrow.
     */
    /* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_pg_blocks_helpers.php";

    /* Pinegrow generated Include Resources End */

/* Creating Editor Blocks with Pinegrow */

function pg_biocard_blocks_init() {
    // Register blocks. Don't edit anything between the following comments.
    /* Pinegrow generated Register Pinegrow Blocks Begin */
    require_once 'blocks/pg-dumbblock/pg-dumbblock_register.php';
    require_once 'blocks/pg-smartinner/pg-smartinner_register.php';
    require_once 'blocks/pg-smartblock/pg-smartblock_register.php';
    require_once 'blocks/pg-dynamic-block/pg-dynamic-block_register.php';

    /* Pinegrow generated Register Pinegrow Blocks End */
}
add_action('init', 'pg_biocard_blocks_init');

/* End of creating Editor Blocks with Pinegrow */


/* Register Blocks Categories */

function pg_biocard_register_blocks_categories( $categories ) {

    // Don't edit anything between the following comments.
    /* Pinegrow generated Register Blocks Category Begin */

$categories = array_merge( $categories, array( array(
        'slug' => 'pg_blocks',
        'title' => __( 'Pinegrow Blocks', 'pg_biocard' )
    ) ) );

    /* Pinegrow generated Register Blocks Category End */
    
    return $categories;
}
add_action( version_compare('5.8', get_bloginfo('version'), '<=' ) ? 'block_categories_all' : 'block_categories', 'pg_biocard_register_blocks_categories');

/* End of registering Blocks Categories */

?>