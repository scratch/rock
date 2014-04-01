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

	<?php if (is_front_page()) { ?>

<div class="leftbar">
	<div class="spotlight">
			<?php echo'<h1><img src="'.get_site_url().'/wp-content/uploads/2014/03/postpin1.jpg" width="30" height="30"><img src="'.get_site_url().'/wp-content/uploads/2014/03/myspotlight.jpg" width="260" height="100"><a href=" '.esc_url(get_permalink(get_page_by_title('news'))).'">'.Spotlight.'</a></h1>' ?>
<p>News, Events and Happenings</p>
	</div><!-----spotlight------->
	<div class="latestposts"> 
			<h1><?php echo '<img src="'.get_site_url().'/wp-content/uploads/2014/03/postpin1.jpg" width="30" height="30">' ?>&nbsp;&nbsp;latest posts</h1>
	<ul>
	<?php $recent_posts = wp_get_recent_posts(array(
		'numberposts' => 5,
		'orderby'     => 'post_date',
					));
 foreach( $recent_posts as $recent ){
		 echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                                 	}
	?>
	</ul>
	</div><!-----latestposts---->
</div><!----leftbar---->

<div class="homepage-main">
    <div class="homepage-header">	
 		<h1><?php the_title(); ?></h1>
    </div><!-- .homepage-header -->
 
	<div class="homepage-content">

        <?php the_content();      
edit_post_link( __( 'Edit', 'rockclimbing' ), '<span class="edit-link">', '</span>' ); 
           ?>

	</div><!-- .homepage-content -->
</div><!---.homepage-main--->

<div class="rightbar">
	<div class="using">
			<h1><?php echo '<img src="'.get_site_url().'/wp-content/uploads/2014/03/postpin1.jpg" width="30" height="30">' ?>&nbsp;&nbsp;using this website</h1>
	</div>
	<div class="climbingwiki">
			<h1><?php echo '<img src="'.get_site_url().'/wp-content/uploads/2014/03/postpin1.jpg" width="30" height="30"><img src="'.get_site_url().'/wp-content/uploads/2014/03/bookshelf.jpg" width="260" height="100">' ?>&nbsp;&nbsp;Climbing Wiki</h1>
<p>A collection of Rock Climbing Information, Links and Articles</p>
	</div>
</div>		

	<?php	} else { ?>

<div class="defaultpage-mainone">
    <div class="defaultpage-header">	
 		<h1><?php the_title(); ?></h1>
    </div><!-- .defaultpage-header -->

	<div class="defaultpage-content">

        <?php the_content(); ?>

      </div><!-- .defaultpage-content -->
</div><!---.defaultpage-mainone--->

<div class="defaultpage-maintwo">
    <div class="defaultpage-header">	
 		<h1><?php the_title(); ?></h1>
    </div><!-- .defaultpage-header -->

	<div class="defaultpage-content">

        <?php the_content(); ?>

      </div><!-- .defaultpage-content -->
</div><!---.defaultpage-maintwo--->

<?php } ?>

</div><!--.homepage-->

</article><!-- #post-<?php the_ID(); ?> -->
