<?php get_header(); ?>
<div class="page container">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<section class="content-section">
		<div class="row flex">
			<div class="col s12 xl6 more-padding">
				<h2>Our Industrial Services<div class="num"><img src="<?php echo bloginfo('template_url'); ?>/img/cogwheel.svg"></h2>
				<p>Hunton&#39;s Industrial Plant Services Group provides qualified technicians to service, troubleshoot, 
					and repair your process equipment. We also provide temporary solutions to meet the high demand 
					of your production needs. Hunton&#39;s Industrial Plant Services and Hunton Trane Rental Solutions 
					work as one to minimize downtime and to mitigate any unforseen risks.</p>

					<p><a href="<?php bloginfo('url'); ?>/safety">Safety</a> is our first core value: Nobody Gets Hurt.</p>
					<p>Our services include: </p>
					<p>
						• Unitary HVAC Comfort Cooling<br>
						• Process Absorption Chillers<br>
						• Process Ammonia Chillers<br>
						• Process Centrifugal, Scroll, and Screw Chillers<br>
						• Compound and Cascade Systems<br>
						• Multi – Stage Centrifugal Systems (Nominal and Low Temperature)<br>
						• Multi – Stage Gas Compression<br>
						• Cooling Tower Repair<br>
						• OEM Trane, York, Carrier, Frick, Vilter, Bitzer, and more!
					</p>
			</div>
			<div class="col s12 xl6 metal-construction"><div></div></div>
		</div>

		<div class="row flex" id="refrigeration">
			<div class="col s12 xl6 center-align"><img src="<?php echo bloginfo('template_url'); ?>/img/refrigerator1.jpg"></div>
			<div class="col s12 xl6 more-padding">
				<h2>Process Refrigeration<div class="num"><img src="<?php echo bloginfo('template_url'); ?>/img/ice-crystal.svg"></h2>
				<p>Hunton Services Industrial Plant Team provides installation, service, repair, and maintenance for
process refrigeration equipment operating on ammonia or halocarbon refrigerants. <a href="<?php bloginfo('url'); ?>/contact-us">Contact us</a>
today for your service needs.</p>
				<!--p><a href="#" class="btn-green">READ MORE</a></p-->
			</div>
		</div>

		<div class="row flex" id="cooling">
			<div class="col s12 xl6 more-padding">
				<h2>Industrial Comfort Cooling <div class="num"><img src="<?php echo bloginfo('template_url'); ?>/img/ice-crystal.svg"></h2>
				<p>At Hunton Services, we understand the correlation between production and comfort. To address
this issue, we maintain a highly trained workforce to address comfort cooling needs. We service, sell,
and maintain standard comfort cooling equipment and equipment rated for classified areas. We are
dedicated to improving processes. <a href="<?php bloginfo('url'); ?>/contact-us">Contact us</a> today to improve your indoor air quality.</p>
				<!--p><a href="#" class="btn-green">READ MORE</a></p-->
			</div>
			<div class="col s12 xl6 center-align"><img src="<?php echo bloginfo('template_url'); ?>/img/refrigerator2.jpg"></div>
		</div>

		<div class="bottom-cta">
			<div class="text">
				<h3>Copy within banner: We work hand-in- hand with our Trane Rental Services team to provide temporary
cooling and power solutions for shutdowns, turnarounds, and emergency situations. <a href="<?php bloginfo('url'); ?>/rentals">Click here</a> to view
our full line of services.</h3>
				<p><a href="<?php bloginfo('url'); ?>/rentals" class="btn-green">RENTAL SERVICES</a></p>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>