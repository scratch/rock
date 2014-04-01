<?php
/**
 * rockclimbing functions and definitions
 *
 * @package rockclimbing
 * @since rockclimbing 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *$content_width is a global variable that sets the maximum width of content (such as uploaded images).  this is for the content area div. 
 * @since rockclimbing 1.0
 */

if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */

if ( ! function_exists( 'rockclimbing_setup' ) ):

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme *hook, which runs before the init hook. The init hook is too *late for some features, such as indicating support post *thumbnails. 
 
 * @since rockclimbing 1.0
 */

function rockclimbing_setup() {
 
    /**
     * Custom template tags for this theme in inc/.
     */
    
require( get_template_directory() . '/inc/template-tags.php' );
 
    /**
     * Custom functions that act independently of the theme templates
     */
    
require( get_template_directory() . '/inc/tweaks.php' );
 
    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     * If you're building a theme based on rockclimbing, use a find and replace
     * to change 'rockclimbing' to the name of your theme in all the template files
     */
    
load_theme_textdomain( 'rockclimbing', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to head
     */
    
add_theme_support( 'automatic-feed-links' );
add_theme_support ('post-thumbnails');
 
if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
			'label' => 'Secondary Image',
			'id' => 'secondary-image',
			'post_type' => 'post'
 ) );
 }

add_post_type_support ( 'article', 'post-formats' );

    /**
     * Enable support for the Aside Post Format
     */
    
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video', 'audio', 'article' ) );
 
    /**
     * This theme uses wp_nav_menu() in 2 location.
     */
    
register_nav_menus( array(
'climbingroutesarchive'  => __( 'Climbing Routes Archive', 'Turahalli Climbing Routes Archive'),
'siteheadermenu'  => __( 'Site Header Menu', 'Turahalli Site Header Menu'),
'sidebarleft' => __( 'Sidebar Left Nav', 'Turahalli Site Sidebar' ),
	) );
}
endif; // telling wp to run rockclimbing_setup when it runs aftersetuptheme
add_action( 'after_setup_theme', 'rockclimbing_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since rockclimbing 1.0
 */

function rockclimbing_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Primary Widget Area', 'rockclimbing' ),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
 
    register_sidebar( array(
        'name' => __( 'Secondary Widget Area', 'rockclimbing' ),
        'id' => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'rockclimbing_widgets_init' );


function get_the_content_with_formatting ($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
	$content = get_the_content($more_link_text, $stripteaser, $more_file);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}


/**
* load stylesheet and JS files
 * Enqueue scripts and styles
 */
function rockclimbing_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

wp_enqueue_script(
		'custom-script',
	get_stylesheet_directory_uri() . '/js/custom_script.js',
		array( 'jquery' )
	);
 
//loading comment-reply.js if we’re on a single post or page, comments are open, and threaded comments are enabled.
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
   				 }
 //mobile friendly navigation JS
    wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
 //using keyboard arrow keys to navigate images
    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    										}
}
add_action( 'wp_enqueue_scripts', 'rockclimbing_scripts' );