<?php
/**
 * The template part used for boulder page.
 *
 * @package rockclimbing
 * @since rockclimbing 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div id="boulder_page" class="boulderpage">
 
<header class="boulderpage-header">
	<div id="boulderimg" class="boulderpage-img">
		<?php the_post_thumbnail(array(600,400)); ?>
	</div><!--.boulderpage-img-->

<h1><?php echo '<img width="25" height="25" src="'.get_template_directory_uri().'/images/chalkbag1.jpg" alt="area icon">' ?>&nbsp;&nbsp;<?php the_title(); ?></h1>

<?php $ti=get_the_title(); ?>
<?php $re = mysql_query("SELECT post_id FROM wp_postmeta WHERE meta_key='boulder' AND meta_value='$ti'"); ?>
<?php while ($rw = mysql_fetch_assoc($re)) { ?>
	<?php $p=$rw['post_id']; ?>
<?php $re1 = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='area' AND post_id='$p'"); ?>
<?php while ($rw1 = mysql_fetch_assoc($re1)) { ?>
	<?php $a=$rw1['meta_value']; ?>
                                       <?php } ?>
<?php $re2 = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='locationmap' AND post_id='$p'"); ?>
<?php while ($rw2 = mysql_fetch_assoc($re2)) { ?>
	<?php $lm=$rw2['meta_value']; ?>
                                       <?php } ?>
<?php } ?>

<div class="boulderpage-header-in">
<?php echo 'in&nbsp;&nbsp;<a href=" '.esc_url(get_permalink(get_page_by_title($a))).' " title="Area Page">'.$a.'</a>'; ?>

<?php echo '&nbsp;&nbsp;<a href="#" onmouseover="return mappopup()"><img src="'.get_template_directory_uri().'/images/map_app.ico" width="30" height="30" title="Location Map">&nbsp;&nbsp;'.$lm.'</a>' ?>
</div><!----.boulderpage-header-in----->

<div class="boulderpage-mappopup" style="display:none;">
<?php //<img src="" width="100" height="100"> ?>
</div>

<div class="pageheader-menu">
	<div class="addnewroute">
<?php echo '<img src="'.get_template_directory_uri().'/images/newrouteicon.jpg" width="200" height="100">' ?>
		<h2>add new route</h2>
	</div><!---.addnewroute--->

	<div class="addnewboulder">
<?php echo '<img src="'.get_template_directory_uri().'/images/addnew.jpg" width="200" height="100">' ?>
		<h2>add new boulder</h2>
	</div><!---.addnewboulder--->
	
	<div class="pageheader-locationmap">
<?php echo '<a href="#" onmouseover="return mappopup()"><img src="'.get_template_directory_uri().'/images/map_app.ico" width="200" height="100" title="Location Map"></a>' ?>

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

</header><!------ .boulderpage-header ------>
 
<div class="boulderpage-boulderinfo">
     <div class="boulderpage-boulderinfo-about"> 
           <h1>About
<span class="aboutmap">See on Map</span>
			<span class="addlink">Add</span></h1>
	<?php the_content();?>
	</div><!----------boulderpage-boulderinfo-about----->

<div class="boulderpage-routelisting">

<h1 style="font-size:15px;font-weight:800;color:#036386;">Routes on this Boulder<span class="addlink">Add</span></h1>

<div class="boulderpage-routelist">

<?php $t=get_the_title(); ?>
<?php $b=mysql_real_escape_string($t); ?>

<?php $result = mysql_query("SELECT post_id FROM wp_postmeta WHERE meta_key='boulder' AND meta_value='$b'"); ?>
<?php while ($row = mysql_fetch_assoc($result)) { ?>
	<?php $pi=$row['post_id']; ?>

	<div class="boulderpage-routemeta">
<?php echo '<img src="'.get_template_directory_uri().'/images/descender.jpg" width="40" height="30">' ?>
		<div class="routeno">
<?php $r2 = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='routeno' AND post_id='$pi'"); ?>
<?php while ($rno = mysql_fetch_assoc($r2)) { ?>
	<?php echo $rno['meta_value']; ?>
<?php } ?>
		</div><!----------.routeno------>

		<div class="routemeta-name">
<?php $r3 = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='routename' AND post_id='$pi'"); ?>
<?php while ($rname = mysql_fetch_assoc($r3)) { ?>
		<?php echo '<a href=" '.esc_url(post_permalink($pi)).' ">'.$rname['meta_value'].'</a>'; ?>
						<?php 	} ?>
<?php $r4 = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='grade' AND post_id='$pi'"); ?>
<?php while ($grade = mysql_fetch_assoc($r4)) { ?>

<div class="routemeta-name-grade">
				<?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$grade['meta_value']; ?>
						<?php 	} ?>
</div><!-----routemeta-name-grade------->

</div><!----routemeta-name---->

<div class="routeinfo-details">
<span style="color:#58acfa;font-size:10px;font-weight:700;">First Ascent :</span>
<?php $r5 = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='firstascent' AND post_id='$pi'"); ?>
<?php while ($fa = mysql_fetch_assoc($r5)) { ?>

	<?php echo '<span style="font-size:12px">&nbsp'.$fa['meta_value'].'</span>'; ?>
						<?php 	} ?>

</div><!----routeinfo-details---->

</div><!--------.boulderpage-routemeta---->
<?php } ?>
</div><!--------.boulderpage-routelist------->

</div><!------.boulderpage-routelisting----->

        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rockclimbing' ), 'after' => '</div>' ) ); ?>
        <?php //edit_post_link( __( 'Edit', 'rockclimbing' ), '<span class="edit-link">', '</span>' ); ?>

</div><!------- .boulderpage-boulderinfo----->

</div><!-----------.boulderpage------->

</article><!-- #post-<?php the_ID(); ?> -->
