<?php
/**
 * AGENCY functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AGENCY
 */




if ( ! defined( 'AGENCY_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'AGENCY_VERSION', '1.0.0' );
}

if ( ! function_exists( 'AGENCY_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function AGENCY_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on AGENCY, use a find and replace
		 * to change 'AGENCY' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'AGENCY', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption','custom-fields' ) );
add_image_size('icon_logo_image_small',10,8,true);
	add_image_size('icon_logo_image_small',10,8,true);
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

		add_theme_support( 'custom-header', array( 'header-text' => false ) );

		/* custom-header */
		$args = array(
    	'width'         => 1920,
    	'height'        => 500,
		);
		add_theme_support( 'custom-header', $args );

		/* Editor style */
		add_editor_style();

		/* Register menu */
		register_nav_menus( array(
			'primary' => esc_html__( 'Main Navigation', 'AGENCY' )
		) );

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
				'AGENCY_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'AGENCY_setup' );


function AGENCY_google_font_url() {
    $font_url = '';
    if ( 'off' !== esc_html__( 'on', 'AGENCY' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Lato:400,400i,700|Prata' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}


/**
 * Unique ID.
 */

function AGENCY_unique_id( $prefix = '' ) {
  static $id_counter = 0;
  if ( function_exists( 'wp_unique_id' ) ) {
    return wp_unique_id( $prefix );
  }
  return $prefix . (string) ++$id_counter;
}


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function AGENCY_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'AGENCY_content_width', 640 );
}
add_action( 'after_setup_theme', 'AGENCY_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


function AGENCYscripts() {
	wp_enqueue_style( 'AGENCY-style', get_stylesheet_uri() );


	

    wp_enqueue_style('AGENCY-flexslider', get_template_directory_uri().'/css/flexslider.css');

    wp_enqueue_script('jquery');

 

    wp_enqueue_script('AGENCY-jquery.flexslider', get_template_directory_uri().'/js/jquery.flexslider.js');

    wp_enqueue_script('AGENCY-main-js', get_template_directory_uri().'/js/main.js');
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'AGENCYscripts' );
function AGENCY_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'AGENCY' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'AGENCY' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Page Sidebar', 'AGENCY' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'AGENCY' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'AGENCY_widgets_init' );


// Google Fonts
if ( ! function_exists( 'regal_wp_fonts_url' ) ) :
    function regal_wp_fonts_url() {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = '';
        if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'regal-wp' ) ) {
            $fonts[] = 'Montserrat:400,700';
        }
        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts ) ),
                'subset' => urlencode( $subsets ),
            ), 'https://fonts.googleapis.com/css' );
        }
        return $fonts_url;
    }
endif;
function regal_wp_fonts_scripts() {
    wp_enqueue_style( 'regal_wp-fonts', regal_wp_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'regal_wp_fonts_scripts' );


// Google Fonts
if ( ! function_exists( 'regal_wp_fonts_url1' ) ) :
    function regal_wp_fonts_url1() {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = '';
        if ( 'off' !== _x( 'on', 'Droid+Serif: on or off', 'regal-wp' ) ) {
            $fonts[] = 'Droid+Serif:400,700,400italic,700italic';
        }
        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts ) ),
                'subset' => urlencode( $subsets ),
            ), 'https://fonts.googleapis.com/css' );
        }
        return $fonts_url;
    }
endif;
function regal_wp_fonts_scripts1() {
    wp_enqueue_style( 'regal_wp-fontss', regal_wp_fonts_url1(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts1', 'regal_wp_fonts_scripts1' );


// Load all scripts and stylesheets
function regal_wp_load_styles() {
  
    wp_enqueue_style( 'regal-style' , get_template_directory_uri()."css/style.css",false);

}
add_action('wp_enqueue_scripts', 'regal_wp_load_styles');
function regal_wp_load_scripts_footer() {
    
    wp_enqueue_script('regal-custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array('jquery'), '', false  );
}
// Load scripts in footer
add_action('wp_enqueue_scripts', 'regal_wp_load_scripts_footer');


   



require_once 'wp-bootstrap-navwalker.php';


require_once get_template_directory().'/inc/plugin-requires.php';


require_once get_template_directory().'/inc/services.php';
//require_once get_template_directory().'/inc/halim-options.php';
require_once(get_template_directory().'/theme-options/cs-framework.php');
require_once get_template_directory().'/inc/theme-element.php';
require_once get_template_directory().'/inc/theme-options.php';

if( in_array( 'kingcomposer/kingcomposer.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	require_once get_template_directory().'/kingcomposer/maps.php';
require_once get_template_directory().'/kingcomposer/element_heading.php';
//require_once get_template_directory().'/kingcomposer/functions.php';
	define( 'agencybusiness_KINGCOMPOSER_ACTIVED', true );
}


function cptui_register_my_cpts_services() {

	/**
	 * Post Type: services.
	 */

	$labels = [
		"name" => __( "services", "custom-post-type-ui" ),
		"singular_name" => __( "services", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "services", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "services", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields",'excerpt' ],
	];

	register_post_type( "services", $args );
}

add_action( 'init', 'cptui_register_my_cpts_services' );


function cptui_register_my_cpts_portfolio() {

	/**
	 * Post Type: services.
	 */

	$labels = [
		"name" => __( "portfolio", "custom-post-type-ui" ),
		"singular_name" => __( "portfolio", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "portfolio", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "portfolio", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields",'excerpt' ],
	];

	register_post_type( "portfolio", $args );
}

add_action( 'init', 'cptui_register_my_cpts_portfolio' );

function cptui_register_my_cpts_ourconsultant() {

	/**
	 * Post Type: ourconsultant.
	 */

	$labels = [
		"name" => __( "ourconsultant", "custom-post-type-ui" ),
		"singular_name" => __( "ourconsultant", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "ourconsultant", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "ourconsultant", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
	];

	register_post_type( "ourconsultant", $args );
}

add_action( 'init', 'cptui_register_my_cpts_ourconsultant' );


function cptui_register_my_cpts_aboutus() {

	/**
	 * Post Type: ourconsultant.
	 */

	$labels = [
		"name" => __( "aboutus", "custom-post-type-ui" ),
		"singular_name" => __( "aboutus", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "aboutus", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "aboutus", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
	];

	register_post_type( "aboutus", $args );
}

add_action( 'init', 'cptui_register_my_cpts_aboutus' );


include_once ('options.php');