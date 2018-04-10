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
		<section class="content-section mobile-pt50">
			<div class="row valign-wrapper">
				<div class="col s12 xl6 pr100">
					<h2 class="our-team">Hunton Group<div class="num"><img src="<?php bloginfo('template_url'); ?>/img/our-team-icon.svg"></div></h2>
					<p>
					Hunton group is known for outstanding customer service, expertise and professionalism. We strive to provide solutions and excel in all what we do. We value training here at Hunton and offer the opportunity to attend factory training and in-house training programs. </p>

					<p>As a leader in industrial, light commercial and building automation, we offer competitive pay and seek to hire for longevity. Please see the below links for specific job descriptions and requirements and explore the many opportunities here at Hunton Group.</p>

					<p>Come find out why Hunton has been voted by our employees for Top Places to work for the fifth time and this year earning the top 5th spot for Houston in mid-size companies.</p>
				</div>
				<div class="col s12 xl6 right-align hide-on-med-and-down">
					<img src="<?php bloginfo('template_url'); ?>/img/careers.png">
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