<?php get_header(); ?>
<div class="page container">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<section class="content-section">
		<div class="row flex items">
			<div class="col s12 m4 markets-served">
				<div class="inner">
					<h3>Markets Served</h3>
					<p><a href="<?php bloginfo('url'); ?>/markets-served">Read more</a></p>
				</div>
			</div>
			<div class="col s12 m4 energy">
				<div class="inner">
					<h3>Energy Services</h3>
					<p><a href="<?php bloginfo('url'); ?>/energy-services">Read more</a></p>
				</div>
			</div>
			<div class="col s12 m4 mech-services">
				<div class="inner">
					<h3>Mechanical Services</h3>
					<p><a href="<?php bloginfo('url'); ?>/mechanical-services/">Read more</a></p>
				</div>
			</div>
		</div>

		<div class="row flex items">
			<div class="col s12 m8 auto-sys">
				<div class="inner">
					<h3>Building Automation Systems</h3>
					<p><a href="<?php bloginfo('url'); ?>/#">Read more</a></p>
				</div>
			</div>
			<div class="col s12 m4 ies">
				<div class="inner">
					<h3>Indoor Environmental Solutions</h3>
					<p><a href="<?php bloginfo('url'); ?>/indoor-environmental-solutions/">Read more</a></p>
				</div>
			</div>
		</div>

		<div class="row flex items">
			<div class="col s12 m4 specials">
				<div class="inner">
					<h3>Special Projects</h3>
					<p><a href="<?php bloginfo('url'); ?>/#">Read more</a></p>
				</div>
			</div>
			<div class="col s12 m4 rentals">
				<div class="inner">
					<h3>Rental Services</h3>
					<p><a href="<?php bloginfo('url'); ?>/rentals">Read more</a></p>
				</div>
			</div>
			<div class="col s12 m4 emergency">
				<div class="inner">
					<h3>Emergency Services</h3>
					<p><a href="<?php bloginfo('url'); ?>/emergency-services">Read more</a></p>
				</div>
			</div>
		</div>

		<div class="row flex items">
			<div class="col s12 m4 ind-services">
				<div class="inner">
					<h3>Industrial Services</h3>
					<p><a href="<?php bloginfo('url'); ?>/industrial-services">Read more</a></p>
				</div>
			</div>
			<div class="col s12 m8 efp">
				<div class="inner">
					<h3>Engineered & Fabricated Products</h3>
					<p><a href="<?php bloginfo('url'); ?>/engineered-fabricated-products/">Read more</a></p>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>