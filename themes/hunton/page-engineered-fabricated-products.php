<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<section id="articles" class="after-safety p0">
		<div class="row flex m0">
			<div class="col m6 s12 gray-block p30 ">
				<img src="<?php bloginfo('template_url'); ?>/img/products-1.png">
				<h5>Explosion & Weather Proof Equipment</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				<a class="learn">READ MORE</a>
			</div>
			<div class="col m6 s12 gray-block p30">
				<img src="<?php bloginfo('template_url'); ?>/img/products-2.png">
				<h5>Pump Skids</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				<a class="learn">READ MORE</a>
			</div>
		</div>

		<div class="row flex m0">
			<div class="col m6 s12 green-2-block p30">
				<img src="<?php bloginfo('template_url'); ?>/img/products-3.png">
				<h5>Process Skids</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				<a class="learn">READ MORE</a>
			</div>
			<div class="col m6 s12 green-2-block p30">
				<img src="<?php bloginfo('template_url'); ?>/img/products-4.png">
				<h5>Industrial Coating</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				<a class="learn">READ MORE</a>
			</div>
		</div>

		<div class="row flex m0">
			<div class="col m6 s12 gray-block p30">
				<img src="<?php bloginfo('template_url'); ?>/img/products-5.png">
				<h5>Modular Chiller Plants</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				<a class="learn">READ MORE</a>
			</div>
			<div class="col m6 s12 gray-block p30">
				<img src="<?php bloginfo('template_url'); ?>/img/products-6.png">
				<h5>Explosion & Weather Proof Equipment</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				<a class="learn">READ MORE</a>
			</div>
		</div>
	</section>


</div>

<?php get_footer(); ?>