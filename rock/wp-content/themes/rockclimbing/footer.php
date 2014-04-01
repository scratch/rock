
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
<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'rockclimbing' ); ?>" rel="generator"><?php printf( __( 'Powered by %s', 'rockclimbing' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( __( 'Theme: %1$s by %2$s.', 'rockclimbing' ), 'rockclimbing', Anagha ); ?>
    </div><!-- .site-info -->

<ul class="footer-pagelinks">
<?php //wp_list_pages('exclude = 8,9,10&title_li='); ?>
</ul>

<ul class="footer-menu">
<?php //subscribe ?>
</ul>
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->
 
<?php wp_footer(); ?>
 
</body>
</html>