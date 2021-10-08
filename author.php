<?php
/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="blogs" class="blogs-author">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_author(); ?></h1>
			</div>
			<!-- /.col-md-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

   <div class="container">
      <div class="row blog-list">

       <?php
          while(have_posts()): the_post();
            ?>
                              
            <div class="col-md-6">
                <div class="blog-box">
                <div class="blog-image">

                     <?php 
                     $values = get_field( 'featured_image_blog' );
                     if ( $values ) { ?>

                        <?php
                        $imageID = get_field('featured_image_blog');
                        $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                        ?> 

                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 

                     <?php 
                     } else { ?>

                        <img src="<?php bloginfo('template_directory'); ?>/img/misc/blogs.jpg" alt="">

                     <?php } ?>

                    <a href="<?php echo get_permalink(); ?>"></a>
                </div>
                <!-- /.blog-image -->
                <div class="blog-text">
                    <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(''); ?></a></h3>
                    <div class="blog-content">
                       <?php the_field('excerpt_text'); ?>
                    </div>
                    <footer>
                        <div class="article-info">
                            <span class="date"><i class="far fa-clock"></i><?php echo get_the_date( 'F j, Y' ); ?></span>
                            <span class="author">Author : <?php the_author(); ?></span>
                        </div>
                        <!-- /.article-info -->
                        <div class="readmore">
                            <a href="<?php echo get_permalink(); ?>">Read More</a>
                        </div>
                        <!-- /.readmore -->
                    </footer>
                </div>
                <!-- /.blog-text -->
                </div>
                <!-- /.blog-box -->
            </div>
            <!-- /.col-md-6 -->                           
          
        <?php
      endwhile;
      ?>

      </div>
      <!-- /.row -->

      <nav class="pagination-block">
        <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function ?>
      </nav>    

   </div>
   <!-- /.container -->

   <?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

<?php get_footer(); ?>
