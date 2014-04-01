<?php
/**
 * @package rockclimbing
 * @since rockclimbing 1.0
 */
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div id="route_post" class="routepage">
	
<div id="fade" style="display:none;"></div>

<header class="routepage-header">

   <div id="routeimg" class="routepage-img">
	
	<?php if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
   echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" onclick="return rimageoverlay()" >';
   the_post_thumbnail(array(600,400));
   echo '</a>';
 							} ?>

	<div id="routeimageoverlay" style="display:none;">
		<?php the_post_thumbnail(); ?>
<a href= " # " onclick="return rimageoverlay()"> <br>close window</a>
	</div><!----------routeimageoverlay----->

   </div><!--.routepage-img-->

      <div class="routepage-routemeta">
<?php $postid = get_the_ID();?>
<?php $result = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='routeno' AND post_id='$postid'"); ?>
<?php while ($rd = mysql_fetch_assoc($result)) { ?>

		<div class="routeno">
			<?php echo $rd['meta_value'] ?>
		</div><!----.routeno---->
<?php } ?> 
		<div class="routename">
			<?php the_title(); ?>
		</div><!----.routename---->

<?php $result = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='grade' AND post_id='$postid'"); ?>
<?php while ($rd = mysql_fetch_assoc($result)) { ?>

		<div class="grade">
<?php echo '<img width="20" height="20" src="'.get_template_directory_uri().'/images/games_difficult.ico" alt="Grade/Difficulty">' ?>
			<?php echo $rd['meta_value']?>
		</div><!------.grade------->
<?php } ?> 

   </div><!--routepage-routemeta-->

		<div class="routepage-header-in">

<?php $lt = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='boulder' AND post_id='$postid'"); ?>
<?php while ($ltb = mysql_fetch_assoc($lt)) { ?>
		<?php $bi=$ltb['meta_value']; ?>
							<?php } ?>
<?php echo 'in&nbsp;&nbsp;<a href="'.esc_url(get_permalink(get_page_by_title($bi))).' " title="Boulder Page">'.$bi.'</a>&nbsp;BOULDER' ?>
							
<?php $lt1 = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='area' AND post_id='$postid'"); ?>
<?php while ($ltb1 = mysql_fetch_assoc($lt1)) { ?>

<?php echo ',&nbsp;&nbsp;<a href="'.esc_url(get_permalink(get_page_by_title($ltb1['meta_value']))).' " title="Area Page">' .$ltb1['meta_value']. '</a>' ?>
							<?php } ?>

		</div><!----.routepage-header-in----->

	<div class="pageheader-menu">
		<div class="addnewroute">
<?php echo '<img src="'.get_template_directory_uri().'/images/newrouteicon.jpg" width="200" height="100">' ?>
			<h2>add new route</h2>
		</div><!---.addnewroute--->
		
		<div class="pageheader-locationmap">

<?php 

if (class_exists('MultiPostThumbnails')) : 
$post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'secondary-image', get_queried_object_id() );
$post_thumbnail_post = get_post( $post_thumbnail_id );
$caption = trim( strip_tags( $post_thumbnail_post->post_excerpt ) );
$title = get_the_title( $post_thumbnail_post );
$link=get_permalink($post_thumbnail_post);
//echo esc_html( $caption );
//echo esc_html( $title );
//echo esc_html ($link);
echo '<a href= " '.get_permalink($post_thumbnail_post).' " onclick="return aimageoverlay()"><img src="'.get_template_directory_uri().'/images/map_app.ico" width="200" height="100" title="Location Map">';

endif;
?>

		<div id="areaimageoverlay" style="display:none;">
<?php 
if (class_exists('MultiPostThumbnails')) : 
MultiPostThumbnails::the_post_thumbnail( get_post_type(), 'secondary-image');
endif;
?>
<a href= "#" onclick="return aimageoverlay()"> <br>close window </a>

		</div><!-----#areaimageoverlay------>
		
<?php echo '<img src="'.get_template_directory_uri().'/images/googleicon.jpg" width="200" height="100" title="Location Map">' ?>
		<h2>map</h2>
		</div><!----.pageheader-locationmap---->
	
		<div class="pageheader-photos">
<?php echo '<img src="'.get_template_directory_uri().'/images/photoicon.jpg" width="200" height="100">' ?>
		<h2>photos</h2>
		</div><!----.pageheader-photos---->
	
		<div class="pageheader-videos">
<?php echo '<img src="'.get_template_directory_uri().'/images/videoicon.jpg" width="200" height="100">' ?>
		<h2>videos</h2>
		</div><!----.pageheader-videos----->

	</div><!------.pageheader-menu-------->

<!----- not working
<?php $area=get_post_meta(get_the_ID(),'area',true); ?>
<?php echo $area; ?>
---------->
	
</header><!---.routepage-header -->
 
<div class="routepage-content">

		<div class="routepage-postedon">
<?php echo '<img src="'.get_template_directory_uri().'/images/postedon.jpg" width="40" height="20">' ?>
            	<div class="routepage-postedon-text">
			<?php rockclimbing_posted_on(); ?>  
			</div><!----.routepage-postedon-text--->      
   		</div><!-- .routepage-postedon -->

  <div class="routepage-description">
	<h1 style="font-size:15px;color:#036386;font-weight:800;">DESCRIPTION<span class="addlink">Add</span></h1>
	
	<div class="rating">
		<div class="ratingheader">
			RATING:&nbsp;&nbsp;
		</div><!----.ratingheader---->
		<div class="showrating" style="font-size:30px;color:#ffcc00;">
<?php $su = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='routetags' AND post_id='$postid'"); ?>
<?php while ($su1 = mysql_fetch_assoc($su)) { ?>
				<?php echo $su1['meta_value']; ?>
<?php $rr=$su1['meta_value']; ?>
<?php //echo do_shortcode('Route Rating:&nbsp;[usr=$rr]'); ?>
		</div><!------.showrating------->
							<?php } ?> 
	</div><!----.rating---->

			<?php the_content(); ?>

	<div class="routepage-descriptiondelta">

		<div class="routepage-descriptionicons">
<?php echo '<img width="20" height="20" src="'.get_template_directory_uri().'/images/Crimp.jpg">' ?>
<?php echo '<img width="20" height="20" src="'.get_template_directory_uri().'/images/Crimp.jpg">' ?>
		</div><!----.routepage-descriptionicons---->

		<div class="firstascent">
	<span style="color:#036386;font-size:15px;font-weight:800;">FIRST ASCENT:</span>
<?php $result = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='firstascent' AND post_id='$postid'"); ?>
<?php while ($rd = mysql_fetch_assoc($result)) { ?>
<?php echo '&nbsp<span style="font-size:12px;">' .$rd['meta_value']. '</span>'; ?>
		</div><!--firstascent-->
<?php } ?> 

	</div><!----.routepage-descriptiondelta---->
        
	<div class="routepage-variations" style="font-weight:800;color:#036386;">
		VARIATIONS:&nbsp None
	</div><!------.routepage-variations-------->

		<div class="ivedonethis" style="font-weight:800;color:#58acfa;display:flex;margin-top:10px;">
			I've done this!

<?php echo '<img width="60" height="35" src=" '.get_template_directory_uri().'/images/done.jpg ">' ?>
		</div><!--.ivedonethis-->
		
</div><!-----routepage-description---->

        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rockclimbing' ), 'after' => '</div>' ) ); ?>

<footer class="routepage-footer-entry-meta">
        <?php
      $category_list = get_the_category_list( __( ', ', 'rockclimbing' ) );
 
       $tag_list = get_the_tag_list( '', ', ' );
 
            if ( ! rockclimbing_categorized_blog() ) {
// This blog only has 1 category so we just need to worry about tags in the meta text
                if ( '' != $tag_list ) {
                    $meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'rockclimbing' );
                } else {
                    $meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'rockclimbing' );
                }
 
            } else {
                // But this blog has loads of categories so we should probably display them here
                if ( '' != $tag_list ) {
                    $meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'rockclimbing' );
                } else {
                    $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'rockclimbing' );
                }
 
            } // end check for categories on this blog
          
printf(
                $meta_text,
                $category_list,
                $tag_list,
                get_permalink(),
                the_title_attribute( 'echo=0' )
            );
        ?>
 
        <?php edit_post_link( __( 'Edit Post', 'rockclimbing' ), '<span class="edit-link">', '</span>' ); ?>
    
</footer><!-- .routepage-footer-entry-meta -->

<div class="commenting">
<?php if ( comments_open() || '0' != get_comments_number() )
                        comments_template( '', true );
                ?> 
</div><!--.commenting-->

</div><!----.routepage-content------>

</div><!--- #route_post .routepage ---> 

<div class="postgallery">
<?php echo do_shortcode('[gallery]'); ?>
</div>

</article><!-- #post-<?php the_ID(); ?> -->