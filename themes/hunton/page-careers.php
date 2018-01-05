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
		<section class="content-section">
			<div class="row valign-wrapper">
				<div class="col s12 xl6 pr100">
					<h2 class="our-team">Our Team<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/our-team-icon.svg"></div></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p><a href="#" class="btn-green">READ MORE</a></p>
				</div>
				<div class="col s12 xl6 right-align">
					<img src="<?php bloginfo('template_url'); ?>/img/careers-img-1.svg">
				</div>
			</div>
		</section>
	</div>

	<div class="container bg-gray careers-bottom">
		<div class="content-block block main-slider">
			<div class="page-bg item" style="background: url(<?php bloginfo('template_url'); ?>/img/careers-img-2.svg) no-repeat top center; background-size: cover;">
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
		</div>
	</div>
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

<?php get_footer(); ?>