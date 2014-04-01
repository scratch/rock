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
	<?php the_post_thumbnail(); ?>
</div><!--.boulderpage-img-->
<h1><?php echo '<img width="25" height="25" src="'.get_site_url().'/wp-content/uploads/2014/03/chalkbag1.jpg" alt="area icon">' ?>&nbsp;&nbsp;<?php the_title(); ?></h1>

<div class="areamenu">
add new boulder &nbsp;&nbsp; photos videos comment 
<?php echo '<img src="'.get_site_url().'/wp-content/uploads/2014/03/map_app.ico" width="20" height="20" title="Location Map">' ?>&nbsp;map</div>

</header><!------ .boulderpage-header ------>
 
<div class="boulderpage-boulderinfo">
     <div class="boulderpage-boulderinfo-about"> 
           <h1>About
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

<?php //stars Description comment share?>
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
