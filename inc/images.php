<?php
/**
 * Custom image sizes
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// general
add_image_size('preview-image', 300, 200, TRUE);

// home
add_image_size('industry-image', 370, 247, TRUE);

// cities
add_image_size('city-image', 576, 366, TRUE);

// blog image
add_image_size('blog-image', 570, 380, TRUE);
add_image_size('blogcover-image', 770, 513, TRUE);
add_image_size('blogfeat-image', 1000, 9999, FALSE);

// industry
add_image_size('ind-image', 368, 246, TRUE);

// marketing
add_image_size('marketing-image', 570, 447, TRUE);
add_image_size('video-image', 670, 378, TRUE);
add_image_size('test-image', 470, 470, TRUE);
