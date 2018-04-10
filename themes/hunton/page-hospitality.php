<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<section class="content-section markets-cat pb0">
		<div class="row cats">
			<div class="col m2 s12"><h6>Categories:</h6></div>
			<div class="col m10 s12">
				<a href="<?php bloginfo('url'); ?>/markets-served/commercial">Commercial</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/educational">Educational</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/industrial">Industrial</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/healthcare">Health Care</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/governmental">Governmental</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/hospitality" class="active">Hospitality</a>
				<a href="<?php bloginfo('url'); ?>/markets-served/retail">Retail</a>
			</div>
		</div>

		<div class="row flex">
			<div class="col s12 xl6 p130x40 pr100">
				<h2>Be Our Guest: Welcome to a World of Comfort<div class="num">01</div></h2>
					<p>Whether you are a new guest at a church or an upscale boutique hotel, comfort is paramount to your
						experience. Hunton Services offers hospitality facility management services that create highly
						responsive and comfortable environments for spaces of worship, guest rooms, lobbies, restaurants,
					banquet halls, spas, exercise spaces, laundry rooms, and kitchens.</p>
					<p>Though we know competition is fierce the hospitality sector, with Hunton Services at your side, you can
						ensure
						guests and visitors keep coming back. And if you are energy-minded, our team of engineers can ensure
					your facility is optimized to run as its intended: cost efficiently based on your unique usage.</p>
				</div>
			<div class="col s12 xl6 hos1"><div></div></div>
		</div>

		<div class="row flex">
			<div class="col s12 xl8 offset-xl2 center-align p130x40 pb80 pl75">
				<h2 class="smaller">Hunton Services’ Featured Hospitality Services<div class="num">02</div></h2>
				<p>
					<ul class="custom-ul">
						<li><a href="<?php bloginfo('url'); ?>/mechanical-services">Mechanical Services</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/industrial-services">Building Automation Services</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/energy-services">Energy Services</a></li><br>
						<li><a href="#">Trane Factory OEM Solutions</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/indoor-environmental-solutions/">Indoor Environmental Solutions</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/">Lighting &amp; Plumbing Solutions</a></li><br>
						<li><a href="<?php bloginfo('url'); ?>/rentals">Rental Services</a></li><br>
					</ul>
				</p>
			</div>
		</div>


		<div class="row building-carousel pt40">
			<h2 class="center bottom-line mb40">Featured Hotels:</h2>

			<div id="building-slider">
				<div class="item col s4">
					<p>Hotel ZaZa</p>
				</div>
				<div class="item col s4">
					<p>Hotel Granduca</p>
				</div>
				<div class="item col s4">
					<p>Hilton Americas</p>
				</div>
			</div>
		</div>

		<div class="row building-carousel pt0">
			<h2 class="center bottom-line mb40">Featured Churches:</h2>

			<div id="church-slider">
				<div class="item col s4">
					<p>Trinity Lutheran Church and School – Houston</p>
				</div>
				<div class="item col s4">
					<p>Trinity Lutheran Church and School - Spring</p>
				</div>
				<div class="item col s4">
					<p>Lakewood Church</p>
				</div>
				<div class="item col s4">
					<p>St. Martin’s Episcopal Church</p>
				</div>
				<div class="item col s4">
					<p>Windwood Presbyterian Church</p>
				</div>
				<div class="item col s4">
					<p>First United Methodist</p>
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
		    		'terms' => array('hospitality')))
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
		slidesToShow: 4,
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
	$('#church-slider').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
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