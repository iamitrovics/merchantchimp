<?php
/**
 * Template Name: Contact Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


    <div id="contact-inner">
        <div class="container">
            <div class="row contact-intro">

                <div class="contact-content col">
                    <h1><?php the_field('main_title_contact_intor'); ?></h1>
                    <h6><?php the_field('hours_label_contact'); ?></h6>
                    <p><?php the_field('hours_value_contact'); ?></p>
                    <h6><?php the_field('location_label_contact'); ?></h6>
                    <address><?php the_field('company_address_contact'); ?></address>
                </div>
                <!-- /.contact-content -->
                <div class="contact-map col">
                    <?php the_field('map_code_contact_page'); ?>
                </div>
                <!-- /.contact-map -->
            
            </div>
            <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                    <div class="contact-form">
                        <header>
                            <h2><?php the_field('main_title_form_contact'); ?></h2>
                            <?php the_field('content_block_form_contact'); ?>
                        </header>
                        <?php echo do_shortcode('[gravityform id="1"  title="false" description="false" ajax="true" tabindex="49"]'); ?>
                        <div class="or-area">
                            <?php the_field('content_cta_contact'); ?>
                            <a href="tel:<?php the_field('phone_number_contact_page'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_cta_contact'); ?></span></a> 
                        </div>
                        <!-- /.or-area -->

                    </div>
                    <!-- /.contact-form -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blogs -->
        

<?php get_footer(); ?>
