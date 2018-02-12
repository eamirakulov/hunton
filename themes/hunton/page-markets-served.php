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
				<p>Hunton Services is one of Houston’s largest and most experienced fully integrated facilities solutions companies.
We design, install, and service building systems to meet the needs of customers in all markets.</p>

				<p>No matter the market, Hunton Services is here for you. Please click below to learn more.</p>
			</div>
			<div class="col s12 xl6 building"><div></div></div>
		</div>

		<div class="row flex items">
			<div class="col s12 m6 comm">
				<div class="inner">
					<h3>Commercial</h3>
					<p><a href="<?php bloginfo('url'); ?>/commercial">Read more</a></p>
				</div>
			</div>
			<div class="col s12 m6 edu">
				<div class="inner">
					<h3>Educational</h3>
					<p><a href="<?php bloginfo('url'); ?>/educational">Read more</a></p>
				</div>
			</div>
		</div>

		<div class="row flex items">
			<div class="col s12 m6 ind">
				<div class="inner">
					<h3>Industrial</h3>
					<p><a href="<?php bloginfo('url'); ?>/industrial-services/">Read more</a></p>
				</div>
			</div>
			<div class="col s12 m6 retail">
				<div class="inner">
					<h3>Retail</h3>
					<p><a href="<?php bloginfo('url'); ?>/retail">Read more</a></p>
				</div>
			</div>
		</div>

		<div class="row flex items">
			<div class="col s12 m6 gov">
				<div class="inner">
					<h3>Governmental</h3>
					<p><a href="<?php bloginfo('url'); ?>/governmental">Read more</a></p>
				</div>
			</div>
			<div class="col s12 m6 health">
				<div class="inner">
					<h3>Health Care</h3>
					<p><a href="<?php bloginfo('url'); ?>/health-care">Read more</a></p>
				</div>
			</div>
		</div>

		<div class="items">
			<div class="hosp">
				<div class="inner">
					<h3>Hospitality</h3>
					<p><a href="#">Read more</a></p>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>