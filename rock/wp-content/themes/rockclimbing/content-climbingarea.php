<?php
/**
 * The template part used for climbing area template.
 *
 * @package rockclimbing
 * @since rockclimbing 1.0
 */
?>
 	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div id="climbingarea_page" class="climbingareapage">

<header class="climbingareapage-header">

<div id="areaimg" class="climbingareapage-img">
	<?php the_post_thumbnail(array(600,400)); ?>
</div><!--.climbingareapage-img-->
<h1><?php echo '<img width="25" height="25" src="'.get_template_directory_uri().'/images/area.jpg" alt="area icon">' ?>&nbsp;&nbsp;<?php the_title(); ?></h1> 

<div class="pageheader-menu">
	<div class="addnewboulder">
<?php echo '<img src="'.get_template_directory_uri().'/images/addnew.jpg" width="200" height="100">' ?>
		<h2>add new boulder</h2>
	</div><!---.addnewboulder--->
	
	<div class="pageheader-locationmap">
<?php echo '<img src="'.get_template_directory_uri().'/images/map_app.ico" width="200" height="100" title="Location Map">' ?>
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
	
	<div class="pageheader-commenting">
<?php echo '<img src="'.get_template_directory_uri().'/images/commenticon.jpg" width="200" height="100">' ?>
		<h2>what do you think?</h2>
	</div><!----.pageheader-commenting---->

</div><!-----.pageheader-menu------> 	
</header><!-- .climbingareapage-header -->

<div class="climbingareapage-areainfo">
	<div class="climbingareapage-areainfo-about">
		<h1>About
<span class="aboutmap">See on Map</span>
			<span class="addlink">Add</span></h1>
        <?php the_content();?>

	</div><!---------.climbingareapage-areainfo-about----->

	<div class="climbingareapage-boulderlisting">

	<h1 style="font-family:comic sans MS;
font-size:15px;font-weight:800;color:#036386;">Boulders in the Area<span class="addlink">Add</span></h1>
	<div class="climbingareapage-boulderlist">

<?php $area=get_the_title(); ?>
<?php $result = mysql_query("SELECT post_id FROM wp_postmeta WHERE meta_key='area' AND meta_value='$area'"); ?>
<?php while ($row = mysql_fetch_assoc($result)) { ?>
	<?php $pi=$row['post_id']; ?>
<?php $r2 = mysql_query("SELECT post_id FROM wp_postmeta WHERE post_id='$pi' AND meta_value='new'"); ?>
<?php while ($r = mysql_fetch_assoc($r2)) { ?>
<?php $pi2=$r['post_id']; ?>

<?php $r3 = mysql_query("SELECT meta_value FROM wp_postmeta WHERE post_id='$pi2' AND meta_key='boulder'"); ?>

<?php while ($qb = mysql_fetch_assoc($r3)) { ?>

	<div class="climbingareapage-bouldermeta">

	<?php echo '<img style="padding-top:20px;" width="30" height="30" src="'.get_template_directory_uri().'/images/climbingshoe.jpg">' ?>
	
	   <div class="bouldermeta-namelistroutes">
		<div class="bouldermeta-namelistroutes-header">
<?php echo '<h1 style="color:#0084b4;font-size:15px;font-weight:700;"><a href=" '.esc_url(get_permalink(get_page_by_title( $qb['meta_value'] ))).' ">' .$qb['meta_value']. '</a></h1>'; ?>

			<div class="showrating" style="font-size:30px;color:#ffcc00;margin:20px 0 0 20px;">
					***
			</div><!------.showrating------->
		</div><!---.bouldermeta-namelistroutes-header--->

<?php $bn=mysql_real_escape_string($qb['meta_value']); ?>

<?php $r4 = mysql_query("SELECT post_id FROM wp_postmeta WHERE meta_value='$bn' AND meta_key='boulder'"); ?>
<?php while ($pib = mysql_fetch_assoc($r4)) { ?>
	<?php $pi5=$pib['post_id']; ?>
<?php $r5 = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='routename' AND post_id='$pi5'"); ?>

	<div class="bouldermeta-listroutes">
	<?php while ($pirn = mysql_fetch_assoc($r5)) { ?>

	<?php echo '<img width="15" height="15" src="'.get_template_directory_uri().'/images/arrow1.jpg" alt="route icon">&nbsp;&nbsp;<a href=" '.esc_url(post_permalink($pi5)).' ">' .$pirn['meta_value']. '</a>&nbsp;&nbsp;'; ?>
									<?php } ?>
	</div><!----bouldermeta-listroutes---->
<?php } ?>

</div><!-----.bouldermeta-namelistroutes---->

</div><!--------.climbingareapage-bouldermeta---->
<?php } ?>
<?php } ?>
<?php } ?>

</div><!-------.climbingareapage-boulderlist------>
</div><!------.climbingareapage-boulderlisting------->

<?php edit_post_link( __( 'Edit Post', 'rockclimbing' ), '<span class="edit-link">', '</span>' ); ?>
</div><!-------.climbingareapage-areainfo------>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rockclimbing' ), 'after' => '</div>' ) ); ?>
</div><!--.climbingareapage-->

</article><!-- #post-<?php the_ID(); ?> -->
