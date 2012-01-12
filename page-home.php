<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<div class="row">
    <div class="twelvecol">
        <h1 class="home-title">noel tock</h1>
        <h2 class="home-tagline">designing online solutions</h2>
    </div>
</div>    

	<div class="row">
            <div class="sixcol">    
                    <h3>welcome</h3>
                    <p>My name is Noel and I'm a 30 year old web dude that likes to build things online. Contrary to popular career advice, I'm not a niche expert at anything. I like building things from the ground up, and learning whatever I need to in the process. A sort of jack of all trades, master of none. </p>
                    <p>My typical day to day consists of <span class="notice">WordPress</span>, <span class="notice">Front-End Design</span> and <span class="notice">Project Management</span>. I also have a lot of fun experimenting and working with <span class="notice-2">SEO</span>, <span class="notice-2">Conversion Optimization</span>, <span class="notice-2">User Onboarding</span> and recently <span class="notice-2">Gamification</span>.</p>
                    <p>If you'd like to <strong>contact me</strong> regarding work or otherwise, feel free to use <a href="mailto:hello@noeltock.com">hello@noeltock.com</a>, I try to respond within 24 hours.</p>

                <section id="social-icons-home">
                    <div class="social-outer-bg twitter">
                        <a rel="nofollow" href="http://twitter.com/#!/noeltock">
                            <div class="social-icon">
                                <div class="social-inner-bg twitter-bg">
                                    <div class="social-logo twitter-logo"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="social-outer-bg dribbble">
                        <a rel="nofollow" href="http://dribbble.com/noeltock">
                            <div class="social-icon">
                                <div class="social-inner-bg dribbble-bg">
                                    <div class="social-logo dribbble-logo"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="social-outer-bg forrst">
                        <a rel="nofollow" href="http://forrst.com/people/noeltock">
                            <div class="social-icon">
                                <div class="social-inner-bg forrst-bg">
                                    <div class="social-logo forrst-logo"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="social-outer-bg flickr">
                        <a rel="nofollow" href="http://www.flickr.com/photos/noelinthebahamas">
                            <div class="social-icon">
                                <div class="social-inner-bg flickr-bg">
                                    <div class="social-logo flickr-logo"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                </section>
                <h3>online mentions & presentations</h3>

                <ul class="home-mentions">
                    <li><img src="<?php echo NT_THEME; ?>/images/n-wpcandy.jpg" /><a rel="nofollow" href="http://www.slideshare.net/ntock/lessons-learned-from-selling-wordpress-themes"><strong>WPCandy</strong> - Various articles relating to Theme Force</a></li>
                    <li><img src="<?php echo NT_THEME; ?>/images/n-wpmu.jpg" /><a rel="nofollow" href="http://wpmu.org/wordcamp-uk-interview-noel-tock-theme-force/"><strong>WPMU</strong> - Video Interview at WordCamp UK</a></li>
                    <li><img src="<?php echo NT_THEME; ?>/images/n-slideshare.jpg" /><a rel="nofollow" href="http://www.slideshare.net/ntock/lessons-learned-from-selling-wordpress-themes"><strong>SlideShare</strong> - Presentation on WordPress Themes at WordCamp UK</a></li>
                    <li><img src="<?php echo NT_THEME; ?>/images/n-designinstruct.jpg" /><a rel="nofollow" href="http://designinstruct.com/iconlogo-design/create-a-wooden-social-media-icon-quickly-with-photoshop/"><strong>Design Instruct</strong> - Tutorial on creating Social Media Icons</a></li>
                </ul>

                <h3>latest posts</h3>
                    <ul class="home-post-list">
                        <?php
                        wp_reset_query();
                            $args = array('post_status' => 'publish', 'numberposts' => 5, 'order'=> 'DESC', 'orderby' => 'ID');
                            $postslist = get_posts( $args );
                            foreach ($postslist as $post) :  setup_postdata($post);
                            $image_id = get_post_thumbnail_id();
                            $image_url = wp_get_attachment_image_src($image_id);
                            $image_url = $image_url[0];?>
                            <li class="recent-posts">
                                    <div class="recent-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                            </li>
                            <div class="clearfix"></div>
                        <?php endforeach;
                        wp_reset_query();?>
                    </ul>

                                <!-- <img class="photo" src="images/test.jpg" /> -->
		</div>
            <div class="sixcol last">   
                    <h3>current projects</h3>
                    <p>Besides any client work, this is what I'm focused on now:</p>
                    <div class="home-project">
                        <img class="thumb-post" src="<?php echo NT_THEME; ?>/images/thumb-tf.jpg" />
                        <div class="title">theme-force.com</div>
                        <p>I originally started this as a shop for WordPress themes, but it has since developed into a full-blown website solution for restaurant owners. Coming out of beta soon.</p>   
                    </div>
                    <div class="home-project">
                        <img class="thumb-post" src="<?php echo NT_THEME; ?>/images/thumb-hs.jpg" />
                        <div class="title"><span></spans>adoptr.com<div class="in-development">in development</div></span></div>
                        <p>My goal with this project is to provide humane societies & animal shelters with a free hosted website.  Along with basic features (adoptions, donations, etc.), I'd also like to eliminate certain redundant tasks by utilizing API's.</p>
                    </div>
                    <div class="home-project">
                        <img class="thumb-post" src="<?php echo NT_THEME; ?>/images/thumb-cb.jpg" />
                        <div class="title"><span></spans>craftbeer.ch<div class="in-development">in development</div></span></div>
                        <p>I was once searching for Swiss beers and couldn't for the life of me find a decent resource. This is my attempt at consolidating all Swiss beers & microbreweries in a usable & well-organized manner.</p>
                    </div>
                <h3>past projects</h3>
                    <p>Fun projects I kicked off in the past which have developed nicely.</p>
                    <div class="home-project">
                        <img class="thumb-post" src="<?php echo NT_THEME; ?>/images/thumb-ga.jpg" />
                        <div class="title">game-artist.net</div>
                        <p>A game art community I started in 2006. It was a successful niche product with cool features such as interviews, tutorials and sponsored competitions. I unfortunately had to let it go due to time requirements, and sold it to CGSociety.</p>
                    </div>
                    <div class="home-project">
                        <img class="thumb-post" src="<?php echo NT_THEME; ?>/images/thumb-pr.jpg" />
                        <div class="title">realitymod.com</div>
                        <p>I created this game modification in 2004 for Battlefield 2. It has since grown to have a userbase of 50'000+ with over 200 contributors over the years.</p>
                    </div>
            </div>
    </div>
</div>
<?php get_footer(); ?>
