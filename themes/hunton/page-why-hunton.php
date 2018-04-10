<?php get_header(); ?>
<div class="page dev2">
	<div class="container">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat 0 -200px; background-size: cover;">
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
				<p>Hunton Services is a proud member of the <a href="http://www.huntongroup.com/" target="_blank">Hunton Group</a> family of
companies, and as Houston’s Trane OEM, we are ready to assist you with any phase of your energy
project in any market- from engineering and design, to maintenance and continual commissioning. We
speak the language of buildings.</p>
<p><a href="<?php bloginfo('url'); ?>/contact-us" target="_blank">Let us partner with you to create high performance buildings for life.</a></p>
			</div>
		</div>
	</div>

	<div class="container">
		<section id="services" class="content-section">
			<div class="row flex">
				<div class="col s12 xl6 p80 pr100 mobile-pb0">
					<h2 class="our-history">Our History<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/our-history-icon.svg"></div></h2>
					<p>Since 1981 when RO Hunton first founded Houston Trane as a subsidiary of The Trane
Company, large and small customers have relied on Hunton to deliver innovative systems, professional
OEM service, comprehensive solutions, and Trane&#39;s high-quality products - all from one source for your
convenience - and from a company you can trust.</p>
					<p><a href="<?php bloginfo('url'); ?>/our-history" class="btn-green">READ MORE</a></p>
				</div>
				<div class="col s12 xl6 right-align hide-on-small-only" style="background: url(<?php bloginfo('template_url'); ?>/img/bottlebreaking.jpg) ;background-size: cover;background-position: center;">
				</div>
			</div>
		</section>
	</div>

	<div class="container">
		<section class="content-section mobile-pb0">
			<div class="row ">
				<div class="col s12 xl6 mb0 hide-on-large-only">
					<h2 class="our-team">Our Team<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/our-team-icon.svg"></div></h2>
					<p>At Hunton Services, we develop
customer relationships by listening carefully to our customers in order to determine job performance,
quality, and cost needs. By utilizing a staff of qualified managers, engineers, and skilled technicians, we
are able to develop sound and cost-effective solutions that result in real value. By providing tangible
value, our customers trust us and routinely reward us with their next project.</p>
					<p><a href="<?php bloginfo('url'); ?>/our-team" class="btn-green">READ MORE</a></p>
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
							<img src="<?php bloginfo('template_url'); ?>/img/team/Randy_Wallen2.svg" alt="">
							<span class="team-name">LEANNE STIERS</span>
							<span class="team-pos">BAS Service Manager, CEM</span>
						</div>
						<div class="team-item center">
							<img style="border-radius: 50%" src="<?php bloginfo('template_url'); ?>/img/team/RickMoreno2016-fv.jpg" alt="">
							<span class="team-name">RICK MORENO</span>
							<span class="team-pos">Vice President of Sales</span>
						</div>
						<div class="team-item center">
							<img src="<?php bloginfo('template_url'); ?>/img/team/lenny.svg" alt="">
							<span class="team-name">GARY CAMPBELL</span>
							<span class="team-pos">Manager of Special </span>
						</div>
						<div class="team-item center">
							<img src="<?php bloginfo('template_url'); ?>/img/team/mike.png" alt="">
							<span class="team-name">Mike Pagan</span>
							<span class="team-pos">Operations Manager</span>
						</div>
						<div class="team-item center">
							<img src="<?php bloginfo('template_url'); ?>/img/team/steph.png" alt="">
							<span class="team-name">Steph Mixon</span>
							<span class="team-pos">Financial Manager</span>
						</div>
					</div>
				</div>
				<div class="col s12 xl6 pl50 p80 hide-on-med-and-down">
					<h2 class="our-team">Our Team<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/our-team-icon.svg"></div></h2>
					<p>At Hunton Services, we develop customer relationships by listening carefully to our customers in order to determine job performance, quality, and cost needs. By utilizing a staff of qualified managers, engineers, and skilled technicians, we are able to develop sound and cost-effective solutions that result in real value. By providing tangible value, our customers trust us and routinely reward us with their next project. </p>
					<p><a href="<?php bloginfo('url'); ?>/our-team" class="btn-green">READ MORE</a></p>
				</div>
			</div>
		</section>
	</div>
	
	<div class="container bg-gray" id="partners">
		<section class=" content-section content-block">
			<h2 class="center bottom-line">Our Partners</h2>
			<p class="center after-title">By partnering with the industry’s leading trade and professional associations,  Hunton Services stays up to date on industry trends, news, and cutting edge technologies in order to provide the most value to you, our customer.</p>

			<div class="slider-linear slider-block-3 posts-grid ">
				<?php
				$args = array( 'posts_per_page' => -1, 'cat' => 23);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class="row item">
					<div class="col l6 m6 s12 s3-thumb" style="background: #fff url(<?php the_post_thumbnail_url(); ?>) no-repeat center; background-size: 85%;">
					</div>
					<div class="col l6 m6 s12 text no-shadow">
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
				<p class="center after-title">Our case studies are a reflection of our commitment to our core values. We will perform every job with pride of ownership and provide satisfaction by meeting or exceeding every customer’s expectations. Take a look at our featured jobs, and <a href="<?php bloginfo('url'); ?>/contact-us">let us know what you think!</a></p>
			</div>
			
			<?php 
				$args = array( 'hide_empty=0' );
				$case_terms = get_terms( 'case_categories', $args ); 
			?>
<!-- 			<div class="row block">
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
			</div> -->

			<div class="slider-linear posts-grid slider-block-2 row">
				<?php
					$args = array( 'post_type' => 'case_study',
						'tax_query' => array(array(
			    		'taxonomy' => 'case_categories',
			    		'field' => 'slug',
			    		'terms' => array('commercial')))
					);
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<div class="item col">
						<a class="see" target="_blank" href="<?php echo get_field('document'); ?>">
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
						</a>
					</div>

				<?php endforeach; 
				wp_reset_postdata();?>
			</div>
		</section>
	</div>

	<section id="testimonials" class="container content-section content-block">
		<div class="center">
			<h2 class="bottom-line">Testimonials</h2>
			<p class="deskr"></p>
		</div>

		<div class="slider-linear slider-block-1  ">
			<div class="center">
				<img src="<?php bloginfo('template_url'); ?>/img/lsb.jpg" alt="">
				<b>El Dorado Nitrogen- LSB Industries</b>
				<p class="small">Plant Manager of El Dorado
Nitrogen- LSB Industries, Jerry Davis</p>
				<p>“One of our objectives is continual improvement of our ability to make nitric acid reliably. With the support of
Hunton Services, we have been able to meet our objective. The quality of Hunton Services equipment, along
with a dedicated support team to maintain the equipment with very high up time has been great. Every aspect
of service we received from Hunton Services employees has been outstanding.”</p>
			</div>
			<div class="center">
				<img src="<?php bloginfo('template_url'); ?>/img/chronicle.png" alt="">
				<b>Houston Chronicle</b>
				<p class="small">Excerpt taken from the article written by Jordan Blum, Houston Chronicle- 2017 Houston Top
Workplaces.</p>
				<p>“It’s a commitment to its workforce that makes Hunton the fifth-ranked midsize company in the Chronicles’ Top
Workplaces survey by Energage.” As stated by one employee, “‘Everything about the Hunton family makes this
place home’”</p>
			</div>	
			<div class="center">
				<img src="<?php bloginfo('template_url'); ?>/img/weingarten.png" alt="">
				<b>ChiefEngineer</b>
				<p class="small">-Mario Sarreon</p>
				<p>“We are grateful for the unique solution provided by Hunton, as well as the level of dependability and quality of
work throughout the project. Our longstanding partnership is one we truly appreciate.”</p>
			</div>
			<div class="center">
				<img src="<?php bloginfo('template_url'); ?>/img/metodist.png" alt="">
				<b>Houston Methodist</b>
				<p class="small">– Paul Forbes</p>
				<p>“Hunton Services always performs excellently.”</p>
			</div>
			<div class="center">
				<img src="<?php bloginfo('template_url'); ?>/img/wearhouse.png" alt="">
				<b>Men’s Warehouse</b>
				<p class="small">–Charlie Harvey</p>
				<p>“Charlie Grossman is a VERY detail oriented technician, and we appreciate the level of communication
given during the recent hurricane issues we had. Immediate attention was given before and after, along
with a detailed summary of pending repairs by Johnny Butler daily until most all of the units were fully
functional. I wish we could set the bar right there. This is where we need to be. Great JOB to all
involved. Thank you!”</p>
			</div>
			<div class="center">
				<img src="<?php bloginfo('template_url'); ?>/img/" alt="">
				<b></b>
				<p class="small">– Van Rogers</p>
				<p>“Trane controls and Hunton BAS Service Team. An unbeatable combination.”</p>
			</div>
		</div>
	</section>

	<div class="container">
		<section id="safety" class="content-section pb0">
			<div class="row valign-wrapper mb0">
				<div class="col s12 xl6 pr100">
					<h2 class="hat">Safety<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/why-safety-icon.svg"></div></h2>
					<p>At Hunton Services we take our core values seriously, and our first core value reflects our
commitment to safety: “We will live safety every day. Nobody Gets Hurt.” The Hunton Group is committed to
protecting the health and safety of its workforce and to minimizing its environmental impact. To learn more
about how we live safety every day, <a href="<?php bloginfo('url'); ?>/safety">click here</a>.</p>
				</div>
				<div class="col s12 xl6 right-align hide-on-med-and-down">
					<img class="right" src="<?php bloginfo('template_url'); ?>/img/hse.png">
				</div>
			</div>
		</section>
	</div>

	<section class="after-safety container">
		<div class="row mb0">
			<div class="col m4 s12 green-block ">
				<div class="row"><img src="<?php bloginfo('template_url'); ?>/img/handsholdingearth.jpg"></div>
				<h4>The President’s Mission Statement for Environmental Health</h4>
				<a target="_blank" href="<?php bloginfo('url'); ?>/wp-content/uploads/2018/02/Presidents-Safety.pdf" class="learn">read more</a>
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

	<section id="training" class="container content-section p0i">
		<div class="row m0 flex">
			<div class="col s12 xl6 right-align hide-on-small-only" style="background: url(<?php bloginfo('template_url'); ?>/img/training.jpg) ;background-size: cover;">
			</div>
			<div class="col s12 xl6 p80 pl75">
				<h2 class="training">Training<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/why-training-icon.svg"></div></h2>
				<p>Our Commitment to Safety Through Training</p>
				<p>Each year, Hunton provides 12 mandatory training topics for all employees actively working in the field.
With our commitment to training both internally and externally, we aim to provide peace of mind in the
field and to our partners. Along with our Safety Incentive Program and Safety Committees, our HSE
Team ensures our employees stay on top of their skills, improve their knowledge of safety, and are
recognized for a job well done. Additionally, all field supervisors complete OSHA 10 certification and
Supervisor Level LPS training. In the past few years alone, Hunton Group has invested over $200,000 in
technician training.</p>
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
		equalizeHeight: true,
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