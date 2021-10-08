<?php
/**
 * Template Name: Areas We Serve
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

	<header id="artwork-header">
	<img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/shape1.png" class="l-headerbg"> 
	<img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/headerbg.png" class="r-headerbg">                  
		<div class="caption">

			<div class="container">
				<div class="image-artwork-mob">
					<img src="<?php the_field('featured_image_mobile_areas_header'); ?>" alt="">
				</div>
				<h1><?php the_field('main_title_areas_header'); ?></h1>
				<?php the_field('content_block_areas_header'); ?>
				<a href="tel:<?php the_field('phone_number_areas_header'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_areas_header'); ?></span></a>
			</div>
		</div>
			<div class="image-artwork">
			<div class="container container-new">
				<img src="<?php the_field('featured_image_header_areas'); ?>" alt="">
			</div>
		</div>
		<!-- // caption  -->
        <div id="booking-div-wrap">
            <div class="container">
                <div id="booking-div">
                    <div class="book-wrapper">

                        <div class="col-intro">
                            <h3>Get a Quote</h3>
                        </div>

                        <div class="col-form">

                            <?php echo do_shortcode('[gravityform id="2"  title="false" description="false" ajax="true"]'); ?>

                        </div>
                        <!-- // cok  -->

                    </div>
                    <!-- // row  -->
                </div>
                <!-- /#booking-div -->
            </div>
        </div>
        <!-- /#booking-div-wrap -->
		</div>
	</div>
	<!-- /#booking-div-wrap -->
	</header>
    <div id="areas-listing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Locations We Cover</h2>
                    <ul class="locations-item">
                    <?php
                        $loop = new WP_Query( array( 'post_type' => 'cities', 'posts_per_page' => -1) ); ?>  
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <a href="<?php echo get_permalink(); ?>"><li class="locations-title"><?php the_title(); ?></li></a>
                                
                        <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?> 
                    </ul>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div> 
    <!-- /.areas-listing -->
    <div id="industries-listing">
        <section id="industries-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <header>
                        <!--<span class="title">Supporting Businesses </span>-->
                        <h3><?php the_field('main_title_areas_industry'); ?></h3>
                        <!--<h6>Assisting businesses to reach their true potential by decreasing monthly operating costs and enabling true next-day funding.</h6>-->
                    </header>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
                <div class="row">

                <?php
                $loop = new WP_Query( array( 'post_type' => 'industry', 'posts_per_page' => 15) ); ?>  
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-lg-4 col-md-6">
                    <div class="industries-box">
                        <h4><?php the_title(''); ?></h4>
                        <div class="industries-image">
                            <div class="overlay"></div>
                                <?php
                                $imageID = get_field('featured_image_cover_industry');
                                $image = wp_get_attachment_image_src( $imageID, 'ind-image' );
                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                ?> 

                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                            <a href="<?php echo get_permalink(); ?>"><span>Learn More</span></a>
                        </div>
                        <!-- /.industries-image -->
                    </div>
                    <!-- /.industries-box -->
                    </div>
                    <!-- /.col-lg-4 col-md-6 -->

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>      

                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- /#industries-list -->
    </div>
    <!-- /#industries-listing -->
	
	<?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

<?php get_footer(); ?>
