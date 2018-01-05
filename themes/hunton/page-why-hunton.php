<?php get_header(); ?>
<div class="page dev2">
	<div class="container">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>
	</div>

	<div class="container">
		<div class="why-about-block content-block">
			<div class="center">
				<h2>About Us</h2>
				<p>Hunton Services Builds Value</p>
			</div>
			<div class="block-840">
				<p>It is our mission to customize a solution that delivers the lowest total life-cycle cost of ownership for the operation, ownership and maintenance of your mechanical systems.</p>
				<p>As a member of The Hunton Group family of companies, Hunton Services has technical capability and resources which are second to none.</p>
			</div>
		</div>
	</div>

	<div class="container">
		<section id="services" class="content-section">
			<div class="row valign-wrapper">
				<div class="col s12 xl6 pr100">
					<h2 class="our-history">Our History<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/our-history-icon.svg"></div></h2>
					<p>In 1981, R.O. Hunton moved to Houston and established Houston Trane, the forerunner of The Hunton Group. In 1990, he acquired the distribution division that added Trane Residential and light commercial products to the company. He then immediately built what is now the Hunton Group’s headquarters building in Houston’s Westchase district to house the companies. For the next 12 years, Hunton Distribution witnessed steady growth driven by customer service, superior products and well thought-out business objectives.</p>
					<p><a href="#" class="btn-green">READ MORE</a></p>
				</div>
				<div class="col s12 xl6 right-align">
					<img src="<?php bloginfo('template_url'); ?>/img/our-history-img.svg">
				</div>
			</div>
		</section>
	</div>

	<div class="container">
		<section class="content-section">
			<div class="row valign-wrapper">
				<div class="col s12 xl6 pl50 hide-on-med-and-up show-on-small">
					<h2 class="our-team">Our Team<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/our-team-icon.svg"></div></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p><a href="#" class="btn-green">READ MORE</a></p>
				</div>
				<div class="col s12 xl6 right-align">
					<div class="team-list">
						<div class="team-item center">
							<img src="<?php bloginfo('template_url'); ?>/img/team/Randy_Wallen.svg" alt="">
							<span class="team-name">RANDY WALLEN</span>
							<span class="team-pos">Senior Vice President & General Manager</span>
						</div>
						<div class="team-item center">
							<img src="<?php bloginfo('template_url'); ?>/img/team/Hardin_Kris_web1.svg" alt="">
							<span class="team-name">KRIS HARDIN</span>
							<span class="team-pos">Vice President of Sales</span>
						</div>
						<div class="team-item center">
							<img src="<?php bloginfo('template_url'); ?>/img/team/Bill_Ballard.svg" alt="">
							<span class="team-name">BILL BALLARD</span>
							<span class="team-pos">Manager of Special Projects & Construction</span>
						</div>
						<div class="team-item center">
							<img src="<?php bloginfo('template_url'); ?>/img/team/Randy_Wallen.svg" alt="">
							<span class="team-name">RANDY WALLEN</span>
							<span class="team-pos">Senior Vice President & General Manager</span>
						</div>
						<div class="team-item center">
							<img src="<?php bloginfo('template_url'); ?>/img/team/Randy_Wallen2.svg" alt="">
							<span class="team-name">RANDY WALLEN</span>
							<span class="team-pos">Senior Vice President & General Manager</span>
						</div>
						<div class="team-item center">
							<img src="<?php bloginfo('template_url'); ?>/img/team/lenny.svg" alt="">
							<span class="team-name">LEANNE STIERS</span>
							<span class="team-pos">Senior Vice President & General Manager</span>
						</div>
					</div>
				</div>
				<div class="col s12 xl6 pl50 hide-on-small-only">
					<h2 class="our-team">Our Team<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/our-team-icon.svg"></div></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p><a href="#" class="btn-green">READ MORE</a></p>
				</div>
			</div>
		</section>
	</div>
	
	<div class="container bg-gray">
		<section class=" content-section content-block">
			<h2 class="center bottom-line">Our Partners</h2>
			<p class="center after-title">With the growing trend for connected lighting, today’s professional lighting projects are becoming more and more complex. This has sparked an increasing demand for quality consulting and design services.</p>

			<div class="slider-linear slider-block-3 posts-grid ">
				<?php
				$args = array( 'posts_per_page' => 8);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class="row item">
					<div class="col l6 m6 s12 s3-thumb" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
					</div>
					<div class="col l6 m6 s12 text">
						<div class="">
							<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo the_excerpt(); ?></p>
							<a href="#" class="learn">Learn more</a>
						</div>
					</div>
				</div>

				<?php endforeach; 
				wp_reset_postdata();?>
			</div>
		</section>
	</div>
	
	<div class="container">
		<section id="case_studies" class="content-section content-block">
			<div class="center">
				<h2 class="bottom-line">Case Studies</h2>
				<p class="center after-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			
			<?php 
				$args = array( 'hide_empty=0' );
				$case_terms = get_terms( 'case_categories', $args ); 
			?>
			<div class="row block">
				<div class="case-cats">
					<div class="col m2 s12"><h6>Categories:</h6></div>
					<div class="col m10 s12">
						<?php foreach ($case_terms as $key => $value) {
							if($value->slug == 'agriculture')
								echo '<a class="active" id="'.$value->slug.'">'.$value->name.' ('.$value->count.')</a> ';
							else	
								echo '<a id="'.$value->slug.'">'.$value->name.' ('.$value->count.')</a> ';
						}?>
					</div>
				</div>
			</div>

			<div class="slider-linear posts-grid slider-block-2 row">
				<?php
					$args = array( 'post_type' => 'case_study',
						'tax_query' => array(array(
			    		'taxonomy' => 'case_categories',
			    		'field' => 'slug',
			    		'terms' => array('agriculture')))
					);
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<div class="item col">
						<div class="image">
							<div class="overlay">
								<?php the_post_thumbnail('medium'); ?>
							</div>
							<span class="see">see more</span>
						</div>
						<div class="location">
							<?php echo get_post_meta( get_the_ID(), 'location', true ) ?>
						</div>
						<div class="text center">
							<h5><?php echo the_title(); ?></h5>
						</div>
					</div>

				<?php endforeach; 
				wp_reset_postdata();?>
			</div>
		</section>
	</div>

	<section id="testimonials" class="container content-section content-block">
		<div class="center">
			<h2 class="bottom-line">Testimonials</h2>
			<p class="deskr">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>

		<div class="slider-linear slider-block-1  ">
			<div class="center">
				<img src="<?php bloginfo('template_url'); ?>/img/why-testimonials-icon.svg" alt="">
				<b>EPA</b>
				<p class="small">United States Environmental Protection Agency</p>
				<p>"In 1981, R.O. Hunton moved to Houston and established Houston Trane, the forerunner of The Hunton Group. In 1990, he acquired the distribution division that added Trane Residential and light commercial products to the company."</p>
			</div>
			<div class="center">
				<img src="<?php bloginfo('template_url'); ?>/img/why-testimonials-icon.svg" alt="">
				<b>EPA</b>
				<p class="small">United States Environmental Protection Agency</p>
				<p>"In 1981, R.O. Hunton moved to Houston and established Houston Trane, the forerunner of The Hunton Group. In 1990, he acquired the distribution division that added Trane Residential and light commercial products to the company."</p>
			</div>	
			<div class="center">
				<img src="<?php bloginfo('template_url'); ?>/img/why-testimonials-icon.svg" alt="">
				<b>EPA</b>
				<p class="small">United States Environmental Protection Agency</p>
				<p>"In 1981, R.O. Hunton moved to Houston and established Houston Trane, the forerunner of The Hunton Group. In 1990, he acquired the distribution division that added Trane Residential and light commercial products to the company."</p>
			</div>
		</div>
	</section>

	<div class="container">
		<section id="services" class="content-section pb0">
			<div class="row valign-wrapper mb0">
				<div class="col s12 xl6 pr100">
					<h2 class="hat">Safety<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/why-safety-icon.svg"></div></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="col s12 xl6 right-align">
					<img class="right" src="<?php bloginfo('template_url'); ?>/img/why-safety-img.svg">
				</div>
			</div>
		</section>
	</div>

	<section class="after-safety container">
		<div class="row">
			<div class="col m4 s12 green-block ">
				<div class="row"><img src="<?php bloginfo('template_url'); ?>/img/why-after-safety-1.svg"></div>
				<h4>The President’s Mission Statement for Environmental Health </h4>
				<a href="" class="learn">read more</a>
			</div>
			<div class="col m4 s12 gray-block">
				<div class="row"><img src="<?php bloginfo('template_url'); ?>/img/why-after-safety-2.svg"></div>
				<h4>A section on PPE & Training  </h4>
				<a href="" class="learn">read more</a>
			</div>
			<div class="col m4 s12 gray-block2">
				<div class="row"><img src="<?php bloginfo('template_url'); ?>/img/why-after-safety-3.svg"></div>
				<h4>HSE Team </h4>
				<a href="" class="learn">read more</a>
			</div>
		</div>
	</section>

	<section id="services" class="container content-section content-block">
		<div class="row valign-wrapper">
			<div class="col s12 xl6 right-align hide-on-small-only">
				<img src="<?php bloginfo('template_url'); ?>/img/why-training-img.svg">
			</div>
			<div class="col s12 xl6 pl75">
				<h2 class="training">Training<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/why-training-icon.svg"></div></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="col s12 xl6 right-align show-on-small hide-on-med-and-up">
				<img src="<?php bloginfo('template_url'); ?>/img/why-training-img.svg">
			</div>
		</div>
	</section>

</div>

<script type="text/javascript">
	$('.slider-block-1').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1
	});

	$('.slider-block-2').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		]
	});

	$('.slider-block-3').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 2,
		slidesToScroll: 2,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: true
			}
		}
		]
	});

	$(".case-cats .m10 a").click(function () {
		var category = $(this).attr('id');
		$('.case-cats .m10 a').removeClass('active');
		$(this).addClass('active');
		$.ajax({
			type: 'POST',
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data: {
				'category': category,
				'action': 'f711_get_post_content'
			}, success: function (result) {
				$('.slider-block-2').html(result);
				$('.slider-block-2').removeClass('slick-initialized');

				$('.slider-block-2').slick({
					dots: true,
					infinite: false,
					speed: 300,
					slidesToShow: 4,
					slidesToScroll: 4,
					responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							infinite: true,
							dots: true
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
					]
				});
			},
		});
	});
</script>

<?php get_footer(); ?>