<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

define( 'NT_THEME', get_bloginfo( 'template_directory' ) );

// require_once( NT_THEME . '/WPThumb/wpthumb.php' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, true ); 

automatic_feed_links();

// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
}

// social media

function nt_socialmedia() {
    ?>
    <div class="socialmedia-wrapper">
        <div class="socialmedia">
            <g:plusone size="tall"></g:plusone>
            <div></div>
            <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
        </div>
    </div>
    <?php
}