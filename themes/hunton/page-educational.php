<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<section class="content-section markets-cat">
		<div class="row cats">
			<div class="col m2 s12"><h6>Categories:</h6></div>
			<div class="col m10 s12">
				<a href="<?php bloginfo('url'); ?>/markets-served/commercial">Commercial</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/educational" class="active">Educational</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/industrial">Industrial</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/health-care">Health Care</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/governmental">Governmental</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/hospitality">Hospitality</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/retail">Retail</a>
			</div>
		</div>

		<div class="row flex m0">
			<div class="col s12 xl6 p130x40 pr100">
				<h2>Helping Students Excel</h2>
					<p>There’s no smarter, more far-reaching investment than one made for our children. The ability to manage
				temperature, humidity, air quality and sound levels pays off for schools and their communities today and well
				into the future. Developing young minds deserve the best possible learning environment. Students perform
				better in schools that are comfortable, quiet, properly ventilated and well lit. Children demonstrate this fact in
				classrooms every day. And it is proven by research:</p>
				<p>The U.S. Environmental Protection Agency cites a number of critical outcomes that are achieved when schools
				adopt best practices in school design and maintenance, including the following:</p>
				<p>• Higher test scores<br>
				• Increased average daily attendance<br>
				• Lower operational costs<br>
				• Improved teacher satisfaction and retention</p>

				<p>By becoming your energy partner, Hunton Services can help your school system create the indoor environment
				that is essential to learning. Through our technology and expertise, you can unlock your school building’s full
				potential, resulting in greater comfort for students and staff, higher energy efficiency and lower operating costs.
				As Houston’s Trane OEM, Hunton Services is a Choice Partner and U.S. Communities provider for all
				state-related facility HVAC needs -making us the primary provider of HVAC and plumbing needs of any
				school district within the state of Texas.</p>
			</div>
			<div class="col s12 xl6 school1"><div></div></div>
		</div>

		<div class="row flex">
			<div class="col s12 xl8 offset-xl2 center-align pt80 pl75">
				<h2 class="smaller no-before">Featured Education Facility Service Offerings:</h2>
				<p>
					<ul class="custom-ul">
						<li><a href="<?php bloginfo('url'); ?>/mechanical-services">Mechanical Services</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/industrial-services">Building Automation Services</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/indoor-environmental-solutions">Indoor Environmental Solutions</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/rentals">Rental Services</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/mechanical-services/rnewal-services/">Trane Factory OEM Solutions</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/energy-services">Energy Services</a></li><br>
					</ul>
				</p>
			</div>
		</div>

		<section class="content-block block main-slider">
			<div class="page-bg item" style="background: url(<?php bloginfo('template_url'); ?>/img/energy-services-8.png) no-repeat top center; background-size: cover;">
				<div class="text ">
					<h3>High Performance Buildings for Life</h3>
					<a href="#video-1" class="modal-trigger play-btn">
						<img src="<?php bloginfo('template_url'); ?>/img/play.svg">
						<img class="rotate" src="<?php bloginfo('template_url'); ?>/img/dottedcircle.svg">
					</a>
				</div>

				<div id="video-1" class="modal">
					<div class="modal-content">
						<iframe width="640" height="360" src="https://www.youtube.com/embed/WL4SP6t-9WE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>                  
					</div>
				</div>
			</div>
		</section>

		<div class="row building-carousel">
			<div id="schools-slider">
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/wharton.jpg"></div>
					<p>Wharton Community Junior College</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/alvin.jpg"></div>
					<p>Alvin ISD Manville High School</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/brazo.jpg"></div>
					<p>Brazosport ISD- Brazosport High School</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/galena.jpg"></div>
					<p>Galena Park ISD – Cobb 6 th Grade Campus</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/galena2.jpg"></div>
					<p>Galena Park ISD – Galena Park Elementary</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/galenaasd.jpg"></div>
					<p>Galena Park ISD- North Shore High School</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/katy.jpg"></div>
					<p>Katy ISD- Leanord E Merrell Center</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/katy2.jpg"></div>
					<p>Katy ISD- Miller Career and Tech Center</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/katy3.jpg"></div>
					<p>Katy ISD – Morton Ranch High School</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/klein.jpg"></div>
					<p>Klein ISD- Hassler Elementary</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/klein2.jpg"></div>
					<p>Klein ISD- Klein Collin High School</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/lonestar.jpg"></div>
					<p>Lone Star College</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/samhouston.jpg"></div>
					<p>Sam Houston State University</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/sanjac.jpg"></div>
					<p>San Jacinto College Central Campus</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/sanjac2.jpg"></div>
					<p>San Jacinto College North Campus</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/sanjac3.jpg"></div>
					<p>San Jacinto College South Campus</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/schools/santafe.jpg"></div>
					<p>Santa Fe ISD – Santa Fe High School</p>
				</div>
			</div>
		</div>
	</section>
	<section id="case_studies" class="content-section content-block">
		<div class="center">
			<h2 class="bottom-line">Case Studies</h2>
			<p class="center after-title">Our case studies are a reflection of our commitment to our core values. We will perform every job with pride of ownership and provide satisfaction by meeting or exceeding every customer’s expectations. Take a look at our featured jobs, and <a href="<?php bloginfo('url'); ?>/contact-us">let us know what you think!</a></p>
		</div>
		
		<div class="slider-linear posts-grid slider-block-2 row">
			<?php
				$args = array( 'post_type' => 'case_study',
					'tax_query' => array(array(
		    		'taxonomy' => 'case_categories',
		    		'field' => 'slug',
		    		'terms' => array('educational')))
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

<script type="text/javascript">
	$(document).ready(function(){
		$('.modal').modal({
			ready: function(modal, trigger) {
				var videoSrc = modal.find('iframe').attr("src");
				modal.find('iframe').attr("src", videoSrc+"&amp;autoplay=1");
			},
			complete: function() {
				$('iframe').attr('src', $('iframe').attr('src').replace("&amp;autoplay=1", ""));
			}
		});
	});
</script>

<script type="text/javascript">
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
	$('#schools-slider').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 2,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		]
	});
</script>
<?php get_footer(); ?>