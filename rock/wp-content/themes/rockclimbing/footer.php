
<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the id=main div and all content after
*
* @package rockclimbing
* @since rockclimbing 1.0
*/
?>
 
</div><!-- .pagecontainer -->
 
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <?php do_action( 'rockclimbing_credits' ); ?>
<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'rockclimbing' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'rockclimbing' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( __( 'Theme: %1$s by %2$s.', 'rockclimbing' ), 'rockclimbing', '<a href="http://themerockclimbingr.com/" rel="designer">Themerockclimbingr</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->
 
<?php wp_footer(); ?>
 
</body>
</html>