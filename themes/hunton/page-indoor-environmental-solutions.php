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
			<h2 class="bottom-line center">Hunton Services, the IES Expert for Hot and Humid Climates</h2>
			<p>Indoor Air Quality (IAQ) problems often result in occupant illness and have legal and financial implications for building owners and managers.</p>
			<p>Common defects related to HVAC design in hot and humid climates include inadequate dehumidification caused by over sized sensible capacity and reduced airflow, inadequate exhausts for internal sources of moisture and insufficient ventilated air to maintain positive building air pressure.</p>
			<p>Hunton Services is Houston’s IAQ expert. We offer solutions for mechanical air systems, which incorporate uniquely engineered products developed specifically for the remediation of commercial, healthcare, education and industrial mechanical air delivery systems.</p>
			<p>We specialize in hot and humid climates and have the specific local knowledge required to investigate, assess and correct IAQ problems such as mold, bacteria, chemicals, allergens and asbestos that lead to building related disease or sick building syndrome. We address the IAQ problems at a systems level, and can integrate client, occupant and operational needs into a holistic solution for a specific building.</p>
		</div>
	</section>

	<section class="ies-list">
		<?php
		$mypages = get_pages( array( 'child_of' => $post->ID ) );
		$i = 0;

		foreach( $mypages as $page ) {
			if($i == 0) echo '<div class="row flex m0">'; ?>

			<div class="col m6 s12 p30 " style="background: url(<?php echo get_the_post_thumbnail_url($page->ID, 'full') ?>);">
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