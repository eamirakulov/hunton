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
			<div class="col s12 xl6">
				<h2>Hunton Services is your partner in transforming a business system into a business advantage.<div class="num"><img src="<?php echo bloginfo('template_url'); ?>/img/user.svg"></div></h2>
				<p>Hunton Services is one of Houston’s largest and most experienced fully integrated facilities solutions companies. We design, install and service building systems to meet the needs of customers in the all markets.</p>

				<p>Whichever market, we're committed to building value for you. Please click below to learn more... </p>
			</div>
			<div class="col s12 xl6 building"></div>
		</div>

		<div class="row flex items">
			<div class="col s12 m6 comm">
				<h3>Commercial</h3>
				<p><a href="#">Read more</a></p>
			</div>
			<div class="col s12 m6 edu">
				<h3>Educational</h3>
				<p><a href="#">Read more</a></p>
			</div>
		</div>

		<div class="row flex items">
			<div class="col s12 m6 ind">
				<h3>Industrial</h3>
				<p><a href="#">Read more</a></p>
			</div>
			<div class="col s12 m6 retail">
				<h3>Retail</h3>
				<p><a href="#">Read more</a></p>
			</div>
		</div>

		<div class="row flex items">
			<div class="col s12 m6 gov">
				<h3>Governmental</h3>
				<p><a href="#">Read more</a></p>
			</div>
			<div class="col s12 m6 health">
				<h3>Health Care</h3>
				<p><a href="#">Read more</a></p>
			</div>
		</div>

		<div class="row flex items">
			<div class="col s12 hosp">
				<h3>Hospitality</h3>
				<p><a href="#">Read more</a></p>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>