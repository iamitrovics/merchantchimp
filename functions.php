<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	// '/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	// '/woocommerce.php',                     Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	// srdjan includes
	'/cleanup.php',                         // Cleaning worpdress garbage
	'/images.php',                          // Image sizes
	'/settings.php',                        // Theme Settings
	'/customize.php',                       // Customize theme
	'/ctp.php',                             // Custom Post Types
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

require_once('wp_bootstrap_mobile_navwalker.php');

add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'post';
    remove_post_type_support( $post_type, 'editor');
}

// Custom Excerpt function for Advanced Custom Fields
function custom_field_excerpt() {
	global $post;
	$text = get_field('intro_content_post'); //Replace 'your_field_name'
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 15; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}


function get_video_thumbnail_uri( $video_uri ) {
	
	$thumbnail_uri = '';
	

	
	// determine the type of video and the video id
	$video = parse_video_uri( $video_uri );
	
	
	
	// get youtube thumbnail
	if ( $video['type'] == 'youtube' )
		$thumbnail_uri = 'http://img.youtube.com/vi/' . $video['id'] . '/hqdefault.jpg';
	
	// get vimeo thumbnail
	if( $video['type'] == 'vimeo' )
		$thumbnail_uri = get_vimeo_thumbnail_uri( $video['id'] );
	// get wistia thumbnail
	if( $video['type'] == 'wistia' )
		$thumbnail_uri = get_wistia_thumbnail_uri( $video_uri );
	// get default/placeholder thumbnail
	if( empty( $thumbnail_uri ) || is_wp_error( $thumbnail_uri ) )
		$thumbnail_uri = ''; 
	
	//return thumbnail uri
	return $thumbnail_uri;
	
}


/**
 * Parse the video uri/url to determine the video type/source and the video id
 */
function parse_video_uri( $url ) {
	
	// Parse the url 
	$parse = parse_url( $url );
	
	// Set blank variables
	$video_type = '';
	$video_id = '';
	
	// Url is http://youtu.be/xxxx
	if ( $parse['host'] == 'youtu.be' ) {
	
		$video_type = 'youtube';
		
		$video_id = ltrim( $parse['path'],'/' );	
		
	}
	
	// Url is http://www.youtube.com/watch?v=xxxx 
	// or http://www.youtube.com/watch?feature=player_embedded&v=xxx
	// or http://www.youtube.com/embed/xxxx
	if ( ( $parse['host'] == 'youtube.com' ) || ( $parse['host'] == 'www.youtube.com' ) ) {
	
		$video_type = 'youtube';
		
		parse_str( $parse['query'] );
		
		$video_id = $v;	
		
		if ( !empty( $feature ) )
			$video_id = end( explode( 'v=', $parse['query'] ) );
			
		if ( strpos( $parse['path'], 'embed' ) == 1 )
			$video_id = end( explode( '/', $parse['path'] ) );
		
	}
	
	// Url is http://www.vimeo.com
	if ( ( $parse['host'] == 'vimeo.com' ) || ( $parse['host'] == 'www.vimeo.com' ) ) {
	
		$video_type = 'vimeo';
		
		$video_id = ltrim( $parse['path'],'/' );	
					
	}
	$host_names = explode(".", $parse['host'] );
	$rebuild = ( ! empty( $host_names[1] ) ? $host_names[1] : '') . '.' . ( ! empty($host_names[2] ) ? $host_names[2] : '');
	// Url is an oembed url wistia.com
	if ( ( $rebuild == 'wistia.com' ) || ( $rebuild == 'wi.st.com' ) ) {
	
		$video_type = 'wistia';
			
		if ( strpos( $parse['path'], 'medias' ) == 1 )
				$video_id = end( explode( '/', $parse['path'] ) );
	
	}
	
	// If recognised type return video array
	if ( !empty( $video_type ) ) {
	
		$video_array = array(
			'type' => $video_type,
			'id' => $video_id
		);
	
		return $video_array;
		
	} else {
	
		return false;
		
	}
	
}


 /* Takes a Vimeo video/clip ID and calls the Vimeo API v2 to get the large thumbnail URL.
 */
function get_vimeo_thumbnail_uri( $clip_id ) {
	$vimeo_api_uri = 'http://vimeo.com/api/v2/video/' . $clip_id . '.php';
	$vimeo_response = wp_remote_get( $vimeo_api_uri );
	if( is_wp_error( $vimeo_response ) ) {
		return $vimeo_response;
	} else {
		$vimeo_response = unserialize( $vimeo_response['body'] );
		return $vimeo_response[0]['thumbnail_large'];
	}
	
}
/**
 * Takes a wistia oembed url and gets the video thumbnail url.
 */
function get_wistia_thumbnail_uri( $video_uri ) {
	if ( empty($video_uri) )
		return false;
	$wistia_api_uri = 'http://fast.wistia.com/oembed?url=' . $video_uri;
	$wistia_response = wp_remote_get( $wistia_api_uri );
	if( is_wp_error( $wistia_response ) ) {
		return $wistia_response;
	} else {
		$wistia_response = json_decode( $wistia_response['body'], true );
		return $wistia_response['thumbnail_url'];
	}
	
}

/**
 * Remove the slug from published post permalinks. Only affect our CPT though.
 */
function wpex_remove_cpt_slug( $post_link, $post, $leavename ) {
	if ( 'cities' != $post->post_type || 'publish' != $post->post_status ) {
		return $post_link;
	}
	$post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
	return $post_link;
}
add_filter( 'post_type_link', 'wpex_remove_cpt_slug', 10, 3 );


/**
 * Some hackery to have WordPress match postname to any of our public post types
 * All of our public post types can have /post-name/ as the slug, so they better be unique across all posts
 * Typically core only accounts for posts and pages where the slug is /post-name/
 */
function wpex_parse_request_tricksy( $query ) {
	// Only noop the main query
	if ( ! $query->is_main_query() )
		return;
	// Only noop our very specific rewrite rule match
	if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
		return;
	}
	// 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
	if ( ! empty( $query->query['name'] ) ) {
		$query->set( 'post_type', array( 'post', 'cities', 'page' ) );
	}
}
add_action( 'pre_get_posts', 'wpex_parse_request_tricksy' );

add_action( 'init', function() {
    remove_post_type_support( 'post', 'editor' );
    remove_post_type_support( 'page', 'editor' );
}, 99);

add_filter( 'gform_confirmation_anchor_2', '__return_false' );

add_filter( 'gform_confirmation_anchor_4', '__return_false' );


function fb_filter_query( $query, $error = true ) {

    if ( is_search() ) {
        $query->is_search = false;
        $query->query_vars['s'] = false;
        $query->query['s'] = false;

        if ( $error == true )
            $query->is_404 = true;
    }
}

add_action( 'parse_query', 'fb_filter_query' );
add_filter( 'get_search_form', function() { return null;} );