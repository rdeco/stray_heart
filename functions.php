<?php
	
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/imgs");

add_theme_support('post-thumbnails');

/**
 * Enqueue stylesheets
 * --------------------
 */  
   
function strayHeart_style() {
	wp_enqueue_style ('main_css', get_template_directory_uri().'/css/main.css' );
	wp_enqueue_style ('bootstrap_css', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style ('bootstrap_theme_css', get_template_directory_uri().'/css/bootstrap-theme.css' );
	wp_enqueue_style ('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style ('googlefonts_css', 'http://fonts.googleapis.com/css?family=Raleway|Playfair+Display|Lobster' );		
}
add_action('wp_enqueue_scripts', 'strayHeart_style');   

/**
 * Enqueue scripts 
 * ----------------
 */   
    
function strayHeart_scripts() {
    wp_enqueue_script('strayHeart-bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), true, false);
    wp_enqueue_script('add-this', "//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-508cf07b372297e2", array(), true, false);
    wp_enqueue_script('classie-js', get_template_directory_uri().'/js/classie.js',  array(),  true, false);
    wp_enqueue_script('modernizr-js', get_template_directory_uri().'/js/modernizr.custom.js',  array(),  true, false);
    wp_enqueue_script('boxlayout-js', get_template_directory_uri().'/js/boxlayout.js', array('jquery'), true, true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array('boxlayout-js'), true, true);
   
 
}
add_action('wp_enqueue_scripts', 'strayHeart_scripts');


/**
 * End enqueue scripts & stylesheets
 * -----------------------------
 */

?>
