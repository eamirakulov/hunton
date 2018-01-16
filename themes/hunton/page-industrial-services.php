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
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit,  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit,  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col s12 xl6 metal-construction"></div>
		</div>

		<div class="row flex">
			<div class="col s12 xl6 center-align"><img src="<?php echo bloginfo('template_url'); ?>/img/refrigerator1.jpg"></div>
			<div class="col s12 xl6 more-padding">
				<h2>Process Refrigeration<div class="num"><img src="<?php echo bloginfo('template_url'); ?>/img/ice-crystal.svg"></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<p><a href="#" class="btn-green">READ MORE</a></p>
			</div>
		</div>

		<div class="row flex">
			<div class="col s12 xl6 more-padding">
				<h2>Industrial Comfort Cooling <div class="num"><img src="<?php echo bloginfo('template_url'); ?>/img/ice-crystal.svg"></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<p><a href="#" class="btn-green">READ MORE</a></p>
			</div>
			<div class="col s12 xl6 center-align"><img src="<?php echo bloginfo('template_url'); ?>/img/refrigerator2.jpg"></div>
		</div>

		<div class="bottom-cta">
			<div class="text">
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
				<p><a href="#" class="btn-green">RENTAL SERVICES</a></p>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>