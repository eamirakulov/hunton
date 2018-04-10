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
				<a href="<?php bloginfo('url'); ?>/markets-served/industrial" class="active">Industrial</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/healthcare">Health Care</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/governmental">Governmental</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/hospitality">Hospitality</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/retail">Retail</a>
			</div>
		</div>

		<div class="row flex">
			<div class="col s12 xl6 p130x40 pr100">
				<h2>Keeping Industry Productive<div class="num">01</div></h2>
					<p>At Hunton Services we understand that industrial and petrochemical facilities balance many challenges
						and diverse needs. They must ensure the safest environment possible for their staff, maximize
						production, and minimize pollution levels while reducing their carbon footprint and lowering operation
					and energy costs.</p>
					<p>To meet the high demand of our customer’s manufacturing needs, our team of safe, (link to page on
						Safety) qualified technicians is available 24/7 to troubleshoot, service, and repair your equipment. We
						have the technical expertise necessary to tackle any issue and mitigate unforeseen risks, and our
						Industrial Plant Service Team and Trane Rental Services divisions work as one, cohesive unit – making
					installation of rental equipment seamless.</p>
					<p>Visualize our services as a virtual toolkit for plant optimization. We recognize the critical nature of plant
						process cooling systems. Our goal is to provide a comfortable working environment, assure minimal
					downtime, protect plant revenue, and meet all environmental requirements.</p>
				</div>
				<div class="col s12 xl6 industrial1"></div>
		</div>

		<div class="row flex">
			<div class="col s12 xl6 industrial2"></div>
			<div class="col s12 xl6 more-padding p130x40 pl75">
				<h2 class="smaller">Featured Industrial Services<div class="num">02</div></h2>
				<p>
					<ul class="custom-ul">
						<li><a href="<?php bloginfo('url'); ?>/industrial-services#refrigeration">Process Refrigeration</a></li>
						<li><a href="<?php bloginfo('url'); ?>/industrial-services#cooling">Industrial Comfort Cooling</a></li>
						<li><a href="<?php bloginfo('url'); ?>/mechanical-services/">Mechanical Services</a></li>
						<li><a href="<?php bloginfo('url'); ?>/rentals">Rental Services</a></li>
						<li><a href="<?php bloginfo('url'); ?>/mechanical-services/rnewal-services/">Trane Factory OEM Solutions</a></li>
						<li><a href="#">Upgrades and Retrofitting</a></li>
						<li><a href="<?php bloginfo('url'); ?>/energy-services">Energy Services &amp; Performance Contracting</a></li>
						<li><a href="<?php bloginfo('url'); ?>/">Lighting &amp; Plumbing Solutions</a></li>
						<li class="has-child"><a href="<?php bloginfo('url'); ?>/engineered-fabricated-products/">Engineered &amp; Fabricated Products</a>
							<ul><li><a href="<?php bloginfo('url'); ?>/engineered-fabricated-products/explosion-weather-proof-equipment/">Explosion &amp; Weather Proof Equipment</a></li>
						<li><a href="<?php bloginfo('url'); ?>/engineered-fabricated-products/pump-skids/">Pump Skids</a></li>
						<li><a href="<?php bloginfo('url'); ?>/engineered-fabricated-products/process-skids/">Process Skids</a></li>
						<li><a href="<?php bloginfo('url'); ?>/engineered-fabricated-products/modular-chiller-plants/">Modular Chiller Plants</a></li>
						<li><a href="<?php bloginfo('url'); ?>/engineered-fabricated-products/industrial-coating/">Industrial Coating</a></li></ul>
						</li>
					</ul>
				</p>
			</div>
		</div>


		<div class="row building-carousel">
			<h2 class="center bottom-line mb40">We’re Proud to Work with the Following Companies:</h2>

			<div id="building-slider">
				<div class="item col s4">
					<p class="center-align">DOW</p>
				</div>
				<div class="item col s4">
					<p class="center-align">Shintech</p>
				</div>
				<div class="item col s4">
					<p class="center-align">Hexion/Momentive</p>
				</div>
				<div class="item col s4">
					<p class="center-align">Dixie Chemical</p>
				</div>
				<div class="item col s4">
					<p class="center-align">Western Container</p>
				</div>
				<div class="item col s4">
					<p class="center-align">Plastipak</p>
				</div>
				<div class="item col s4">
					<p class="center-align">Flex Steel</p>
				</div>
				<div class="item col s4">
					<p class="center-align">Calpine</p>
				</div>
				<div class="item col s4">
					<p class="center-align">Exxon</p>
				</div>
				<div class="item col s4">
					<p class="center-align">Arkema</p>
				</div>
				<div class="item col s4">
					<p class="center-align">BASF</p>
				</div>
				<div class="item col s4">
					<p class="center-align">Baker Hughes</p>
				</div>
				<div class="item col s4">
					<p class="center-align">Halliburton</p>
				</div>
				<div class="item col s4">
					<p class="center-align">El Dorado Nitrogen</p>
				</div>
			</div>
		</div>
	</section>
	<section id="case_studies" class="content-section content-block">
		<div class="center">
			<h2 class="bottom-line ">Case Studies</h2>
			<p class="center after-title">Our case studies are a reflection of our commitment to our core values. We will perform every job with pride of ownership and provide satisfaction by meeting or exceeding every customer’s expectations. Take a look at our featured jobs, and <a href="<?php bloginfo('url'); ?>/contact-us">let us know what you think!</a></p>
		</div>
		
		<div class="slider-linear posts-grid slider-block-2 row">
			<?php
				$args = array( 'post_type' => 'case_study',
					'tax_query' => array(array(
		    		'taxonomy' => 'case_categories',
		    		'field' => 'slug',
		    		'terms' => array('industrial')))
				);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class="item col">
					<a class="see" target="_blank" href="<?php echo get_field('document'); ?>">
						<div class="image">
							<div class="overlay">
								<?php the_post_thumbnail('medium'); ?>
							</div>
  							<span class="see">see more</span>
						</div>
						<div class="location">
							<?php echo get_post_meta( get_the_ID(), 'location', true ) ?>
						</div>
						<div class="text center">
							<h5><?php echo the_title(); ?></h5>
						</div>
					</a>
				</div>

			<?php endforeach; 
			wp_reset_postdata();?>
		</div>
		<div class="center">
			<br>
			<br>
			<h2 class="bottom-line mb40">Featured Award </h2>
			<div class="center">
				<a href="<?php bloginfo('url'); ?>/wp-content/uploads/2018/02/El-Dorado-Nitrogen-L.P.-Press-Release.pdf" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/award.jpg"></a>
			</div>
			<p class="center"><a target="_blank" href="<?php bloginfo('template_url'); ?>/files/HS-Industrial-FV-2017.pdf">Downloadable Brochure- HS Industrial FV-2017- pdf</a></p>
		</div>
	</section>
</div>

<script type="text/javascript">
	$('.slider-block-2').slick({
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