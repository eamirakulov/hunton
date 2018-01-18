<?php get_header(); ?>
<div class="page container dev2 ">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1>What’s Happening</h1>
			<p></p><p>Hunton comes with a blogging platform, packed with versatile and amazing blog layouts</p>
		</div>
	</div>

	<section id="services" class="content-section">
		<div class="">
			<div class="row flex">
				<div class="col s12 xl6 pt80">
					<h2>Emergency Services<div class="num">911</div></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>	
				</div>
				<div class="col s12 xl6 emergency-services-1">
					
				</div>
			</div>
		</div>
	</section>

	
	<section id="contact" class="content-section">
		<div class="row contact-us_page">
			<div class="col l6 s12 ">
				<h2>
					Contacts Us
					<div class="num"><img src="http://design-austin.com/hunton/wp-content/themes/hunton/img/message-icon.svg"></div>
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