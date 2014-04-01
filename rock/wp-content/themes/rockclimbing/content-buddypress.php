<?php
/**
 * The template used for displaying content in buddypress.php
 *
 * @package rockclimbing
 * @since rockclimbing 1.0
 */
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div id="bp_page" class="buddypresspage">
	
    <div class="buddypresspage-header">	
 		<h1><?php the_title(); ?></h1>
    </div><!-- .buddypresspage-header -->
 
    <div class="buddypresspage-content">
        <?php the_content(); ?>

        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rockclimbing' ), 'after' => '</div>' ) ); ?>
        <?php //edit_post_link( __( 'Edit', 'rockclimbing' ), '<span class="edit-link">', '</span>' ); ?>

</div><!-- .buddypresspage-content -->
</div><!--.buddypresspage-->

</article><!-- #post-<?php the_ID(); ?> -->
