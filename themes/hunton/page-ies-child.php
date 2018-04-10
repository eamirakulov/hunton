<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>
	<?php if(is_page('ventilation')) : ?>
	<div class="content-block block big-spacing">
		<h4 class="bbf1f4fc mt0">Delivering Adequate Levels of Clean Air</h4>

		<p>Delivering the right levels of outdoor air quantity and quality to the interior of a building is essential.
			Adequate levels of clean air combined with occupant activities and building contents determine the
		ventilation air requirement for the maintenance of sufficient Indoor Air Quality (IAQ).</p>
		<p>The failure of systems to deliver the quantity of outdoor air specified in the design can be caused by
			outside conditions, poor damper control and operation or inadvertent closing outdoor air intake
			dampers. Ultimately, since many commercial building ventilation systems are used to provide cooling
			and sometimes heating, it is important the thermal control scheme is effectively integrated into a
			system, which meets outdoor air supply requirements under all thermal load conditions. If your
			equipment and building is aging, it is important to talk to your solution sales representativechedule a
		time for them to assess the air quality and energy optimization.</p>

		<img src="<?php bloginfo('template_url'); ?>/img/our-history-1.svg" alt="">

		<h4 class="bbf1f4fc mt0">Hunton Services designs and installs ventilation systems which deliver:</h4>
		<ul class="green-li">
			<li><b>Sufficient intake of clean outdoor air or filtration and cleaning of poor quality outdoor air</b></li>
			<li><b>Effective ventilation supply and distribution</b></li>
			<li><b>Effective thermal control </b></li>
			<li><b>Adequate outdoor air supply in hot, humid climates, without creating moisture problems</b></li>
			<li><b>Acceptable costs for ventilation equipment and its operation</b></li>
		</ul>

	</div>
	<?php endif; ?>

	<?php if(is_page('filtration')) : ?>
	<div class="content-block block big-spacing">
		<h4 class="bbf1f4fc mt0">The Science of Clean Air</h4>
		<p>
		Filtration controls contaminants by reducing their concentrations to acceptable levels or by removing
		them from the air stream altogether. Filtration takes two forms reflecting two general types of
		contaminants: particulate and gaseous.</p>
				<p>Indoor Air Quality (IAQ) issues often stem from the poor quality of the outside air being drawn upon,
		particularly in urban areas. In this scenario, ventilation air drawn in can be contaminated with ultra-fine
		particles (UFPs), odors, and exhaust fumes.</p>
		<p>
		To moderate the impact of particles, VOCs, and odors, Hunton Services uses dynamic air cleaner
		filtration systems. These systems employ an active-field polarized media and particle agglomeration to
		remove even the smallest particles from the air. This best of breed filtration technology captures ultra-
		fine particles or odor and ensures the air within the building is clear, even if the exterior air is not. At
		Hunton Services, we understand the science of clean air. <a href="<?php bloginfo('url'); ?>/contact-us">Contact us</a> today to
		ensure the air you are breathing is up to your standards…and ours.</p>

		<h4 class="bbf1f4fc mt0">Hunton Services Indoor Environmental Solutions (IES) filtration services include:</h4>
		<ul class="green-li">
			<li><b>Treatment of outside air</b></li>
			<li><b>0 air bypass filter conversion using 2 stage process</b></li>
			<li><b>EUV lights</b></li>
			<li><b>Photocatalysis</b></li>
			<li><b>Final filter conversions and service</b></li>
			<li><b>Duct cleaning</b></li>
			<li><b>Fire damper inspection and cleaning</b></li>
			<li><b>Air sampling</b></li>
			<li><b>Water filtration</b></li>
			<li><b>Air delivery performance testing</b></li>
		</ul>
	</div>
	<?php endif; ?>

	<?php if(is_page('containment')) : ?>
	<div class="content-block block big-spacing">
		<h4 class="bbf1f4fc mt0">Indoor and Outdoor Contaminant Source Control</h4>
		<p>Controlling the source of contaminants is fundamental to any IES strategy. Today, microbial
			contamination, in the form of mold and mildew, is a major indoor pollutant, but it certainly is not the only
			source. Indoor contamination can also be in the form of particles or chemicals. They may come from
			building occupants and their activities, be emitted from furnishings and wall coverings, or be brought
			into the building with the intake air from outdoors. Controlling these contaminants at the source is
			typically a much more cost-effective strategy than filtering or diluting them once they are inside the
		building.</p>
		<p>Microbial contamination (fungi and bacteria) can also be a major source of indoor contamination.
			Microbiological colonies can grow in or on various building elements and furnishings, including carpets,
		ceilings, sheetrock walls, and within the HVAC system.</p>

		<p>What can be done to reduce the potential for microbial growth inside buildings? Proper selection and
			specification of building materials and HVAC equipment and refurbishment per <a href="https://www.ashrae.org">ASHRAE</a> standards are key places to start. Air-handling equipment characteristics that significantly
		reduce the likelihood of the HVAC system becoming a source of microbial contamination include:</p>
		<ul class="green-li">
			<li><b>Sloped, Noncorrosive Drain Pans</b></li>
			<li><b>Cleanability</b></li>
			<li><b>Accessibility</b></li>
		</ul>

		<p>Contaminants can also enter a building from outdoors through the outdoor air intake, or by infiltration
			through cracks and openings in the building envelope. Even outdoor air of acceptable quality can
			become contaminated if it is brought into the building through contaminated outdoor air intakes and
		ductwork.</p>

		<p>Proper building pressure control can effectively reduce infiltration, and thus limit the intrusion of
			contaminants and moisture from outdoors. Internal building pressure should be controlled to equal or

			slightly positive relative to the outdoors during both occupied and unoccupied periods. Don’t let this
			common issue effect your employees and occupancy retention. <a href="<?php bloginfo('url'); ?>/contact-us">Reach out to the IAQ experts at Hunton
			Services today</a>.</p>
	</div>
	<?php endif; ?>

	<?php if(is_page('humidity-management')) : ?>
		<div class="content-block block big-spacing">
			<h4 class="bbf1f4fc mt0">Humidity Management</h4>
			<p>Uncontrolled moisture in buildings can contribute to unacceptable indoor air quality, occupant
				discomfort, and damage to the building structure and furnishings. One source of building moisture is
			water vapor contained in the indoor air.</p>
			<p><a href="https://www.ashrae.org/" target="_blank">ASHRAE</a> Standard 62-2001 recommends maintaining indoor relative humidity
				levels between 30 percent and 60 percent. Humidity levels less than 30 percent cause some people
				respiratory discomfort while humidity levels over 70 percent near surfaces for extended periods of time
				promote the growth of some forms of mold and fungi. Today, microbiological contamination (mold and
				fungi) is a common cause of occupant complaints and IAQ problems in buildings. Microbiological
				colonies can grow in or on various building elements and furnishings, including carpets, ceilings,
				sheetrock, walls, and within the HVAC system. In Texas, we are the experts in humidity manage. Call
			us today to improve your air health.</p>
		</div>
	<?php endif; ?>

</div>



<?php get_footer(); ?>