<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/swiper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/tweenMax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/vivus.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/hammer.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/foxlazy.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/all.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.minaf6c.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/kenburn.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.multiscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/countTo.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/skills.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/split-slider.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/banner_slider.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/google_map.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js">

</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js">

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js">

</script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
</script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
</script>


<script>
	$(".carousel").swipe({

		swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

			if (direction == 'left') $(this).carousel('next');
			if (direction == 'right') $(this).carousel('prev');

		},
		allowPageScroll: "vertical"

	});
</script>

<script>
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		items: 8,
		// items change number for slider display on desktop

		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 2
			},

			600: {
				items: 4
			},

			1024: {
				items: 6
			},

			1366: {
				items: 8
			}
		}
	});
</script>