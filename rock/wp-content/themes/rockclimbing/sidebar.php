<?php
/**
* The Sidebar containing the main widget areas.
*
* @package rockclimbing
* @since rockclimbing 1.0
*/
?>

<div class="dashboard">
	
	<div id="dashboard-search">
		<?php get_search_form(); ?>
		Advanced Search
	</div><!------.dashboard-search----->
  
<div class="climbingroutesarchive">
	<h1><span style="color:rgb(106,104,54);">Climbing Routes Archive</span>
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