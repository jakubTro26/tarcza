<?php
/*
Plugin Name: Image 3D Carousel
Plugin URI: http://wordpress.org/plugins/image-3d/
Description: A nice 3d Image Photogallery, PhotoShow case
Author: Nayeem Hyder
Version: 1.0
Author URI: http://nayeemriddhi.info/
*/

//For Metabox
include_once( plugin_dir_path( __FILE__ ) . '/library/metabox/metabox.php' );

include_once( plugin_dir_path( __FILE__ ) . '/library/metabox/cmb2-tabs/include-main.php' );
include_once( plugin_dir_path( __FILE__ ) . '/library/metabox/cmb2-tabs/functions.php' );

// For Plugin Functions
include_once( plugin_dir_path( __FILE__ ) . '/functions.php' );

// Frontend Shortcode Script
include_once( plugin_dir_path( __FILE__ ) . '/image3d-shortcode.php' );


//Load Js file for plugin
function image_3d_plugin_main_js() {

     wp_enqueue_script( 'image-3d-customjs', plugins_url( '/assets/js/image-3d-custom.js', __FILE__ ), array('jquery'), time(), true);

}  add_action('init','image_3d_plugin_main_js');


//Load Css file for plugin
function image_3d_plugin_main_css() {
   
    wp_enqueue_style( 'image-3d-css', plugins_url( '/assets/css/style.css', __FILE__ ));
    
} add_action('init','image_3d_plugin_main_css');







