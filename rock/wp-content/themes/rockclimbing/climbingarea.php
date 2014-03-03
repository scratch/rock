<?php
/*
Template Name: climbingarea
*/

get_header(); ?>

<div id="pageafterheader" class="pageafterheadercontent">

<div class="wrapper">
 
<div class="allelements">
<?php get_sidebar(); ?>
 	
     <?php while ( have_posts() ) : the_post(); ?>
 
         <?php get_template_part( 'content', 'climbingarea' ); ?>
 
                <?php endwhile; // end of the loop. ?>

</div><!--- .allelements---->
</div><!-- .wrapper -->

</div><!-- #pageafterheader .pageafterheadercontent -->
 
<?php get_footer(); ?>
