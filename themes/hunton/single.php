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
					<div class="bottom-meta row">
						<div class="left-align col s12 m6">
							<?php 
								$categories = get_categories( array(
								    'orderby' => 'name',
								    'parent'  => 0
								) );
								 
								foreach ( $categories as $category ) {
								    printf( '<a class="btn-default cat" href="%1$s">%2$s</a>',
								        esc_url( get_category_link( $category->term_id ) ),
								        esc_html( $category->name )
								    );
								}
							?>
							<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
							    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
							</div>

							<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
						</div>

						<div class="right-align col s12 m6">
							<?php
								$posttags = get_the_tags();
								if ($posttags) {
								  foreach($posttags as $tag) { ?>
								    <span class="tag-item"><?php echo $tag->name . ' '; ?></span>
								  <?php }
								}
							?>
						</div>
					</div>

				</article>
			<?php endif; ?>


			<div class="related-posts posts-grid">
				<h3>Related posts</h3>
				<div class="row">
				<?php
				$tags = wp_get_post_tags($post->ID);
				if ($tags) {
					$first_tag = $tags[0]->term_id;
					$args=array(
						'tag__in' => array($first_tag),
						'post__not_in' => array($post->ID),
						'posts_per_page'=>2,
						'caller_get_posts'=>1
					);
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
						while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<div class="col s12 m6 l6 item">
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
						<?php
					endwhile;
				}
				wp_reset_query();
			}
			?>
				</div>
			</div>

			<div class="comments">
				<div class="comm-number"><?php comments_number( 'no comments', 'one comment', '% comments' ); ?></div>
				<?php 
					$args = array(
						'id_form'           => 'commentform',
						'class_form'      => 'comment-form',
						'id_submit'         => 'submit',
						'class_submit'      => 'submit',
						'name_submit'       => 'submit',
						'title_reply'       => __( 'Post a Comment' ),
						'title_reply_to'    => __( 'Leave a Reply to %s' ),
						'cancel_reply_link' => __( 'Cancel Reply' ),
						'label_submit'      => __( 'SUBMIT' ),
						'comment_notes_before' => '',
						'submit_button' => '<div class="row"><div class="input-field col s8"><input name="%1$s" id="%2$s" type="submit" value="SUBMIT" class="%3$s"></div></div>'
					);
				?>

				<?php comments_template(); ?>
				<?php comment_form($args); ?>
			</div>
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