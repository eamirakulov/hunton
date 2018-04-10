<?php get_header(); ?>

<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<section class="content-block" id="ies-bg">
		<div class="block-840">
			<h2 class="bottom-line center">Breathe Easier with Hunton Services – The IES Experts for Hot &amp; Humid <br> Climates</h2>
			<p>At Hunton Services, we help clients breathe easier knowing that the air quality in their facilities is clean
			and free of contaminants. As Houston’s Indoor Environmental Solutions expert, we offer solutions for
			mechanical air systems that incorporate uniquely engineered products developed specifically for the
			remediation of <a href="<?php bloginfo('url'); ?>/commercial">commercial</a>, <a href="<?php bloginfo('url'); ?>/healthcare">healthcare</a>, <a href="<?php bloginfo('url'); ?>/educational">education</a> and <a href="<?php bloginfo('url'); ?>/industrial-services">industrial</a> mechanical air delivery systems.</p>
			<p>True to our Texas roots, we specialize in hot and humid climates and have the specific local knowledge
			required to investigate, assess, and correct IAQ problems such as mold, bacteria, chemicals, allergens
			and asbestos that lead to building-related disease or sick building syndrome. We address the IAQ
			problems at a systems level, and can integrate client, occupant, and operational needs into a holistic
			solution for a specific building.</p>
			<p>Acceptable indoor air quality (IAQ) is typically not achieved by addressing any one specific building
			product, system, or procedure. Rather, it is the result of careful attention to each of the following
			Fundamental Elements of Indoor Air Quality:</p>
			<p>
			• Source/Containment Control: Planned VS. Unplanned Airflows<br>
			• Ventilation Control: CO2 VS. VOC’s<br>
			• Humidity Management: Temperature VS. Humidity<br>
			• Adequate Filtration: Air Cleaning</p>
		</div>
	</section>

	<section class="ies-list">
		<?php
		$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date') );
		$i = 0;

		foreach( $mypages as $page ) {
			if($i == 0) echo '<div class="row flex m0">'; ?>

			<div class="col m6 s12 p30 col<?php echo $page->ID; ?>" style="background: url(<?php echo get_the_post_thumbnail_url($page->ID, 'full') ?>);">
				<h2><?php echo $page->post_title; ?></h2>
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