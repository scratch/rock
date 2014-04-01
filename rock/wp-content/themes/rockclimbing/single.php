<?php
/**
 * The Template for displaying all single posts.
 *
 * @package rockclimbing
 * @since rockclimbing 1.0
 */
 ?>

<div class="wrapper">

<?php get_header(); ?>
 
<div id="pageafterheader" class="pageafterheadercontent">
 
<div class="allelements">
<?php //get_sidebar(); ?>
    
  <?php while ( have_posts() ) : the_post(); ?>
 
     <?php //rockclimbing_content_nav( 'nav-above' ); ?>
               
		<?php get_template_part( 'content', 'single' ); ?>
 
     <?php //rockclimbing_content_nav( 'nav-below' ); ?>
 
   <?php endwhile; // end of the loop. ?>

</div><!--- .allelements---->
<?php get_footer(); ?>

</div><!-- #pageafterheader .pageafterheadercontent -->
</div><!-- .wrapper -->

