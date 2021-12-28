<?php

if ( ! function_exists( 'SayoOnishi_setup' ) ) :

   function SayoOnishi_setup() {
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     register_nav_menus( array(
        'menu-main'     =>    'Main Menu', 
     ) );
   }

endif;

add_action('after_setup_theme', 'SayoOnishi_setup');

/* Queue stylesheet and Google fonts */
function SayoOnishi_scripts_styles(){
   wp_enqueue_style('SayoOnishi_style', get_stylesheet_uri());
   wp_enqueue_style('SayoOnishi_style_googlefonts', 'https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comfortaa:wght@400;700&family=Poiret+One', array(), null);
   wp_enqueue_style('SayoOnishi_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
   wp_enqueue_script('SayoOnishi_script_navigation_js', get_template_directory_uri() . '/js/clipboard.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'SayoOnishi_scripts_styles');
