<?php get_header(); ?>
<div class="page container">
	<div class="page-bg" style="background: url(<?php echo get_the_post_thumbnail_url(95); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo get_the_title(95); ?></h1>
			<p><?php echo get_field('subheading', 95); ?></p>
		</div>
	</div>

	<section class="content-section markets-cat">
		<div class="row cats">
			<div class="col m2 s12"><h6>Categories:</h6></div>
			<div class="col m10 s12">
				<a class="active">Commercial</a>
				<a>Educational</a>
				<a>Industrial</a>
				<a>Health Care</a>
				<a>Governmental</a>
				<a>Hospitality</a>
				<a>Retail</a>
			</div>
		</div>

		<div class="row flex">
			<div class="col s12 xl6 more-padding">
				<h2>Making Buildings Efficient<div class="num">01</h2>
				<p>Hunton Services understands economic factors typically drive mechanical and electrical solution decisions. Every Commercial building we service requires a customized solution, which effectively balances functional and financial needs. In doing so, we ensure a comfortable and pleasant environment for tenants and their employees while providing cost effective solutions for the building management company.</p>
			</div>
			<div class="col s12 xl6 building"><div></div></div>
		</div>

		<div class="row flex">
			<div class="col s12 xl6 woman"><div></div></div>
			<div class="col s12 xl6 more-padding services">
				<h2 class="smaller">Hunton Services offers commercial facilities services, including:<div class="num">02</h2>
				<p>
					<ul class="custom-ul">
						<li>All types of HVAC equipment and systems</li>
						<li>Building automation systems</li> 
						<li>Mechanical controls systems service and service agreements</li> 
						<li>Facilities solutions</li>
						<li>Trane OEM services, warranty, parts and equipment provision</li>
					</ul>
				</p>
			</div>
		</div>

		<div class="row building-carousel">
			<h2 class="center bottom-line">Sample Text</h2>
			<p class="center after-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

			<div id="building-slider">
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/prop2020.png"></div>
					<p>2020 Properties</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/abbh.png"></div>
					<p>ABB Headquarters</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/anadarko.png"></div>
					<p>Anadarko</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/prop2020.png"></div>
					<p>2020 Properties</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/prop2020.png"></div>
					<p>2020 Properties</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/abbh.png"></div>
					<p>ABB Headquarters</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/anadarko.png"></div>
					<p>Anadarko</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/prop2020.png"></div>
					<p>2020 Properties</p>
				</div>
			</div>
		</div>
	</section>
</div>

<script type="text/javascript">
	$('#building-slider').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 2,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: true
			}
		}
		]
	});
</script>
<?php get_footer(); ?>