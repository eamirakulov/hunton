<?php get_header(); ?>
  <div class="page container dev2">
    <div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
      <div class="text">
        <h1><?php echo the_title(); ?></h1>
        <p><?php echo get_field('subheading'); ?></p>
      </div>
    </div>

    <div class="row content-grid">
      <div class="col s12 m8 l8">
        <div class="row posts-grid">
          <?php echo do_shortcode('[ajax_load_more id="7401827893" container_type="div" post_type="post" posts_per_page="6" transition="fade" category="blog"]'); ?>
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