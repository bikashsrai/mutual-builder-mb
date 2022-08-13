<?php
/**
 * mutalbuilders functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mutalbuilders
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
require __DIR__ .'/inc/init.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mutalbuilders_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on mutalbuilders, use a find and replace
		* to change 'mutalbuilders' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mutalbuilders', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'mutalbuilders' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mutalbuilders_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'mutalbuilders_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mutalbuilders_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mutalbuilders_content_width', 640 );
}
add_action( 'after_setup_theme', 'mutalbuilders_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mutalbuilders_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mutalbuilders' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mutalbuilders' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mutalbuilders_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
/**
 * Register and Enqueue Styles.
 *
 */

function mutual_builders_register_styles() {

   $theme_version = wp_get_theme()->get( 'Version' );
   wp_enqueue_style( 'mutual-builders-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-bootstrap', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-uicons', get_template_directory_uri().'/assets/css/uicons-regular-rounded.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-flaticon', get_template_directory_uri().'/assets/fonts/flaticon.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-animate', get_template_directory_uri().'/assets/css/animate.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-slick', get_template_directory_uri().'/assets/css/slick.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-canvas', get_template_directory_uri().'/assets/css/off-canvas.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-magnific', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-rsmenu', get_template_directory_uri().'/assets/css/rsmenu-main.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-nivo', get_template_directory_uri().'/assets/inc/custom-slider/css/nivo-slider.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-preview', get_template_directory_uri().'/assets/inc/custom-slider/css/preview.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-spacing', get_template_directory_uri().'/assets/css/rs-spacing.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), $theme_version );
   wp_enqueue_style( 'mutual-builders-style', get_stylesheet_uri(), array(), $theme_version );


}

add_action( 'wp_enqueue_scripts', 'mutual_builders_register_styles' );
/**
 * Register and Enqueue Scripts.

 */
function mutual_builders_register_scripts() {

   $theme_version = wp_get_theme()->get( 'Version' );

   if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
   }

   wp_enqueue_script( 'mutual-builders-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3.min.js', array(), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-skills', get_template_directory_uri() . '/assets/js/skill.bars.jquery.js', array('jquery'), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-jquery-nivo-slider', get_template_directory_uri() . '/assets/inc/custom-slider/js/jquery.nivo.slider.js', array('jquery'), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-contact-form', get_template_directory_uri() . '/assets/js/contact.form.js', array('jquery'), $theme_version, true );
   wp_enqueue_script( 'mutual-builders-custom', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $theme_version, true );
// wp_script_add_data( 'twentytwenty-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', 'mutual_builders_register_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}