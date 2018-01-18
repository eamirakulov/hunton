<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<section class="content-section p0">
		<div class="row flex mb0">
			<div class="col s12 xl6 p130x40 pr100">
				<h2 class="lightning">
					Optimizing Energy Efficiency in Every Market
					<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/lightning-icon.svg"></div>
				</h2>
				<p>Hunton services has deep, practical industry specific experience in delivering the best energy management systems, project financing solutions and renewable energy options to commercial, educational, government and municipal, healthcare, industrial, hospitality and retail facilities.</p>

				<p>Hunton Services employs technologies and techniques for both conventional and green energy options. All of our energy management solutions are further supported by a range of monitoring, maintenance and financing services.</p>
				
			</div>
			<div class="col s12 xl6 energy-services-1">
				<div></div>
			</div>
		</div>
	</section>

	<section class="content-section p0">
		<div class="row flex mb0">
			<div class="col s12 xl6 energy-services-2">
				<div></div>
			</div>
			<div class="col s12 xl6 p130x40 pl75">
				<h2>
					Operational Assessments
					<div class="num">01</div>
				</h2>
				<p>Hunton Services understands economic factors typically drive mechanical and electrical solution decisions. Every Commercial building we service requires a customized solution, which effectively balances functional and financial needs. In doing so, we ensure a comfortable and pleasant environment for tenants and their employees while providing cost effective solutions for the building management company.</p>
				
			</div>
		</div>
	</section>

	<section class="content-section p0">
		<div class="row flex mb0">
			<div class="col s12 xl6 p130x40 pr100">
				<h2>
					Expert Retrofits   
					<div class="num">02</div>
				</h2>
				<p>Hunton Services understands economic factors typically drive mechanical and electrical solution decisions. Every Commercial building we service requires a customized solution, which effectively balances functional and financial needs. In doing so, we ensure a comfortable and pleasant environment for tenants and their employees while providing cost effective solutions for the building management company.</p>
				
			</div>
			<div class="col s12 xl6 energy-services-3">
				<div></div>
			</div>
		</div>
	</section>

	<section class="content-section p0">
		<div class="row flex mb0">
			<div class="col s12 xl6 energy-services-4">
				<div></div>
			</div>
			<div class="col s12 xl6 p130x40 pl75">
				<h2>
					Energy Supply Services
					<div class="num">03</div>
				</h2>
				<p>Hunton Services understands economic factors typically drive mechanical and electrical solution decisions. Every Commercial building we service requires a customized solution, which effectively balances functional and financial needs. In doing so, we ensure a comfortable and pleasant environment for tenants and their employees while providing cost effective solutions for the building management company.</p>
				
			</div>
		</div>
	</section>

	<section class="content-section p0">
		<div class="row flex mb0">
			<div class="col s12 xl6 p130x40 pr100">
				<h2>
					Dynamic Commissioning 
					<div class="num">04</div>
				</h2>
				<p>Hunton Services understands economic factors typically drive mechanical and electrical solution decisions. Every Commercial building we service requires a customized solution, which effectively balances functional and financial needs. In doing so, we ensure a comfortable and pleasant environment for tenants and their employees while providing cost effective solutions for the building management company.</p>
				
			</div>
			<div class="col s12 xl6 energy-services-5">
				<div></div>
			</div>
		</div>
	</section>

	<section class="content-section p0">
		<div class="row flex mb0">
			<div class="col s12 xl6 energy-services-6">
				<div></div>
			</div>
			<div class="col s12 xl6 p130x40 pl75">
				<h2>
					Measurement and Verification 
					<div class="num">05</div>
				</h2>
				<p>Hunton Services understands economic factors typically drive mechanical and electrical solution decisions. Every Commercial building we service requires a customized solution, which effectively balances functional and financial needs. In doing so, we ensure a comfortable and pleasant environment for tenants and their employees while providing cost effective solutions for the building management company.</p>
				
			</div>
		</div>
	</section>

	<section class="content-section p0">
		<div class="row flex mb0">
			<div class="col s12 xl6 p130x40 pr100">
				<h2>
					Project Development
					<div class="num">06</div>
				</h2>
				<p>Hunton Services understands economic factors typically drive mechanical and electrical solution decisions. Every Commercial building we service requires a customized solution, which effectively balances functional and financial needs. In doing so, we ensure a comfortable and pleasant environment for tenants and their employees while providing cost effective solutions for the building management company.</p>
				
			</div>
			<div class="col s12 xl6 energy-services-7">
				<div></div>
			</div>
		</div>
	</section>

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
					<iframe width="640" height="360" src="https://www.youtube.com/embed/rN6nlNC9WQA?feature=oembed&controls=0&hd=1&autohide=1&rel=0&showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>                  
				</div>
			</div>
		</div>
	</section>

	<section class="bg-gray energy-services-logos">
		<div class="row center m0">
			<div class="col m4 s12">
				<img src="<?php bloginfo('template_url'); ?>/img/energy-services-9.png" alt="">
			</div>
			<div class="col m4 s12">
				<img src="<?php bloginfo('template_url'); ?>/img/energy-services-10.png" alt="">
			</div>
			<div class="col m4 s12">
				<img src="<?php bloginfo('template_url'); ?>/img/energy-services-11.png" alt="">
			</div>
		</div>
	</section>

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

</div>

<script type="text/javascript">
	$('.responsive').slick({
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
</script>

<?php get_footer(); ?>