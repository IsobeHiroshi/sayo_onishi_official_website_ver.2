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
