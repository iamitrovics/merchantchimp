<?php
/**
 * Template Name: Signup Landing Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('lp');
$container = get_theme_mod( 'understrap_container_type' );
?>

	<div id="top-bar--sign">
		<div class="container">
			<div class="top-bar--branding">
				<img src="<?php the_field('website_logo_general', 'options'); ?>" alt="<?php bloginfo('blogname'); ?>">
			</div>
			<!-- // branding  -->
			<div class="top-bar--cta">
				<a href="tel:<?php the_field('phone_number_top_cta_sign'); ?>" class="book"><span><i class="fas fa-phone-alt"></i>  Book a Call</span></a>
			</div>
			<!-- // cta  -->
		</div>
		<!-- // container  -->
	</div>
	<!-- // top bar sign  -->

	<header id="sign-header">
		<div class="container">
			<div class="header-text">
				<h1><?php the_field('hero_title_lp_sign'); ?></h1>
				<?php the_field('hero_text_lp_sign'); ?>
			</div>
			<!-- // text  -->
			<div class="header-form">
				<div class="inner-form">
					<h3><?php the_field('form_title_lp_sign'); ?></h3>
					<!-- <?php the_field('form_code_lp_sign'); ?> -->

					<!-- <?php echo do_shortcode('[contact-form-7 id="2751" title="Contact form 1"]'); ?> -->

					<form action="https://merchantchimp.iriscrm.com/postleads/t/e00296c95b1d85a04a46bb3c7c0ea419" method="POST" enctype="multipart/form-data" id="signForm">

					<!-- (required) Add this field to save visitor history -->
					<input type="hidden" name="visitor_tracking" value="" />

					<!-- (optional) Overwrite default Campaign -->
					<input type="hidden" name="campaign" value="Signup" />

					<!-- (optional) Overwrite default Lead Source -->
					<input type="hidden" name="source" value="Signup Page" />

					<!-- (optional) Example how to pass data to record sets -->
					<input type="text" name="full_name" value="" placeholder="Full Name *" required />
					<input type="text" name="dba_name" value="" placeholder="Company Name *" required />

					<input type="tel" name="phone_tel" value="" placeholder="Phone Number *" required />
					<input type="email" name="email_field" value="" placeholder="Email Address *" required />

					<input type="submit" value="Get Started">

					</form>

				</div>
				<!-- // inner  -->
				<div class="cert-lp">
					<?php if( have_rows('certificate_list_footer', 'options') ): ?>
						<?php while( have_rows('certificate_list_footer', 'options') ): the_row(); ?>
							<img src="<?php the_sub_field('image'); ?>" alt="">							   
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<!-- // certs  -->
			</div>
			<!-- // image  -->
		</div>
		<!-- // container  -->
		<!-- <img src="<?php bloginfo('template_directory'); ?>/img/bg/top-bg.png" alt="" class="shape-left"> -->
		<!-- <img src="<?php bloginfo('template_directory'); ?>/img/bg/headerbg.png" alt="" class="shape-right"> -->
	</header>
	<!-- // sing header  -->

	<div id="sign-process">
		<div class="container">
			<header>
				<span class="title"><?php the_field('small_title_sign_process'); ?></span>
				<h2><?php the_field('section_title_sign_process'); ?></h2>
				<img src="<?php bloginfo('template_directory'); ?>/img/ico/payment_logos_2.png" alt="">
				<h3><?php the_field('section_subtitle_process_signn'); ?></h3>
			</header>
			<!-- // header  -->
			<div class="row">

				<?php if( have_rows('process_list_sign_landing') ): ?>
					<?php while( have_rows('process_list_sign_landing') ): the_row(); ?>

					<div class="col-md-6 col-lg-4">
						<div class="process-box">
							<div class="proces-ico-wrap">
								<div class="num"><span><?php the_sub_field('number'); ?></span></div>
								<div class="process-ico">
									<img src="<?php the_sub_field('icon'); ?>" alt="">				
								</div>
								<!-- /.process-ico --> 
						</div>
						<!-- /.proces-ico-wrap -->
						<p><?php the_sub_field('description'); ?></p>
						</div>
						<!-- /.process-box -->
					</div>
					<!-- // col  -->

					<?php endwhile; ?>
				<?php endif; ?>
			
			</div>
			<!-- // row  -->
		</div>
		<!-- // continer  -->
	</div>
	<!-- // sign process  -->

	<section id="why-sign">
		<img src="<?php bloginfo('template_directory'); ?>/img/bg/shape-right.png" alt="" class="shape-right">

		<div class="container">
			<header>
				<span class="title"><?php the_field('small_title_why_sign'); ?></span>
				<h3><?php the_field('section_title_why_lp'); ?></h3>
			</header>
			<!-- // haeder  -->
			<div class="row">
				<?php if( have_rows('why_list_lp_sign') ): ?>
					<?php while( have_rows('why_list_lp_sign') ): the_row(); ?>

					<div class="col-md-6 col-lg-4">
						<div class="process-box">
							<div class="proces-ico-wrap">
								<div class="process-ico">
									<img src="<?php the_sub_field('icon'); ?>" alt="">				
								</div>
								<!-- /.process-ico --> 
						</div>
						<!-- /.proces-ico-wrap -->
							<h3><?php the_sub_field('title'); ?></h3>
							<p><?php the_sub_field('description'); ?></p>
						</div>
						<!-- /.process-box -->
					</div>
					<!-- // col  -->

					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<!-- // row  -->
		</div>
		<!-- // container  -->
	</section>
	<!-- // sign  -->

    <section id="partners-list">
        <div class="container">
            <header>
                <h3><?php the_field('section_title_part_sign'); ?></h3>
            </header>
            <div class="partners">

                <?php if( have_rows('partners_list_gen', 'options') ): ?>
                <?php while( have_rows('partners_list_gen', 'options') ): the_row(); ?>

                    <div class="partner-logo">
                        <img src="<?php the_sub_field('company_logo'); ?>" alt="">
                    </div>
                    <!-- // logo  -->

                <?php endwhile; ?>
                <?php endif; ?>
                                    
            </div>
            <!-- // partners  -->
            <footer>
                <small><?php the_field('bottom_notice_partner_sign'); ?></small>
            </footer>
        </div>
        <!-- // container  -->
    </section>
    <!-- // partners list  -->	

    <section id="testimonials" class="inner-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header>
                <span class="title"><?php the_field('small_title_reviews_sign'); ?></span>
                <h3><?php the_field('section_title_sign_reviews'); ?></h3>
                </header>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="testimonial-slider--block container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider">

                    <?php
                    $post_objects = get_field('reviews_list_lp_sign');

                    if ($post_objects): ?>
                        <?php foreach ($post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
								
                                <div>
                                    <div class="testimonial-box">
                                        <blockquote>
                                            <?php the_field('testimonials_content'); ?>
                                        </blockquote>
                                        <footer>
                                            <span class="author"><?php the_title(''); ?> <br><small class="position"><?php the_field('position_test'); ?></small></span>
                                            <!-- /.author -->
                                        </footer>
                                        <div class="testimonial-icon">
                                            <i class="fab fa-skyatlas"></i>
                                        </div>
                                        <!-- /.testimonial-icon -->
                                    </div>
                                    <!-- /.testimonial-box -->
                                </div>

                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>
 

                </div>
                <!-- /#testimonial-slider -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.testimonial-slider--block container -->
    </section>
    <!-- /#testimonials -->	

	<div id="booking-block-wrap" class="cta-wrap--sign">
		<div class="container">
			<div class="cta-content">
				<h2><?php the_field('cta_title_bottom_sign'); ?></h2>
				<a href="<?php the_field('button_link_bottom_cta_sign'); ?>" class="btn-cta"><?php the_field('button_label_cta_bottom'); ?></a>
			</div>
			<!-- // cta content  -->
		</div>
		<!-- // container  -->
	</div>
	<!-- // booking  -->

	<div class="copy-bar--sign">
		<div class="container">
			<small><?php the_field('trademark_notice', 'options'); ?> </small>
			<small>©<?php echo date("Y"); ?>  <?php the_field('copyright_notice', 'options'); ?></small>			
		</div>
	</div>
	<!-- // copy bar  -->
	<script>
		jQuery(function() {
	jQuery('#booking-block-wrap .cta-content a.btn-cta').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = jQuery(this.hash);
		target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			jQuery('html, body').animate({
			scrollTop: target.offset().top
			}, 1000);
			return false;
		}
		}
	});
	});  
	</script>
<?php get_footer('lp'); ?>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

<script>
$("#signForm").validate();
</script>

<script>
	// Sticky header
	jQuery(window).scroll(function() {
	if ($(this).scrollTop() > 60){  
		$('#top-bar--sign').addClass("sticky-bar");
	}
	else{
		$('#top-bar--sign').removeClass("sticky-bar");
	}
});



</script>

