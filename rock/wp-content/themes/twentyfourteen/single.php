<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

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

/* -- nk
					// Previous/next post navigation.
					twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();

					}
*/

function rr_DbgPrint($str)  {
    print "<pre>";
    var_dump($str);
    print "<pre>";
}


if( get_field('image') ):
    $img = get_field('image'); 
	?><img src="<?php echo $img['url']; ?>" alt="URL" />

	<?php
else:
   print "image: Error in retrieval";
endif;


$location = get_field('geolocation');

if( !empty($location) ):

include_once "js/advanced_form_render.js";
?>


<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php 
else:
    print "Error in geolocation retrieval";
endif; ?>
<?php
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
