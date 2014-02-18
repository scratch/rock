<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

function rr_display_image()
{
  $img_name = get_post_meta (get_the_ID(), 'route_image', true);
  ?>

  <ul class='post-meta'>
  <li class='route-meta-image'>
  <img src=<?php 
  $rr_upload_dir = wp_upload_dir();
  $rr_dir = $rr_upload_dir['url'] . '/wpcf7_uploads/' . $img_name . " ";
  echo $rr_dir; ?>alt="Smiley face">
  </li>
  </ul>

<?php
}



get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// Previous/next post navigation.
					/* -- nk twentyfourteen_post_nav();
					 */

					/*
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					*/

				// -- nk. 
				the_meta();
        rr_display_image();
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
