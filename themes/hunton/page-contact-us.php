<?php get_header(); ?>
<div class="page container">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1 >
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<div class="row">
		<div class="col l6 s12 form-col">
			<h2 class="page-title"><?php echo the_title(); ?></h2>
			<p class="subheading">How can we help? Please fill in your information, and someone from Hunton Services will be in touch soon.</p>

			<?php echo do_shortcode('[contact-form-7 id="207" title="Contact us page form"]'); ?>
		</div>

		<div class="col l6 s12 right">
			<div class="inner">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3466.229670836209!2d-95.3160533848933!3d29.684120282014803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640be01bf82a819%3A0x5ca576101c4404a8!2zNTYyMiBMdWNlIFN0LCBIb3VzdG9uLCBUWCA3NzA4Nywg0KHQqNCQ!5e0!3m2!1sru!2skg!4v1515501654212" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				<div class="addr-box">
					<h3>We are here to help.</h3>
					<p class="addr">Hunton Services<br>
						5622 Luce Street<br>
						Houston, Texas 77087
					</p>
					<p class="phone">713 643-8336</p>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function uniqId() {
	  return Math.round(new Date().getTime() + (Math.random() * 100));
	}
	$(function() {
		$('input[type=radio]').each(function () {
			var id = uniqId();
			$(this).attr('id', id);
			$(this.nextSibling).wrap('<label for="' + id + '"></label>');
		});
	});
	$('.responsive').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
    ]
});
</script>

<?php get_footer(); ?>