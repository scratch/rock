<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package rockclimbing
 * @since rockclimbing 1.0
 */
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div id="home_page" class="homepage">
	
    <div class="homepage-header">	
 		<h1><?php the_title(); ?></h1>
    </div><!-- .homepage-header -->
 
    <div class="homepage-content">
<?php //<div id="testoverlay" style="display:none;"></div> ?>
<?php //<p id="demo"></p> ?>
<?php //<button type="button" onclick = "myfirst();">try it</button> ?>
<?php //<a href='#' onclick="myfirst()">try it</a> ?>

        <?php the_content(); ?>

        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rockclimbing' ), 'after' => '</div>' ) ); ?>
        <?php //edit_post_link( __( 'Edit', 'rockclimbing' ), '<span class="edit-link">', '</span>' ); ?>

</div><!-- .homepage-content -->
</div><!--.homepage-->

</article><!-- #post-<?php the_ID(); ?> -->
