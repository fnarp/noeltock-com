<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main">


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      
    <!-- title & meta -->
      
    <div class="row">   
        <div class="eightcol">  
        <header>
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="post-meta">
                <div>Written by <a href="https://plus.google.com/109589976053318296329?rel=author">Noel Tock</a></div>
                <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time> | Posted in <?php the_category(', ') ?> | <span style="position:relative;top:6px;left:2px;"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="noeltock">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></span> | <span style="position:relative;top:6px;left:2px;"><g:plusone size="medium" annotation="inline" width="300"></g:plusone></span></div>
        </header> 
        </div>
        <div class="fourcol last"></div>    
    </div>
      
    <!-- post -->
    
    <div class="row post-content">
    <div class="eightcol"> 
    <?php the_content('Read the rest of this entry &raquo;'); ?>
        <div class="clearfix" style="margin-top:50px;"></div>
    <?php comments_template( '', true ); ?>    

     
    </div>
 

<?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

    <div class="fourcol last"> 
<?php get_sidebar(); ?>
</div></div>
 </article>

<?php get_footer(); ?>
