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
		<div class="content-block">
				<h2 class="center bottom-line">News</h2>
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
								<p><?php echo the_excerpt(); ?></p>

								<div class="meta">
									<span class="cat">
										<?php
										$post_categories = wp_get_post_categories(get_the_ID());
										$cats = array();

										foreach($post_categories as $c){
											$cat = get_category( $c );
											echo $cat->name. " ";
										}
										?>
									</span>
									<span class="date"><?php echo get_the_date(); ?></span>
								</div>
							</div>
						</div>

					<?php endforeach; 
					wp_reset_postdata();?>
				</div>
				<div class="center">
					<a href="" class="btn-green btn-large">see all news</a>
				</div>
		</div>
	</div>


	<div class="container bg-gray">
		<div class="content-block ">
			<h2 class="center bottom-line">Blog</h2>
			<p class="center after-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

			<div class="slider-linear slider-block-2 posts-grid row">
				<?php
				$args = array( 'posts_per_page' => 12);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class="col item">
					<div class="thumb" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;"></div>
					<div class="text">
						<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>

						<div class="meta">
							<span class="cat">
								<?php
								$post_categories = wp_get_post_categories(get_the_ID());
								$cats = array();

								foreach($post_categories as $c){
									$cat = get_category( $c );
									echo $cat->name. " ";
								}
								?>
							</span>
							<span class="date"><?php echo get_the_date(); ?></span>
						</div>
					</div>
				</div>

				<?php endforeach; wp_reset_postdata(); ?>
			</div>
			<div class="center">
				<a href="" class="btn-green btn-large">see all news</a>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="content-block">
				<h2 class="center bottom-line">Hunton Newsletter</h2>
				<p class="center after-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

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

									<div class="meta">
										<span class="cat">
											<?php
											$post_categories = wp_get_post_categories(get_the_ID());
											$cats = array();

											foreach($post_categories as $c){
												$cat = get_category( $c );
												echo $cat->name. " ";
											}
											?>
										</span>
										<span class="date"><?php echo get_the_date(); ?></span>
									</div>
								</div>
							</div>
						</div>

					<?php endforeach; 
					wp_reset_postdata();?>
				</div>
				<div class="center">
					<a href="" class="btn-green btn-large">see all news</a>
				</div>
		</div>
	</div>

	<div class="container">
		<div class="content-block">
			<h2 class="center bottom-line">Social Media</h2>
			<p class="center after-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

			<div class="center social-media">
				<a class="" href="">
					<img src="<?php bloginfo('template_url'); ?>/img/romb-tw.svg" alt="">
				</a>
				<a class="" href="">
					<img src="<?php bloginfo('template_url'); ?>/img/romb-fb.svg" alt="">
				</a>
				<a class="" href="">
					<img src="<?php bloginfo('template_url'); ?>/img/romb-in.svg" alt="">
				</a>
			</div>
		</div>
	</div>

	<div class="container bg-gray">
		<div class="content-block block">
			<h2 class="center bottom-line">Calendar</h2>
			<p class="center after-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

			<ul class="collapsible posts-grid accordion" data-collapsible="accordion">
				<?php
				$args = array( 'posts_per_page' => 8);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<li>
					<div class="collapsible-header">
						<div class="row">
							<div class="col l2 m4 s12"><span class="date"><?php echo get_the_date('M, j Y'); ?></span></div>
							<div class="col l10 m8 s12"><h5><?php the_title(); ?></h5></div>
						</div>
					</div>
					<div class="collapsible-body">
						<div class="row">
							<div class="col l2 m4 s12"><?php echo the_post_thumbnail('thumbnail'); ?></div>
							<div class="col l10 m8 s12">
								<span class="location">Location: San Francisko, CA</span>
								<p><?php echo the_content(); ?></p>
							</div>
						</div>
					</div>
				</li>

				<?php endforeach; wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>

</div>

<script type="text/javascript">
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
</script>

<?php get_footer(); ?>