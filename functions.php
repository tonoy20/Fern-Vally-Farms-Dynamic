<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS()
{
   wp_enqueue_style('normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css");
}
add_action('wp_enqueue_scripts', 'add_normalize_CSS');


function add_Main_Nav()
{
   register_nav_menu('header-menu', __('Header Menu'));

   register_nav_menu('side-bar', __('Side Bar'));
}
// Hook to the init action hook, run our navigation menu function
add_action('init', 'add_Main_Nav');


add_filter('nav_menu_css_class', function ($classes) {
   $classes[] = 'list-inline-item';
   return $classes;
}, 10, 1);


// header logo 
add_theme_support('custom-header');


// add_theme_support('post-thumbnails');
// add_image_size( 'category-thumb', 700, 500 , true);

// add_theme_support( 'post-thumbnails' );
// if (function_exists('add_image_size')) {
//    add_image_size( 'category-thumb', 700, 500 , true);
// }
// add_image_size( 'blog-thumb', 250, 250 , true);

// global $_wp_additional_image_sizes;
// foreach ( $_wp_additional_image_sizes as $name => $image_size ){
//     update_option( $name."_size_w", $image_size['width'] );
//     update_option( $name."_size_h", $image_size['height'] );
//     update_option( $name."_crop", $image_size['crop'] );
// }

// add_filter( 'intermediate_image_sizes', 'regenerate_custom_image_sizes' );
// function regenerate_custom_image_sizes( $sizes ){
//     global $_wp_additional_image_sizes;
//     foreach ( $_wp_additional_image_sizes as $name => $size ){
//         $sizes[] = $name;
//     }
//     return $sizes;
// }

add_theme_support( 'post-thumbnails' );
// add_image_size('category-thumb', 700, 500, true);
// add_image_size('blog-thumb', 250, 250, true);

function wpse_setup_theme()
{
   add_theme_support('post-thumbnails');
   add_image_size('category-thumb', 700, 500, true);
   add_image_size('blog-thumb', 250, 250, true);
}

add_action('after_setup_theme', 'wpse_setup_theme');



// if ( function_exists( 'add_theme_support' ) ) { 
//    add_theme_support('post-thumbnails');
//    add_image_size( 'category-thumb', 700, 500, true ); 
// }


if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
       'page_title'    => 'Header footer Settings',
       'menu_title'    => 'header footer',
       'menu_slug'     => 'header-footer-settings',
       'capability'    => 'edit_posts',
       'redirect'      => false
   ));

}