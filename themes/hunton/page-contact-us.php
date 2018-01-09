<?php get_header(); ?>
<div class="page container">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text" style="visibility: hidden;">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<div class="row">
		<div class="col l6 s12 form-col">
			<h2 class="page-title"><?php echo the_title(); ?></h2>
			<p class="subheading"><?php echo get_field('subheading'); ?></p>

			<?php echo do_shortcode('[contact-form-7 id="94" title="Contact us page form"]'); ?>
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