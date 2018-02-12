<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<section class="content-section markets-cat">
		<div class="row cats">
			<div class="col m2 s12"><h6>Categories:</h6></div>
			<div class="col m10 s12">
				<a href="<?php bloginfo('url'); ?>/markets-served/commercial">Commercial</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/educational">Educational</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/industrial">Industrial</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/healthcare">Health Care</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/governmental" class="active">Governmental</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/hospitality">Hospitality</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/retail">Retail</a>
			</div>
		</div>

		<div class="row flex">
			<div class="col s12 xl6 more-padding">
				<h2>Keeping Institutions Effective<div class="num">01</h2>
					<p>Local governments are forced to address economic shortfalls by reducing staff and dramatically scaling
back capital budgets. This reality creates a growing need for cost efficient, low maintenance building
solutions and facility management options. Hunton Services’ portfolio of energy services and solutions helps
Federal agencies comply with government requirements, meet strategic sustainability performance goals, and
enhance energy efficiency and security.</p>
				<p>Hunton Services installs HVAC, lighting, plumbing and building automation systems, which reduce
energy consumption in existing government buildings. We also offer 24/7 monitoring and maintenance
to ensure systems continue to work at peak efficiency.</p>
<p>Whether working as a contributing partner or directly, Hunton Services collaborates with local
governments and municipalities to perform facility infrastructure improvements in the most cost
effective and efficient manner possible.</p>
			</div>
			<div class="col s12 xl6 gov1"><div></div></div>
		</div>

		<div class="row flex">
			<div class="col s12 xl6 gov2"><div></div></div>
			<div class="col s12 xl6 more-padding services">
				<h2 class="smaller">Hunton Services’ Featured Government and Municipal Services:<div class="num">02</h2>
				<p>
					<ul class="custom-ul">
						<li><a href="<?php bloginfo('url'); ?>/mechanical-services">Mechanical Services</a>
						<li><a href="<?php bloginfo('url'); ?>/industrial-services">Building Automation Services</a></li>
						<li><a href="<?php bloginfo('url'); ?>/energy-services">Energy Services</a></li>
						<li><a href="<?php bloginfo('url'); ?>/">Trane Factory OEM Solutions</a></li>
						<li><a href="<?php bloginfo('url'); ?>/">U.S. Communities Purchasing</a></li>
					</ul>
				</p>
			</div>
		</div>


		<div class="row building-carousel">
			<h2 class="center bottom-line">Featured Buildings:</h2>

			<div id="building-slider">
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/galveston.jpg"></div>
					<p>Galveston County Courthouse</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/galveston2.jpg"></div>
					<p>Galveston Fire Station #5</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/galveston3.jpg"></div>
					<p>Galveston Law Enforcement Facility</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/harris.jpg"></div>
					<p>Harris County Court House</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/harris2.jpg"></div>
					<p>Harris County Criminal Justice Center</p>
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
		slidesToShow: 4,
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