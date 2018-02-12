<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<section id="why" class="content-section scrollify">
		<div class="">
			<div class="row">
				<div class="col s12 xl6">
					<h2><?php the_title(); ?><div class="num">01</div></h2>
					
					<?php if(have_posts()): the_post(); ?>
								<?php the_content(); ?>
					<?php endif; ?>

				</div>
				<div class="col s12 xl6 vertical-slider">
					<?php $sliders = get_post_meta(get_the_ID(), 'gallery_img', true); ?>
					<div class="scroll-nav">
						<a href="#" class="arrow-left"></a>
						<a href="#" class="arrow-right"></a>
						<span class="count"><span class="current">1/</span><?php echo count($sliders); ?></span>
					</div>
					<div class="item-slider">
						<?php 
						foreach ($sliders as $key => $value) { 
							$img = wp_get_attachment_image_src($value, '550x550');
						?>
							<div class="item">
								<?php echo "<img src=".$img[0].">"; ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="video-gallery">
		<div class="row main-slider ">
			<?php

			for ($i=0; $i<=2 ; $i++) { 
				
				if(get_post_meta(get_the_ID(), 'video_iframe_'.$i, true))
					$j++;
			}
			
			if($j == 1)
				$classes = array( 'm12' );
			elseif($j == 2)
				$classes = array( 'm6', 'm6' );
			elseif($j == 3)
				$classes = array( 'm12', 'm6', 'm6' );

			$c = 0;
			for ($i=0; $i<=2 ; $i++) { 

				if(get_post_meta(get_the_ID(), 'video_iframe_'.$i, true)){ ?>
				
				<?php $img = wp_get_attachment_image_src(get_post_meta(get_the_ID(), 'video_image_'.$i, true), 'full'); ?>
				<div class=" col  center item <?php echo $classes[$c] ?> " style="background: url(<?php echo $img[0] ?>) no-repeat top center; background-size: cover;">
					<h1><?php echo get_post_meta(get_the_ID(), 'video_title_'.$i, true)?></h1>
					<a href="#video-<?php echo $i; ?>" class="modal-trigger play-btn">
						<img src="<?php bloginfo('template_url'); ?>/img/play.svg">
						<img class="rotate" src="<?php bloginfo('template_url'); ?>/img/dottedcircle.svg">
					</a>
				</div>
				<?php $c++; ?>

				<div id="video-<?php echo $i; ?>" class="modal">
					<div class="modal-content">
						<?php echo get_post_meta(get_the_ID(), 'video_iframe_'.$i, true); ?>      
					</div>
				</div>

				<?php } ?>

			<?php } ?>
			
		</div>
	</section>

</div>

<script type="text/javascript">
	$(document).ready(function(){

		var $status = $('.count');
		var $slickElement = $('.item-slider');

		$slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
			var i = (currentSlide ? currentSlide : 0) + 1;
			$status.html('<span class="current">' + i + '/</span>' + slick.slideCount);
		});

		$slickElement.slick({
			arrows: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			vertical: true,
			infinite: false,
			nextArrow: $('.arrow-right'),
			prevArrow: $('.arrow-left')
		});

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

<?php get_footer(); ?>