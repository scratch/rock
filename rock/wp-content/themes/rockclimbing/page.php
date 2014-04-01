<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
 
     <?php get_template_part( 'content', 'page' ); ?>

    <?php endwhile; // end of the loop. ?>
<!-----------------
<div class="pagenav">
   <div class="nav-previous alignleft">
      <?php next_posts_link( 'Older posts' ); ?>
<
   </div>
   <div class="nav-next alignright">
       <?php previous_posts_link( 'Newer posts' ); ?>
new
   </div>
</div><!------pagenav---------------->


</div><!--- .allelements---->
<?php get_footer(); ?>

</div><!-- #pageafterheader .pageafterheadercontent -->

</div><!-- .wrapper -->
