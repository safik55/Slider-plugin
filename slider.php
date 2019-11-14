<?php
 /*
  Plugin Name: Custom slider 
 */
 
 
 /**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        __( 'Custom Slider', 'textdomain' ),
        'Custom Slider',
        'manage_options',
        'custom_slider',
        'cutom_theme_option',
        '',
        60
    );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );


function cutom_theme_option()
{
	//echo plugin_dir_path( __FILE__ ).'slider_content.php';
	include_once(plugin_dir_path( __FILE__ ).'slider_content.php');
}
?>
