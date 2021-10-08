<?php
/**
 * Theme basic setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

add_action( 'after_setup_theme', 'understrap_setup' );

if ( ! function_exists ( 'understrap_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function understrap_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on understrap, use a find and replace
		 * to change 'understrap' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'understrap', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'understrap' ),
			'footer-sitemap' => __( 'Footer Sitemap Menu', 'understrap' ),
			'quick-sitemap' => __( 'Quick Links Menu', 'understrap' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Adding support for Widget edit icons in customizer
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'understrap_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Set up the WordPress Theme logo feature.
		add_theme_support( 'custom-logo' );

		// Check and setup theme default settings.
		understrap_setup_theme_default_settings();

	}
}


add_filter( 'excerpt_more', 'understrap_custom_excerpt_more' );

if ( ! function_exists( 'understrap_custom_excerpt_more' ) ) {
	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function understrap_custom_excerpt_more( $more ) {
		if ( ! is_admin() ) {
			$more = '';
		}
		return $more;
	}
}

add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );

if ( ! function_exists( 'understrap_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function understrap_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . ' [...]<p><a class="read-more-btn" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'Read More',
			'understrap' ) . '</a></p>';
		}
		return $post_excerpt;
	}
}


// Excerpt
class Excerpt {

	// Default length (by WordPress)
	public static $length = 55;
  
	// So you can call: my_excerpt('short');
	public static $types = array(
		'veryshort' => 20,
		'short' => 25,
		'regular' => 50,
		'long' => 100
	  );
  
	/**
	 * Sets the length for the excerpt,
	 * then it adds the WP filter
	 * And automatically calls the_excerpt();
	 *
	 * @param string $new_length 
	 * @return void
	 * @author Baylor Rae'
	 */
	public static function length($new_length = 55) {
	  Excerpt::$length = $new_length;
  
	  add_filter('excerpt_length', 'Excerpt::new_length');
  
	  Excerpt::output();
	}
  
	// Tells WP the new length
	public static function new_length() {
	  if( isset(Excerpt::$types[Excerpt::$length]) )
		return Excerpt::$types[Excerpt::$length];
	  else
		return Excerpt::$length;
	}
  
	// Echoes out the excerpt
	public static function output() {
	  the_excerpt();
	}
  
  }
  
  // An alias to the class
  function my_excerpt($length = 55) {
	Excerpt::length($length);
  }
  
  function new_excerpt_more( $more ) {
	return '';
  }
  add_filter( 'excerpt_more', 'new_excerpt_more' );
  