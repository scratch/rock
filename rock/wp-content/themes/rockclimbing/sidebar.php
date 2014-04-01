<?php
/**
* The Sidebar containing the main widget areas.
*
* @package rockclimbing
* @since rockclimbing 1.0
*/
?>

<div id="ldb">

<a href="#" onclick="return opendashboard()"><img src="http://localhost/turahalliguide/wp-content/uploads/2014/03/menu.jpg" width="40" height="40"></a>
</div>
<div id="leftdashboard" class="dashboard" style="display:none;">

<!-----------
<div id="leftdashboard" class="dashboard">

	<div id="dashboard-search">
		<?php get_search_form(); ?>
<?php //wp_ultimate_search_bar(); ?>
<?php echo do_shortcode("[ULWPQSF id=523]"); ?>

		Advanced Search
	</div><!------.dashboard-search----->  

<div class="climbingroutesarchive">
	<h1>Climbing Routes Archive
<img width="25" height="25" src="http://localhost/turahalliguide/wp-content/uploads/2014/02/archive.jpg"></h1>
<?php wp_nav_menu( array(
	 'theme_location' => 'climbingroutesarchive',
	     'menu_class' => 'mainlist',
	  ) ); ?> 
</div><!---climbingroutesarchive--->


<div id="spotlight" class="spotlight">
<h1>Spotlight</h1>
</div>
</div><!-- dashboard -->