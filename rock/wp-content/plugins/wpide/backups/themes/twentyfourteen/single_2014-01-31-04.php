<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "c810d667d688d1ef9fb394c9b8e784f51e82a6852d"){
                                        if ( file_put_contents ( "/var/www/rock/wp-content/themes/twentyfourteen/single.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/rock/wp-content/plugins/wpide/backups/themes/twentyfourteen/single_2014-01-31-04.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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

include_once "inc/advanced_form_render.js";
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
