<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package rockclimbing
 * @since rockclimbing 1.0
 */
 
get_header(); ?>
 
<div id="pageafterheader" class="pageafterheadercontent">

<div class="wrapper">
 
<div class="allelements">
<?php get_sidebar(); ?>

<div id="default_page" class="defaultpage">

  <?php if ( have_posts() ) : ?>

     <header class="page-header">
<h1 class="page-title"><img width="30" height="30" src="http://localhost/turahalliguide/wp-content/uploads/2014/02/search2.jpg">&nbsp;&nbsp;<?php printf( __( 'Search Results for: %s', 'rockclimbing' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
      </header><!-- .page-header -->
 
                <?php rockclimbing_content_nav( 'nav-above' ); ?>
 
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
 
    <?php get_template_part( 'content', get_post_format() ); ?>
<?php wp_ultimate_search_results(); ?>
                <?php endwhile; ?>
 
                <?php rockclimbing_content_nav( 'nav-below' ); ?>
 
            <?php else : ?>
 
     <?php get_template_part( 'no-results', 'search' ); ?>
  
            <?php endif; ?>
</div><!-------------.defaultpage-------------->

      </div><!--- .allelements---->
</div><!-- .wrapper -->

</div><!-- #pageafterheader .pageafterheadercontent -->
 
<?php get_footer(); ?>

