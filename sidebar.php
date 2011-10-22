<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<aside id="sidebar">
  <section>
    <?php get_search_form(); ?>
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
    
  <!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
  <section>
    <h2>Author</h2>
    <p>A little something about you, the author. Nothing lengthy, just an overview.</p>
  </section>
  -->

  <?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?> 
  <section class="widget">
    
    <?php /* If this is a 404 page */ if (is_404()) { ?>
    <?php /* If this is a category archive */ } elseif (is_category()) { ?>
    <p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for the day <?php the_time('l, F jS, Y'); ?>.</p>

    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for <?php the_time('F, Y'); ?>.</p>

    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for the year <?php the_time('Y'); ?>.</p>

    <?php /* If this is a search result */ } elseif (is_search()) { ?>
    <p>You have searched the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

    <?php /* If this set is paginated */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives.</p>

    <?php } ?>

  </section>
  <?php }?>
  
  <nav role="navigation">
    <?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

    <h2>Archives</h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>

    <?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
  </nav>

</aside>
<?php ?>