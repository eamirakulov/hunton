<?php get_header(); ?>

	<div class="post page container">
		<div class="page-bg" style="background: url(<?php echo get_the_post_thumbnail_url(26); ?>) no-repeat top center; background-size: cover;">
			<div class="text">
				<h1><?php echo get_the_title(26); ?></h1>
				<p><?php echo get_field('subheading', 26); ?></p>
			</div>
		</div>

	    <div class="row content-grid">
	      <div class="col s12 m8 l8">
			<?php if(have_posts()): the_post(); ?>
				<article class="page">
					<div class="date"><?php echo get_the_date(); ?></div>
					<h2 class="entry_title">
						<?php the_title(); ?>
					</h2>

					<div class="entry_content">
						<?php the_content(); ?>
					</div>
					<div class="bottom-meta">
						<?php 
							$categories = get_categories( array(
							    'orderby' => 'name',
							    'parent'  => 0
							) );
							 
							foreach ( $categories as $category ) {
							    printf( '<a class="btn-default" href="%1$s">%2$s</a><br />',
							        esc_url( get_category_link( $category->term_id ) ),
							        esc_html( $category->name )
							    );
							}
						?>

						<a href="#">Social share</a>
					</div>
				</article>
			<?php endif; ?>
	      </div>

	      <div class="col s12 m4 l4 sidebar">
	        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	          <ul id="sidebar">
	            <?php dynamic_sidebar( 'sidebar-1' ); ?>
	          </ul>
	        <?php endif; ?>
	      </div>
	      <script type="text/javascript">
	        document.getElementById("s").placeholder = "Search...";
	      </script>
	    </div>
	</div>

<?php get_footer(); ?>