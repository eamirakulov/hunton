<?php 
get_header(); ?>
	<div class="breadcrumbs"><?php echo bcn_display(); ?></div>
	<div class="row">
		<div class="col-sm-3 sidebar">
			<?php echo get_sidebar(); ?>
		</div>
		<?php if(have_posts()): the_post(); ?>
			<div class="col-sm-9">
				<article class="page">
					<h2 class="entry_title">
						<?php the_title(); ?>
					</h2>

					<div class="entry_content">
						<?php the_content(); ?>
					</div>
				</article>
			</div>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>