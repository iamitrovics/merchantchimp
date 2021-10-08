<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>



	<script src="<?php bloginfo('template_directory'); ?>/js/theme.min.js"></script>

	<?php wp_footer(); ?>

</body>
</html>

