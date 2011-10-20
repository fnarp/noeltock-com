<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<div class="row">
    <div class="twelvecol">
    <footer>
        <p>
            This site is proudly powered by
            <a href="http://wordpress.org/">WordPress</a>, and using my own theme, <a href="http://html5boilerplate.com/">noel-tock-v5</a>.
            <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds.
        </p>
    </footer>
    </div>
</div>

</div> <!--! end of .container -->

<?php wp_footer(); ?>

</body>
</html>
