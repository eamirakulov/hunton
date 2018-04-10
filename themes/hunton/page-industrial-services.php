<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<section class="content-section pt0 entry_content">
		<div class="row flex m0">
			<div class="col s12 xl6 p130x40 pr100">
				<h2>Our Industrial Services<div class="num"><img src="<?php echo bloginfo('template_url'); ?>/img/cogwheel.svg"></h2>
				<p>Hunton&#39;s Industrial Plant Services Group provides qualified technicians to service, troubleshoot, 
					and repair your process equipment. We also provide temporary solutions to meet the high demand 
					of your production needs. Hunton&#39;s Industrial Plant Services and Hunton Trane Rental Solutions 
					work as one to minimize downtime and to mitigate any unforseen risks.</p>

					<p><a href="<?php bloginfo('url'); ?>/safety">Safety</a> is our first core value: Nobody Gets Hurt.</p>
					<b>Our services include:</b>
					<ul class="green-li">
						<li>Unitary HVAC Comfort Cooling</li>
						<li>Process Absorption Chillers</li>
						<li>Process Ammonia Chillers</li>
						<li>Process Centrifugal, Scroll, and Screw Chillers</li>
						<li>Compound and Cascade Systems</li>
						<li>Multi – Stage Centrifugal Systems (Nominal and Low Temperature)</li>
						<li>Multi – Stage Gas Compression</li>
						<li>Cooling Tower Repair</li>
						<li>OEM Trane, York, Carrier, Frick, Vilter, Bitzer, and more!</li>
					</ul>
			</div>
			<div class="col s12 xl6 metal-construction"></div>
		</div>

		<div class="row flex m0" id="refrigeration">
			<div class="col s12 xl6 center-align process-refrigeration"></div>
			<div class="col s12 xl6 p130x40 pl75">
				<h2>Process Refrigeration<div class="num"><img src="<?php echo bloginfo('template_url'); ?>/img/ice-crystal.svg"></h2>
					<p>Hunton Services Industrial Plant Team provides installation, service, repair, and maintenance for
						process refrigeration equipment operating on ammonia or halocarbon refrigerants. <a href="<?php bloginfo('url'); ?>/contact-us">Contact us</a>
					today for your service needs.</p>
			</div>
		</div>

		<div class="row flex m0 pb80" id="cooling">
			<div class="col s12 xl6 p130x40 pr100">
				<h2>Industrial Comfort Cooling <div class="num"><img src="<?php echo bloginfo('template_url'); ?>/img/ice-crystal.svg"></h2>
					<p>At Hunton Services, we understand the correlation between production and comfort. To address
						this issue, we maintain a highly trained workforce to address comfort cooling needs. We service, sell,
						and maintain standard comfort cooling equipment and equipment rated for classified areas. We are
						dedicated to improving processes. <a href="<?php bloginfo('url'); ?>/contact-us">Contact us</a> today to improve your indoor air quality.</p>
			</div>
			<div class="col s12 xl6 center-align comfort-cooling"></div>
		</div>

		<div class="bottom-cta">
			<div class="text">
				<h3>We work hand-in- hand with our Trane Rental Services team to provide temporary
					cooling and power solutions for shutdowns, turnarounds, and emergency situations. <a href="<?php bloginfo('url'); ?>/rentals">Click here</a> to view our full line of services.</h3>
				<p><a href="<?php bloginfo('url'); ?>/rentals" class="btn-green">RENTAL SERVICES</a></p>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>