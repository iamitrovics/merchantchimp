//@prepros-prepend modernizr.js
//@prepros-prepend jquery.min.js
//@prepros-prepend bootstrap4\bootstrap.bundle.js
//@prepros-prepend easing.js
//@prepros-prepend skip-link-focus-fix.js
//@prepros-prepend slick.js
//@prepros-prepend jquery.matchHeight.js
//@prepros-prepend moment\moment-with-locales.min.js
//@prepros-prepend jquery.fancybox.min.js
//@prepros-prepend _main.js
//@prepros-prepend bootstrap-select.js//
//@prepros-prepend jquery-ui.min.js//
//@prepros-prepend wow.min.js
//@prepros-prepend TweenMax.min.js//
//@prepros-prepend slidenav.js//





(function($) {
	jQuery(document).ready(function() {

		new WOW().init();

		// Sticky header
		jQuery(window).scroll(function() {
		  if ($(this).scrollTop() > 60){  
		      $('#top-area').addClass("sticky");
		    }
		    else{
		      $('#top-area').removeClass("sticky");
		    }
		});

		$('.blog-main-content a').attr("target","_blank");


	 	jQuery("#top__mobile .menu-btn").click(function(){
	    
	    	jQuery(".menu-overlay").addClass("active-overlay");
	     	jQuery("html,body").addClass("fixed");
	    	 jQuery('.main-menu-sidebar').addClass("menu-active");
	    });
	   
	    jQuery('.close-menu-btn, .menu-overlay, .main-menu-sidebar .nav-links>li>a').click(function(){
	     	jQuery('.main-menu-sidebar').removeClass("menu-active");
	      	jQuery(".nav-links").fadeIn(300);
	      	jQuery("html,body").removeClass("fixed");
	      	jQuery(".menu-overlay").removeClass("active-overlay");
	    	jQuery("html,body").removeClass("fixed");
	    });

		$('#testimonial-slider').slick({
		  infinite: true,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  dots: true,
		  arrows: true,
		  autoplay: true,
		  autoplaySpeed: 8000,
		  responsive: [
		  {
		    breakpoint: 1199,
		    settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1,
		        autoplay: true,
		        dots: true,
		        autoplaySpeed: 8000
		      }
		    },
		    {
		    breakpoint: 767,
		    settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        autoplay: true,
		        dots: true,
		        autoplaySpeed: 8000
		      }
		    },
		  ]
		});

		$('#industries-slider').slick({
		  infinite: true,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  dots: false,
		  arrows: true,
		  autoplay: true,
		  autoplaySpeed: 8000,
		  responsive: [
		  {
		    breakpoint: 1199,
		    settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        autoplay: true,
		        dots: false,
		        autoplaySpeed: 8000
		      }
		    },
		    {
		    breakpoint: 991,
		    settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1,
		        autoplay: true,
		        dots: false,
		        autoplaySpeed: 8000
		      }
		    },

		    {
		      breakpoint: 767,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        autoplay: true,
		        dots: false,
		        autoplaySpeed: 8000
		      }
		    },

		  ]
		});




		$('#info-table-slider').slick({
		  infinite: true,
		  speed: 300,
		  slidesToShow: 2,
		  slidesToScroll: 1,
		  dots: true,
		  arrows: false,
		  autoplay: true,
		  autoplaySpeed: 8000,
		});

		$('#testimonials #testimonial-slider .testimonial-box blockquote, #services .services-box h4, #products-listing .products-list-block-additional .product-block .product-text, #products-listing .products-list-block .product-block').matchHeight();
		// fancybox video
        $(".ds-video .various").fancybox({
		    maxWidth  : 800,
		    maxHeight : 600,
		    fitToView : false,
		    width   : '90%',
		    height    : '90%',
		    autoSize  : false,
		    closeClick  : false,
		    openEffect  : 'none',
		    closeEffect : 'none'
		});
	});
})(jQuery);
