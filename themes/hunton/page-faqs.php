<?php get_header(); ?>
<div class="page container dev2">
	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo get_field('subheading'); ?></p>
		</div>
	</div>

	<div class="content-block block ">
		<div class="row">
			<div class="case-cats col m9 s12">
				<?php 
					$args = array( 'hide_empty=0' );
					$case_terms = get_terms( 'faq_categories', $args );
					$q = get_query_var( 'q', '' );
				?>
				<div class="col m2 s12"><h6>Categories:</h6></div>
				<div class="col m10 s12">
					<?php foreach ($case_terms as $key => $value) {
						if($value->slug == 'frequent' && $q == '')
							echo '<a class="active" id="'.$value->slug.'">'.$value->name.' ('.$value->count.')</a> ';
						else	
							echo '<a id="'.$value->slug.'">'.$value->name.' ('.$value->count.')</a> ';
					}?>
				</div>
			</div>
			<div class="col m3 s12">
				<form class="custom-search" action="" method="GET">
					<input type="text" id="search-text" name="q" value="<?php echo $q; ?>" placeholder="Search...">
					<input type="submit" id="submit" value="">
				</form>
			</div>
		</div>

		<ul class="collapsible posts-grid faq-accordion row" data-collapsible="accordion">
			<?php
			if($q != ''){
				$args = array( 'post_type' => 'faq', 's' => $q);
			}
			else{
				$args = array( 
					'post_type' => 'faq',
					'order' => 'ASC',
					'tax_query' => array(array(
					'taxonomy' => 'faq_categories',
					'field' => 'slug',
					'terms' => array('frequent')))
				);
			}
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<li>
				<div class="collapsible-header">
					<h5><?php the_title(); ?></h5>
				</div>
				<div class="collapsible-body big-spacing">
					<p><?php echo the_content(); ?></p>
				</div>
			</li>
			<?php endforeach; wp_reset_postdata(); ?>
		</ul>
	</div>

	<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
		<div class="text">
			<h3>If you do not find the answer you are looking for, please reach out, and we will direct you to the appropriate resource.</h3>
			<a href="" class="btn-green btn-large">CONTACT US TODAY!</a>
		</div>
	</div>
</div>

<script type="text/javascript">

	$(".case-cats .m10 a").click(function () {
		var category = $(this).attr('id');
		$('.case-cats .m10 a').removeClass('active');
		$('#search-text').val('');
		$(this).addClass('active');
		$.ajax({
			type: 'POST',
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data: {
				'category': category,
				'action': 'f711_get_faq_content'
			}, success: function (result) {
				$('.faq-accordion').html(result);
			},
		});
	});
</script>

<?php get_footer(); ?>