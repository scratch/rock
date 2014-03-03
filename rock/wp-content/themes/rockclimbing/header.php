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


<?php //javascript file to enable old versions of ie to recognise html5. ?>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<?php //required hook for wp plugins.?>

<?php wp_head(); ?>

</head>


<?php //body tag for our theme ?>

<?php //<body <?php body_class(); ?> style="background-image:url(http://localhost/alright/wp-content/uploads/2014/01/Turahalli.jpg);background-attachment:fixed;background-color:#143058;"> ?>

<body <?php body_class(); ?> style="background-color:#fff;">

<div id="page" class="hfeed site"> 

<div id="rockclimbingheader" class="rockclimbing-header">
<div class="rockclimbing-header-wrapper">
	<h1>
<a href="http://localhost/alright/" title="Turahalli Guide" rel="home">Turahalli Guide</a>
		</h1>

<?php //<a href="#" class="signupbutton">sign up</a> ?>
<?php //<button type="button">Sign Up</button> ?>

<ul id="rockclimbing-header-menu">

	<?php wp_nav_menu( array( 
'theme_location' => 'siteheadermenu',
    'menu_class' => 'siteheadermenu-main',
	 ) ); ?>    
	
</ul>	
 
<div id="header-search">     
		<?php //get_search_form(); ?>
</div>

</div><!------------rockclimbing-header-wrapper--------->
</div><!------------rockclimbing-header----------->
<div class="pagecontainer">


