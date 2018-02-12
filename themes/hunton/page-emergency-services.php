<?php get_header(); ?>
<div class="page container dev2 ">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<section id="services" class="content-section">
		<div class="">
			<div class="row flex">
				<div class="col s12 xl6 pt80">
					<h2>Emergency Services<div class="num">911</div></h2>
					<p>Flooding, record-high heat waves, hurricanes, ice storms – Houston, TX is a
climate where the weather is unpredictable which can interrupt business and your
facility’s productivity.</p>
<p>At Hunton Services, our technicians and extensive network of rental depots enable us to
quickly provide generators and HVAC equipment on site to help you recover as soon as
possible. During Hurricane Harvey, our technicians drove through flood waters to help our
customers. Mother Nature may bring it, but Hunton can handle it.</p>

<p>Talk to your sales representative today about our <a href="<?php bloginfo('url'); ?>/rentals#contingency">contingency planning</a> services
available.</p>		
				</div>
				<div class="col s12 xl6 emergency-services-1">
					
				</div>
			</div>
		</div>
		<div class="">
			<div class="row flex">
				<div class="col s12 xl6 emergency-services-2">
					<a href="<?php bloginfo('url'); ?>/rentals">&nbsp;</a>
				</div>
				<div class="col s12 xl6 pt80">
					<h2>Temporary Emergency Rental Equipment – Cooling, Heating, Dehumidification, Power &amp; More<div class="num">911</div></h2>
					<p>Hunton Services mechanical facilities emergency services provide many benefits, including:</p>
					<p>-24/7 Emergency Service<br>
					-<a href="<?php bloginfo(url); ?>/rentals">Emergency Equipment Rental</a><br>
					-<a href="<?php bloginfo(url); ?>/rentals#contingency">Disaster Planning</a></p>
				</div>
			</div>
		</div>
	</section>

	
	<section id="contact" class="content-section">
		<div class="row contact-us_page">
			<div class="col l6 s12 ">
				<h2>
					Contact Us
					<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/message-icon.svg"></div>
				</h2>
				<div class="nearby-box">
					<div class="row">
						<p class="col m10 s8 addr">
							Hunton Services<br>
							5622 Luce Street<br>
							Houston, Texas 77087
						</p>
					</div>
					<div class="row">
						<p class="col m10 s8 phone">
							713 643-8336
						</p>
					</div>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3466.229670836209!2d-95.3160533848933!3d29.684120282014803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640be01bf82a819%3A0x5ca576101c4404a8!2zNTYyMiBMdWNlIFN0LCBIb3VzdG9uLCBUWCA3NzA4Nywg0KHQqNCQ!5e0!3m2!1sru!2skg!4v1515501654212" width="450" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div class="col l6 s12 form-col">
				<h4>How can we help?</h4>
				<span class="tiny"> Thank you for choosing Hunton Services to partner with.  Someone from Hunton Services will be in touch soon.</span>
				<?php echo do_shortcode('[contact-form-7 id="18" title="Contact form 1"]'); ?>
			</div>
		</div>
	</section>

</div>



<?php get_footer(); ?>