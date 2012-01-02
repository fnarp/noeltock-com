<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<!-- title & meta -->

<div class="row">   
    <div class="eightcol">  
    <header>
        <h1 class="post-title" style="margin-bottom:40px">the blog</h1>
        <div class="post-meta"></div>
    </header> 
    </div>
    <div class="fourcol last"></div>    
</div>

<div id="main" class="row">
    <div class="eightcol">  
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <header>
          <div class="post-thumb"><a href="<?php the_permalink() ?>" rel="bookmark"><?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail('index-thumb', array("class" => "alignleft post_thumbnail")); } ?></a></div>
          <div class="post-text">
              <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
              <div class="post-meta"><time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time> | Posted in <?php the_category(', ') ?> | <?php comments_popup_link(__(''), __('- 1 Comment'), __('- % Comments')); ?></div>
              <?php the_excerpt(); ?>
          </div>
        </header>
        
      </article>
        
        <div class="clearfix"></div>  
        
    <?php endwhile; ?>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>
    
  <?php endif; ?>
    </div>  
<div class="fourcol last"> 
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>


