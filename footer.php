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



	<footer id="page-footer">

		<div class="container">

			<div class="row">

				<div class="col">

					<div class="footer-sitemap">

						<h4><?php the_field('block_title_footer_1', 'options'); ?></h4>

						<div class="footer-block">

							<img src="https://merchantchimp.com/wp-content/uploads/2020/03/logo-sm.png" alt="" class="logo">

							<address><?php the_field('company_addres_footer', 'options'); ?></address>

						</div>

						<div class="phone">

							<span><?php the_field('phone_label_footer_company', 'options'); ?></span> <a href="tel:<?php the_field('phone_number_footer_company', 'options'); ?>"><?php the_field('phone_number_footer_company', 'options'); ?></a>

						</div>

						<div class="email">

							<a href="mailto:<?php the_field('email_address_footer_company', 'options'); ?>"><?php the_field('email_address_footer_company', 'options'); ?></a>

						</div>

						<div class="footer-socials">

							<ul>

								<?php if( have_rows('socials_list_general', 'options') ): ?>

								   <?php while( have_rows('socials_list_general', 'options') ): the_row(); ?>



										<?php if (get_sub_field('social_network') == 'Linkedin') { ?>

											<li><a href="<?php the_sub_field('link_to_social'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>

										<?php } elseif (get_sub_field('social_network') == 'Twitter') { ?>

											<li><a href="<?php the_sub_field('link_to_social'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>

										<?php } elseif (get_sub_field('social_network') == 'Facebook') { ?>

											<li><a href="<?php the_sub_field('link_to_social'); ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>

										<?php } elseif (get_sub_field('social_network') == 'Yelp') { ?>

											<li><a href="<?php the_sub_field('link_to_social'); ?>" target="_blank"><i class="fab fa-yelp"></i></a></li>

										<?php } ?>   



								   <?php endwhile; ?>

								<?php endif; ?>

							</ul>

						</div>

					</div>

					<!-- /.footer-sitemap -->

				</div>

				

				<div class="col">

					<div class="footer-sitemap">

						<h4><?php the_field('block_title_footer_2', 'options'); ?></h4>

						<?php wp_nav_menu( array( 'theme_location' => 'footer-sitemap' ) ); ?>

					</div>

					<!-- /.footer-sitemap -->

				</div>

				

				<div class="col">

					<div class="footer-sitemap">

						<h4><?php the_field('block_title_footer_3', 'options'); ?></h4>

						<?php wp_nav_menu( array( 'theme_location' => 'quick-sitemap' ) ); ?>

					</div>

					<!-- /.footer-sitemap -->

				</div>



				<div class="col">

					<div class="footer-sitemap">

						<h4><?php the_field('block_title_footer_4', 'options'); ?></h4>

						<div class="footer-certs">
								<?php if( have_rows('certificate_list_footer', 'options') ): ?>

								<?php while( have_rows('certificate_list_footer', 'options') ): the_row(); ?>
									<div class="logo-holder">

										<img src="<?php the_sub_field('image'); ?>" alt="">							   
										</div>
									<!-- // logo holder  -->
								<?php endwhile; ?>

								<?php endif; ?>

						</div>

						<!-- Custom tag - Start -->
						<ins class='dcmads' style='display:inline-block;width:90px;height:90px'
    data-dcm-placement='N510001.3933973MERCHANTCHIMP/B22733083.285642901'
    data-dcm-rendering-mode='iframe'
    data-dcm-https-only
    data-dcm-gdpr-applies='gdpr=${GDPR}'
    data-dcm-gdpr-consent='gdpr_consent=${GDPR_CONSENT_755}'
    data-dcm-addtl-consent='addtl_consent=${ADDTL_CONSENT}'
    data-dcm-resettable-device-id=''
    data-dcm-app-id=''>
  <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
</ins>
						<!-- Custom tag - End -->




					</div>

					<!-- /.footer-sitemap -->

				</div>

			</div>

			<!-- // certs  -->



			<div class="row">

				<div class="col-md-12">

					<div class="copy-bar">
						<small><?php the_field('trademark_notice', 'options'); ?> </small>
						<small>©<?php echo date("Y"); ?>  <?php the_field('copyright_notice', 'options'); ?></small>
					</div>

					<!-- /.copy-bar -->

				</div>

			</div>

			<!-- // row of copy bar  -->

			



		</div>

		<!-- /.container -->

	</footer>

	<!-- /#page-footer -->




	<script src="<?php bloginfo('template_directory'); ?>/js/theme.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/js/mdb.ligh.js"></script>

	<script>

		$('#blogs .blog-content').matchHeight();

		$('#blogs .blog-list .blog-box .blog-text h3').matchHeight();

	</script>



	<?php wp_footer(); ?>

	<?php if( get_field('footer_snippet_code', 'options') ): ?>
		<?php the_field('footer_snippet_code', 'options'); ?>
	<?php endif; ?>

</body>

</html>



