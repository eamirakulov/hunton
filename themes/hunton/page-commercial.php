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
				<a href="<?php bloginfo('url'); ?>/markets-served/commercial" class="active">Commercial</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/educational">Educational</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/industrial">Industrial</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/healthcare">Health Care</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/governmental">Governmental</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/hospitality">Hospitality</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/retail">Retail</a>
			</div>
		</div>

		<div class="row flex m0">
			<div class="col s12 xl6 p130x40 pr100 mobile-pt50">
				<h2>Going Beyond Building Maintenance</h2>
					<p>At Hunton Services, we speak the language of buildings. It is our mission to customize solutions that deliver the
						lowest total life-cycle cost of ownership for the operation, ownership, and maintenance of your facility’s
						mechanical systems. Our services encompass the entire life cycle of your building. We take into consideration
						the people inside the buildings, the way the buildings are used- the needs most important to those who make
						the space productive. Our approach is methodical and data-based to save both energy and costs, and we value
						each relationship we build as we work with our team of <a target="_blank" href="https://portal.aeecenter.org/i4a/pages/index.cfm?pageID=3351">Certified Energy Managers</a>, solutions experts, and
						<a href="https://www.nspe.org/resources/licensure/what-pe" target="_blank">Professional Engineers</a> to unlock the true potential of each facility. We want to look beyond the building, and
						we hope you will welcome our partnership as we aim to ensure our results truly support our messaging: “High
					Performance Buildings for Life.”</p>
			</div>
			<div class="col s12 xl6 building"><div></div></div>
		</div>

		<div class="row flex">
			<div class="col s12 xl8 offset-xl2 center-align pt80 pl75">
				<h2 class="smaller no-before">Hunton Services offers commercial facilities services, including:</h2>
				<p>
					<ul class="custom-ul ">
						<li><a href="<?php bloginfo('url'); ?>/mechanical-services">Mechanical Services</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/energy-services">Energy Services</a></li> <br>
						<li><a href="<?php bloginfo('url'); ?>/industrial-services">Building Automation Services</a></li> <br>
						<li><a href="<?php bloginfo('url'); ?>/indoor-environmental-solutions">Indoor Environmental Solutions</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/rentals">Rental Services</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/engineered-fabricated-products">Engineered &amp; Fabricated Products</a></li><br>
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
						<iframe width="640" height="360" src="https://www.youtube.com/embed/UGfp338GyRc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>                  
					</div>
				</div>
			</div>
		</section>

		<div class="row building-carousel">
			<h2 class="center bottom-line">Commercial Properties</h2>
			<p class="center after-title">&nbsp;</p>

			<div id="building-slider">
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/prop2020.png"></div>
					<p>2020 Properties</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/abbh.png"></div>
					<p>ABB Headquarters</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/anadarko.png"></div>
					<p>Anadarko</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/campwampum.jpg"></div>
					<p>Camp Wampum</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/parkway.jpg"></div>
					<p>Parkway Properties- CityWestPlace</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/transwestern.jpg"></div>
					<p>Transwestern- Four Oaks</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/hess.jpg"></div>
					<p>Hess Tower</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/jacobs.jpg"></div>
					<p>Jacobs Engineering</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/metronational.jpg"></div>
					<p>MetroNational</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/transpenn.jpg"></div>
					<p>Transwestern- Pennzoil</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/pmr.jpg"></div>
					<p>PM Realty Group</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/titledata.jpg"></div>
					<p>Title Data</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/wellsreit.jpg"></div>
					<p>Wells Reit – One Park Place</p>
				</div>
				<div class="item col s4">
					<div class="img"><img src="<?php echo bloginfo('template_url'); ?>/img/sanfelipe.jpg"></div>
					<p>Parkway Properties- San Felipe Plaza</p>
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
	$('#building-slider').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 3,
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
</script>
<?php get_footer(); ?>