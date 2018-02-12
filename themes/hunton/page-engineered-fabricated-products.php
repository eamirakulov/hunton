<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<div>
		<p>Hunton Trane Services’ <a href="<?php bloginfo('url'); ?>/industrial-services/">Industrial group</a> specializes in
petrochemical applications of HVAC and process cooling equipment. Our modification
applications and engineering experience includes over twenty years of chemical, process,
instrumentation, and mechanical engineering, as well as major industrial design.</p>
<p>With a fully-equipped fabrication and modification operation, we design, build, and install custom
heating, ventilation, air conditioning, filtration, and pressurization equipment to meet the special
needs and stringent requirements of the industrial marketplace. With the expertise of our in-
house <a href="<?php bloginfo('url'); ?>/industrial-services/">industrial plant</a> services team that works hand-in- hand with our <a href="<?php bloginfo('url'); ?>/rentals">Trane rental</a>
division, installations are turnkey and seamless, minimizing downtime
and mitigating risk.</p>
	</div>
	<section id="articles" class="after-safety p0">
		
		<?php
		$mypages = get_pages( array( 'child_of' => $post->ID ) );
		$i = 0;

		foreach( $mypages as $page ) {
			if($i == 0) echo '<div class="row flex m0">'; ?>

			<div class="col m6 s12 gray-block p30 ">
				<?php echo get_the_post_thumbnail($page->ID, 'full'); ?>
				<h5><?php echo $page->post_title; ?></h5>
				<p><?php echo $page->post_excerpt; ?></p>
				<a class="learn" href="<?php echo get_the_permalink($page->ID); ?>">READ MORE</a>
			</div>

			<?php $i++;
			if($i == 2) {
				echo '</div>';
				$i = 0;
			}
		}   
		?>

	</section>


</div>

<?php get_footer(); ?>