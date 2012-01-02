<?php

// Definitions

define( 'NT_ROOT', get_bloginfo( 'home_url' ) );
define( 'NT_THEME', get_bloginfo( 'template_directory' ) );

// Includes

// include_once( NT_THEME . '/WPThumb/wpthumb.php' );
// include_once( NT_THEME . '/cpt-bucketlist.php' );

// WP Basics

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, true ); 
add_image_size( 'index-thumb', 100, 100, true );
add_theme_support( 'automatic-feed-links' );
?>