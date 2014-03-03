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
	<?php the_post_thumbnail(); ?>
</div><!--.climbingareapage-img-->
 <h1><img width="25" height="25" src="http://localhost/rock/wp-content/uploads/2014/02/area.jpg" alt="area icon">&nbsp;&nbsp;<?php the_title(); ?></h1>

</header><!-- .climbingareapage-header -->

<div class="climbingareapage-areainfo">
	<div class="climbingareapage-areainfo-about">
		<h1>About</h1>
        <?php the_content();?>

	</div><!---------.climbingareapage-areainfo-about----->

	<div class="climbingareapage-boulderlisting">

	<h1 style="font-size:15px;font-weight:800;color:#036386;">Boulders in the area</h1>
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

	<img width="30" height="30" src="http://localhost/rock/wp-content/uploads/2014/02/boulder.jpg" alt="boulder icon">
	<div class="bouldermeta-namelistroutes">

<!--
<?php echo '<h1 style="color:#0084b4;font-size:15px;font-weight:700;"><a href="<?php echo esc_url(post_permalink($pi2));?>"> '.$qb['meta_value']. '</a></h1>'; ?>
-->

<?php echo '<h1 style="color:#0084b4;font-size:15px;font-weight:700;"><a href="' . esc_url(post_permalink($pi2)) . '">' . $qb['meta_value'] . '</a></h1>'; ?>

<?php $bn=mysql_real_escape_string($qb['meta_value']); ?>

<?php $r4 = mysql_query("SELECT post_id FROM wp_postmeta WHERE meta_value='$bn' AND meta_key='boulder'"); ?>
<?php while ($pib = mysql_fetch_assoc($r4)) { ?>
	<?php $pi5=$pib['post_id']; ?>
<?php $r5 = mysql_query("SELECT meta_value FROM wp_postmeta WHERE meta_key='routename' AND post_id='$pi5'"); ?>

	<div class="bouldermeta-listroutes">
	<?php while ($pirn = mysql_fetch_assoc($r5)) { ?>

<!-- nk
	<php echo '<img width="15" height="15" src="http://localhost/rock/wp-content/uploads/2014/02/arrow1.jpg" alt="route icon">&nbsp;&nbsp;<a href="<php echo esc_url(post_permalink($pi5));>">' .$pirn['meta_value']. '</a>&nbsp;&nbsp;'; >
	<?php echo '<img width="15" height="15" src="http://localhost/rock/wp-content/uploads/2014/02/arrow1.jpg" alt="route icon">&nbsp;&nbsp' .  '<a href="' . esc_url(post_permalink($pi5)) . '">' . $pirn['meta_value'] . '</a>&nbsp;&nbsp;'; ?>
-->
	<?php echo '<img width="15" height="15" src=" ' . get_site_url() . '/wp-content/uploads/2014/02/arrow1.jpg" alt="route icon">&nbsp;&nbsp' .  '<a href="' . esc_url(post_permalink($pi5)) . '">' . $pirn['meta_value'] . '</a>&nbsp;&nbsp;'; ?>
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
