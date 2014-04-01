<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 * Doctype tells the browser how to interpret the html its seeing
 * @package rockclimbing
 * @since rockclimbing 2.0
 */
?><!DOCTYPE html>

<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php //META INFO ?>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php

/*
* Print the <title> tag based on which page is being viewed.
*/

global $page, $paged;

/*
* every page except the front page, we want to show the current *pages title immediately followed by a pipe separator on the *right.
*/ 

/* wp_title( '|', true, 'right' ); */
 
/*
*Add the blog name.
*/
bloginfo( 'name' );
 
/*
*Add the blog description for the home/front page.
*/
$site_description = get_bloginfo( 'description', 'display' );

/*
*if the site has a site description and this is either the 
*home page or a static front page, display the site description.
*/
if ( $site_description && ( is_home() || is_front_page() ) )
echo " | $site_description";
 
?></title>


<?php //xfn(friends network) support and link to pingback ?>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_enqueue_script('jquery'); ?>
<?php //javascript file to enable old versions of ie to recognise html5. ?>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php comments_popup_script(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom_script.js" type="text/javascript"></script>

<?php //required hook for wp plugins.?>

<?php wp_head(); ?>

</head>


<?php //body tag for our theme ?>

<body <?php body_class(); ?> style="background-image:url(http://localhost/turahalliguide/wp-content/uploads/2014/03/sunset.jpg);background-attachment:fixed;opacity:1;background-color:#143058;">

<div id="bgdimg">
</div><!---.bgdimg--->

<body <?php body_class(); ?> >

<div id="page" class="hfeed site"> 

<div id="rockclimbingheader" class="rockclimbing-header">

<div class="rockclimbing-header-elements">

	<div id="rockclimbing-header-routesmenu">

<a href="#" onmouseover="return openroutesmenu()" title="Climbing Routes by Area"><img src="'.get_template_directory_uri().'/images/menu.jpg" width="40" height="40"></a>
	</div><!---.rockclimbing-header-routesmenu---->

      <div id="rchrm" class="climbingroutesarchive" style="display:none">
	<?php //<h1>Climbing Routes Archive</h1> ?>
<?php wp_nav_menu( array(
	 'theme_location' => 'climbingroutesarchive',
	     'menu_class' => 'mainlist',
	  ) ); ?> 
       </div><!---.climbingroutesarchive--->

	<h1>
<a href="<?php bloginfo('url'); ?>" title="Turahalli Guide" rel="home">Turahalli Guide</a>
	</h1>

<div id="header-search">     
		<?php //get_search_form(); ?>
	</div>

	<ul id="rockclimbing-header-menu">

	<?php wp_nav_menu( array( 
'theme_location' => 'siteheadermenu',
    'menu_class' => 'siteheadermenu-main',
	 ) ); ?>    
	
	</ul>	
	
</div><!----.rockclimbing-header-elements---->

</div><!------------.rockclimbing-header----------->
<div class="pagecontainer">


