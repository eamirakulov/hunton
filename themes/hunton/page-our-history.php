<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>
	
	<div class="content-block block big-spacing">
		<h4 class="bbf1f4fc mt0">Company background and history.</h4>
		<p>In 1981, R.O. Hunton moved to Houston and established Houston Trane, the forerunner of The Hunton Group. In 1990, he acquired the distribution division that added Trane Residential and light commercial products to the company. He then immediately built what is now the Hunton Group’s headquarters building in Houston’s Westchase district to house the companies. For the next 12 years, Hunton Distribution witnessed steady growth driven by customer service, superior products and well thought-out business objectives.
		</p>
		<p>In 2003, the company expanded with the acquisition of the Oklahoma City and West Texas territories for Residential and Light Commercial equipment and parts. This includes warehouse facilities in Oklahoma City; Lubbock, Texas; Amarillo, Texas and El Paso, Texas.</p>

		<img src="<?php bloginfo('template_url'); ?>/img/our-history-1.svg" alt="">

		<h4 class="bbf1f4fc mt50">Named 6 times as Trane’s #1 Independent<br> Wholesale Distributor in the U.S. </h4>
		<p>Hunton Distribution’s growth strategy was successful, and the company was recognized as Trane’s #1 Independent Wholesale Distributor in the U.S. for 2005, 2006, 2007, 2009, 2012 and 2016.</p>
		<p>Still planning for growth and to better serve our customer, Hunton Distribution opened its new headquarters building in north Houston in December 2008. The 117,000 square-foot facility contains office space, a Parts Center, state-of-the-art training facility and over 100,000 square feet of warehouse space. The building was awarded the LEED Silver certification by meeting stringent LEED credit qualifications in the categories of Sustainable Sites, Water Efficiency, Energy and Atmosphere, Materials and Resources, Indoor Environmental Quality and Innovation and Design.</p>

		<div class="row">
			<div class="col m6 s12"><img src="<?php bloginfo('template_url'); ?>/img/our-history-2.svg" alt=""></div>
			<div class="col m6 s12"><img src="<?php bloginfo('template_url'); ?>/img/our-history-3.svg" alt=""></div>
		</div>

		<h4 class="bbf1f4fc mt50">We believe that when our partners succeed, we succeed.</h4>
		<p>In 2017, Hunton Distribution consolidated locations in response to changes in the market. We closed our offices in El  Paso, Lubbock and Amarillo so that we could more fully serve the Houston and Oklahoma service hubs. We also look forward to opening a third branch office in the greater Houston metroplex.</p>
		<p>Hunton Distribution employs over 100 people in all our locations, and each person is focused on customer satisfaction and providing an environment that makes us easy to do business with.</p>
		<p>For the past 25 years, it has been our privilege to serve the dealer/contractor community with quality products, first class service and industry expertise. At Hunton Distribution, we look forward to sharing this partnership with you long term.</p>
	</div>

	<div class="page-bg" style="background: url(<?php bloginfo('template_url'); ?>/img/our-history-4.svg) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1>For the history of Trane</h1>
			<a href="" class="btn-green btn-large">Click Here</a>
		</div>
	</div>

</div>

<?php get_footer(); ?>