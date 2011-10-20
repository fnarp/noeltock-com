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

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/base.css">
    <link rel="stylesheet/less" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/css/nt_styles.less">

    <!-- js -->
    
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/modernizr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/kerning.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/less-1.1.3.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.backstretch.min.js"></script>
  
    <!-- pingback -->
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

</head>

<!--[if lt IE 7 ]> <body <?php body_class('ie6'); ?>> <![endif]-->
<!--[if IE 7 ]>    <body <?php body_class('ie7'); ?>> <![endif]-->
<!--[if IE 8 ]>    <body <?php body_class('ie8'); ?>> <![endif]-->
<!--[if IE 9 ]>    <body <?php body_class('ie9'); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body <?php body_class('ie6'); ?>> <!--<![endif]-->

  <div class="container">
    <div class="row">
            <header role="banner" class="twelvecol">
                <div class="wrapper">
                    <div class="logo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png" />noel tock</a></div>
                </div>
            </header>
    </div>