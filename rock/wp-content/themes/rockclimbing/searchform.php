<?php
/**
 * The template for displaying search forms in rockclimbing
 *
 * @package rockclimbing
 * @since rockclimbing 1.0
 */
?>
    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
       
        <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search', 'rockclimbing' ); ?>" />
<?php echo '<img src="'.get_site_url().'/wp-content/uploads/2014/03/hold1.jpg" width="30" height="30">' ?>
        <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Go', 'rockclimbing' ); ?>" />

    </form>
<?php //wp_ultimate_search_bar(); ?>