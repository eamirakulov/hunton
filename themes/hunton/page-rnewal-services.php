<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php wp_upload_dir(); ?>/2017/12/whats_header.jpg) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1>What’s Happening</h1>
			<p></p><p>Hunton comes with a blogging platform, packed with versatile and amazing blog layouts</p>
		</div>
	</div>

	<div class="content-block block">
		<h4 class="bbf1f4fc mt0">R'newal™ Service Programs</h4>
		<p>The Trane R’newal™ Service Programs are comprehensive services that restore the performance of either the units compressor or building controls by replacing worn parts and materials or upgrading software technology. This service can only be offered by the OEM or Hunton Services (the Trane Manufactures Representative). This service brings your existing unit(s) to the same level of reliability and current technology as offered by a new Trane chiller or building control unit by:</p>

		<div class="main-slider">
			<div class="page-bg item" style="background: url(<?php bloginfo('template_url'); ?>/img/rneal-video.jpg) no-repeat top center; background-size: cover;">
				<div class="text ">
					<h3>Hunton R'newal</h3>
					<a href="#video-1" class="modal-trigger play-btn">
						<img src="<?php bloginfo('template_url'); ?>/img/play.svg">
						<img class="rotate" src="<?php bloginfo('template_url'); ?>/img/dottedcircle.svg">
					</a>
				</div>

				<div id="video-1" class="modal">
					<div class="modal-content">
						<iframe width="640" height="360" src="https://www.youtube.com/embed/rN6nlNC9WQA?feature=oembed&controls=0&hd=1&autohide=1&rel=0&showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>                  
					</div>
				</div>
			</div>
		</div>
		
		<h4 class="bbf1f4fc mt0">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt:</h4>

		<ul class="green-circle">
			<li><b>BAS R’newal Program Trane BAS R’newal™</b> is a building controls upgrade program designed to make existing building automation systems (BAS) more effective and to improve building performance, while leveraging the equipment you already have in place. With cost-effective options and open systems designed for flexibility and integration, Trane renews your system without the cost and inconvenience of a full replacement. Link to detailed description: <b class="blue-text">Trane BAS R'newal Program</b></li>
			<li><b>BAS R’newal Program Trane BAS R’newal™</b> is a building controls upgrade program designed to make existing building automation systems (BAS) more effective and to improve building performance, while leveraging the equipment you already have in place. With cost-effective options and open systems designed for flexibility and integration, Trane renews your system without the cost and inconvenience of a full replacement. Link to detailed description: <b class="blue-text">Trane BAS R'newal Program</b></li>
			<li><b>BAS R’newal Program Trane BAS R’newal™</b> is a building controls upgrade program designed to make existing building automation systems (BAS) more effective and to improve building performance, while leveraging the equipment you already have in place. With cost-effective options and open systems designed for flexibility and integration, Trane renews your system without the cost and inconvenience of a full replacement. Link to detailed description: <b class="blue-text">Trane BAS R'newal Program</b></li>
		</ul>

		<div class="row mt35 hide-on-small-only">
			<div class="col m6 s12"><img src="<?php bloginfo('template_url'); ?>/img/our-history-2.svg" alt=""></div>
			<div class="col m6 s12"><img src="<?php bloginfo('template_url'); ?>/img/our-history-3.svg" alt=""></div>
		</div>
	</div>
</div>

<div class="dev2"><div class="container bg-gray">
	<div class="content-block ">
		<h2 class="center bottom-line">Related</h2>
		<p class="center after-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

		<div class="slider-linear slider-block-1 posts-grid row">
			<?php
			$args = array( 'posts_per_page' => 12);
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

			<div class="col item">
				<div class="thumb" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;"></div>
				<div class="text">
					<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
			</div>

			<?php endforeach; 
			wp_reset_postdata();?>
		</div>
	</div>
</div></div>

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

		$('.slider-block-1').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
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
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			]
		});
	});
</script>

<?php get_footer(); ?>