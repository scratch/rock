<?php
/*
Template Name: climbingarea
*/
?>

<div class="wrapper">

<?php get_header(); ?>

<div id="pageafterheader" class="pageafterheadercontent">
 
<div class="allelements">
<?php //get_sidebar(); ?>
 	<?php
global $more;
$more=0;
?>
     <?php while ( have_posts() ) : the_post(); ?>
 
      <?php get_template_part( 'content', 'climbingarea' ); ?>
 
                <?php endwhile; // end of the loop. ?>

</div><!--- .allelements---->
<?php get_footer(); ?>

</div><!-- #pageafterheader .pageafterheadercontent -->
 
</div><!-- .wrapper -->
