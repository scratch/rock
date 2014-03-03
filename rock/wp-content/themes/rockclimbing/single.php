<?php
/**
 * The Template for displaying all single posts.
 *
 * @package rockclimbing
 * @since rockclimbing 1.0
 */
 
get_header(); ?>
 
<div id="pageafterheader" class="pageafterheadercontent">

<div class="wrapper">
 
<div class="allelements">
<?php get_sidebar(); ?>

<?php //<input type="button" class="signupbutton" onclick="alert('Welcome!')"> ?>
    
  <?php while ( have_posts() ) : the_post(); ?>
 
     <?php //rockclimbing_content_nav( 'nav-above' ); ?>
               
		<?php get_template_part( 'content', 'single' ); ?>
 
     <?php //rockclimbing_content_nav( 'nav-below' ); ?>
 
   <?php endwhile; // end of the loop. ?>

</div><!--- .allelements---->
</div><!-- .wrapper -->

</div><!-- #pageafterheader .pageafterheadercontent -->
 
<?php get_footer(); ?>