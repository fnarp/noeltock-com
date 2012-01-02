<?php
/**
 * @package WordPress
 * @subpackage ntv5
 */
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
    
    <title><?php wp_title(''); ?></title>  

    <!-- meta -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

    
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- css -->

    <link rel="stylesheet" href="<?php echo NT_THEME; ?>/css/base.css">
    <link rel="stylesheet/less" type="text/css" href="<?php echo NT_THEME; ?>/css/nt_styles.less">

    <!-- js -->
    
    <script src="<?php echo NT_THEME; ?>/js/modernizr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="<?php echo NT_THEME; ?>/js/kerning.min.js"></script>
    <script src="<?php echo NT_THEME; ?>/js/less-1.1.3.min.js"></script>

  
    <!-- pingback -->
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- wp head -->
    
    <?php wp_head(); ?>
    
    <script>
        jQuery(document).ready(function(){
                jQuery(".social-icon").hover(
                function() {
                        jQuery(this).css("background").stop().animate({"opacity": "0"}, "slow");
                },
                function() {
                        jQuery(this).css("background").stop().animate({"opacity": "1"}, "slow");
                });
        });
    </script>

</head>

<!--[if lt IE 7 ]> <body <?php body_class('ie6'); ?>> <![endif]-->
<!--[if IE 7 ]>    <body <?php body_class('ie7'); ?>> <![endif]-->
<!--[if IE 8 ]>    <body <?php body_class('ie8'); ?>> <![endif]-->
<!--[if IE 9 ]>    <body <?php body_class('ie9'); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body <?php body_class('ie6'); ?>> <!--<![endif]-->

    <nav id="topbar">
        <div class="row">
        <div id="logo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php echo NT_THEME; ?>/images/logo.png" alt="Noel Tock" /></a></div>
        <div id="navigation">
            <div class="nav-link"><a href="<?php echo get_option('home'); ?>">Home</a></div>
            <div class="nav-link"><a href="<?php echo get_option('home'); ?>/blog">Blog</a></div>
        </div>
        </div>
    </nav>  
    
  <div class="container" id="content">
