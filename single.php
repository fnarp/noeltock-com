<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main">
    <div class="row">   
    <div class="eightcol">  

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header>
      <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="post-meta"><time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time> | Posted in <?php the_category(', ') ?> | <span style="position:relative;top:4px;left:2px;"><g:plusone size="small" annotation="inline" width="300"></g:plusone></span></div>
    </header> 
    </div>
    </div>
  <div class="row">
      
      <div class="eightcol"> 
    <?php the_content('Read the rest of this entry &raquo;'); ?>
    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
    <footer>
      <p>This entry was posted by <?php the_author() ?>
      on <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('l, F jS, Y') ?></time>
      at <time><?php the_time() ?></time>
      and is filed under <?php the_category(', ') ?>.
      You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

      <?php if ( comments_open() && pings_open() ) {
        // Both Comments and Pings are open ?>
        You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

      <?php } elseif ( !comments_open() && pings_open() ) {
        // Only Pings are Open ?>
        Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

      <?php } elseif ( comments_open() && !pings_open() ) {
        // Comments are open, Pings are not ?>
        You can skip to the end and leave a response. Pinging is currently not allowed.

      <?php } elseif ( !comments_open() && !pings_open() ) {
        // Neither Comments, nor Pings are open ?>
        Both comments and pings are currently closed.

      <?php } edit_post_link('Edit this entry','','.'); ?>
      </p>
    </footer>

  </article>

<?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
    </div>
    <div class="fourcol last"> 
<?php get_sidebar(); ?>
</div>
</div>

<?php get_footer(); ?>
