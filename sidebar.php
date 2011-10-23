<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<aside id="sidebar">
    
    <section id="profile">
        <p>hi, my name is noel tock and I blog about design, wordpress and running a web business. <span class="nt-active">connect</span> with me below...</p>
    </section>


    <section id="social-icons">
        <div class="social-outer-bg twitter">
        <a href="http://twitter.com/#!/noeltock">
            <div class="social-icon">
                <div class="social-inner-bg twitter-bg">
                    <div class="social-logo twitter-logo"></div>
                </div>
            </div>
        </a>
        </div>

        <div class="social-outer-bg dribbble">
        <a href="http://dribbble.com/noeltock">
            <div class="social-icon">
                <div class="social-inner-bg dribbble-bg">
                    <div class="social-logo dribbble-logo"></div>
                </div>
            </div>
        </a>
        </div>
        
        <div class="social-outer-bg forrst">
        <a href="http://forrst.com/people/noeltock">
            <div class="social-icon">
                <div class="social-inner-bg forrst-bg">
                    <div class="social-logo forrst-logo"></div>
                </div>
            </div>
        </a>
        </div>
        
        <div class="social-outer-bg flickr">
        <a href="http://www.flickr.com/photos/noelinthebahamas">
            <div class="social-icon">
                <div class="social-inner-bg flickr-bg">
                    <div class="social-logo flickr-logo"></div>
                </div>
            </div>
        </a>
        </div>
        
    </section>
      
    <section class="widget" id="recentposts">
      <h4 class="widget">recent posts</h3>
           <?php
            wp_reset_query();
                $args = array('post_status' => 'publish', 'numberposts' => 5, 'order'=> 'DESC', 'orderby' => 'ID');
                $postslist = get_posts( $args );
                foreach ($postslist as $post) :  setup_postdata($post);
                $image_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($image_id);
                $image_url = $image_url[0];?>
                <div class="recent-posts">
                        <div class="recent-thumb-bg"></div>
                        <div class="thumb-side recent-thumb animated">
                            <a href="<?php the_permalink(); ?>"><div style="background: url('<?php echo $image_url; ?>'); width:50px; height:50px;margin:0;"></div></a>
                        </div>
                        <div class="recent-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <span class="recent-date"><?php the_time('F jS, Y') ?></date>
                        </div>
                    </div>

                <div class="clearfix"></div>
            <?php endforeach;
            wp_reset_query();?>
    </section>  
    
    <section>
        
        <!-- Start of Flickr Badge -->
        <style type="text/css">
        /*
        Images are wrapped in divs classed "flickr_badge_image" with ids "flickr_badge_imageX" where "X" is an integer specifying ordinal position. Below are some styles to get you started!
        
        #flickr_badge_uber_wrapper {text-align:center; width:150px;}
        #flickr_badge_wrapper {padding:10px 0 10px 0;}
        .flickr_badge_image {float:left;margin:0 10px 10px 10px;}
        .flickr_badge_image img {border: 0px solid black !important;}
        #flickr_badge_source {text-align:left; margin:0 10px 0 10px;}
        #flickr_badge_icon {float:left; margin-right:5px;}
        #flickr_www {display:block; padding:0 10px 0 10px !important; font: 11px Arial, Helvetica, Sans serif !important; color:#3993ff !important;}
        #flickr_badge_uber_wrapper a:hover,
        #flickr_badge_uber_wrapper a:link,
        #flickr_badge_uber_wrapper a:active,
        #flickr_badge_uber_wrapper a:visited {text-decoration:none !important; background:inherit !important;color:#3993ff;}
        #flickr_badge_wrapper {}
        #flickr_badge_source {padding:0 !important; font: 11px Arial, Helvetica, Sans serif !important; color:#666666 !important;}
        */
        .flickr_badge_image {float:left;margin:5px;}
        .flickr_badge_image img {opacity:0.5;}
        .flickr_badge_image img:hover {opacity:1;}
        </style>
        <div id="flickr">
        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&display=latest&size=s&layout=x&source=user&user=26126276%40N00"></script>
        </div>
<!-- End of Flickr Badge -->

        
    </section>
    
    <section>
        <?php get_search_form(); ?>
    </section>

</aside>
<?php ?>