<?php
/**
 * @package rockclimbing
 * @since rockclimbing 1.0
 */
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div id="route_post" class="routeinfopage">
	
<div id="fade" style="display:none;"></div>
<div class="routeinfopage-content">

<header class="routeinfopage-header">

<div id="routeimg" class="routeinfopage-img">
<?php if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
   echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" onclick="return rimageoverlay()" >';
   the_post_thumbnail();
   echo '</a>';
 } ?>
<div id="routeimageoverlay" style="display:none;">
<?php the_post_thumbnail(); ?>
<a href= " # " onclick="return rimageoverlay()"> <br>close window </a>
</div><!----------routeimageoverlay----->
</div><!--.routeinfopage-img-->

<div class="routeinfopage-routemeta">
<?php $postid = get_the_ID();?>
<?php $result = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='routeno' AND post_id='$postid'"); ?>
<?php while ($rd = mysql_fetch_assoc($result)) { ?>

<div class="routeno">

	<?php echo $rd['meta_value'] ?>
</div><!--routeno-->
<?php } ?> 

<div class="routeinfopage-title"><?php the_title(); ?></div>

<?php $result = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='grade' AND post_id='$postid'"); ?>
<?php while ($rd = mysql_fetch_assoc($result)) { ?>
<div class="grade">

<img width="20" height="20" src=" '.<?php get_option('>home');?>.'wp-content/uploads/2014/02/games_difficult.ico" alt="Grade/Difficulty">
	<?php echo $rd['meta_value']?>
</div>
<?php } ?> 

   <div class="routeinfopage-routemeta-entry-meta">
            <?php rockclimbing_posted_on(); ?>        
   </div><!-- .routeinfopage-routemeta-entry-meta -->

</div><!--routeinfopage-routemeta-->
</header><!-- .routeinfopage-header -->
 

<div class="routeinfopage-description">
	<div class="routeinfopage-descriptiondelta">
	<span style="font-size:15px;font-weight:800;">DESCRIPTION</span>
	<div class="firstascent">
	<span style="color:#58acfa;font-size:12px;font-weight:800;">VariationsIve done this!FIRST ASCENT</span>
<?php $result = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='firstascent' AND post_id='$postid'"); ?>
<?php while ($rd = mysql_fetch_assoc($result)) { ?>
<?php echo '&nbsp<span style="font-size:12px;">' .$rd['meta_value']. '</span>'; ?>
	</div><!--firstascent-->
<?php } ?> 
	</div><!------routeinfopage-descriptiondelta---->
        <?php the_content(); ?>

	<div class="routeinfopage-descriptionicons">
<img width="20" height="20" src="http://localhost/alright/wp-content/uploads/2014/01/Crimp.jpg">
<img width="20" height="20" src="http://localhost/alright/wp-content/uploads/2014/01/Crimp.jpg">
<?php $result = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='locationmap' AND post_id='$postid'"); ?>
<?php while ($rd = mysql_fetch_assoc($result)) { ?>
<div class="locationmap">
<img width="20" height="20" src="http://localhost/alright/wp-content/uploads/2014/02/map_app.ico" alt="Location Map">
	<?php //echo $rd['meta_value']?>

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
echo '<a href= " '.get_permalink($post_thumbnail_post).' " onclick="return aimageoverlay()">' .$title. '</a>';

endif;

?>

<div id="areaimageoverlay" style="display:none;">
<?php 

if (class_exists('MultiPostThumbnails')) : 
MultiPostThumbnails::the_post_thumbnail( get_post_type(), 'secondary-image');
endif;
?>
<a href= "#" onclick="return aimageoverlay()"> <br>close window </a>

</div>

</div><!--locationmap-->
<?php } ?> 

	</div><!-------routeinfopage-descriptionicons---->

</div><!-----routeinfopage-description---->

        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rockclimbing' ), 'after' => '</div>' ) ); ?>

<footer class="routeinfopage-footer-entry-meta">
        <?php
            /* translators: used between list items, there is a space after the comma */
            $category_list = get_the_category_list( __( ', ', 'rockclimbing' ) );
 
            /* translators: used between list items, there is a space after the comma */
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
    </footer><!-- .routeinfopage-footer-entry-meta -->

</div><!-- .routeinfopage-content -->

<div class="commenting">
<?php if ( comments_open() || '0' != get_comments_number() )
                        comments_template( '', true );
                ?> 
</div><!--.commenting-->

</div><!--- #route_post .routeinfopage ---> 

<div class="postgallery">
<?php echo do_shortcode('[gallery]'); ?>
</div>

</article><!-- #post-<?php the_ID(); ?> -->