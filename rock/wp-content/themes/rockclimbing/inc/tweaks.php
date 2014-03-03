<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package rockclimbing
 * @since rockclimbing 1.0
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @since rockclimbing 1.0
 */

function rockclimbing_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'rockclimbing_page_menu_args' );
 
/**
 * Adds custom classes to the array of body classes.
 *
 * @since rockclimbing 1.0
 */

function rockclimbing_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }
 
    return $classes;
}
add_filter( 'body_class', 'rockclimbing_body_classes' );
 
/**
 * Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
 *adds a “#main” to the end of the next/previous image links on attachment pages
 * @since rockclimbing 1.0
 */
function rockclimbing_enhanced_image_navigation( $url, $id ) {
    if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
        return $url;
 
    $image = get_post( $id );
    if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
        $url .= '#main';
 
    return $url;
}
add_filter( 'attachment_link', 'rockclimbing_enhanced_image_navigation', 10, 2 );