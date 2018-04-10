<?php

function custom_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div class="row" id="comment-<?php comment_ID(); ?>">
     	<div class="ava col s2">
    		<?php echo get_avatar($comment,$size='80'); ?>
     	</div>

     	<div class="col s10">
			<div class="author"><?php printf(__('%s'), get_comment_author_link()); ?></div>
			<div class="comment-meta commentmetadata">
				<div class="date"><?php printf(__('%1$s'), get_comment_date(), '') ?></div>
         		<div class="reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></div>
      			<div class="text"><?php comment_text() ?></div>
			</div>
     	</div>
     </div>
    </li>
<?php }

function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );
function crunchify_disable_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','crunchify_disable_comment_url');

function my_update_comment_fields( $fields ) {

	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . __( '(optional)', 'text-domain' );
	$aria_req  = $req ? "aria-required='true'" : '';

	$fields['author'] =
		'<div class="row"><div class="comment-form-author input-field col s5">
			<input id="author" name="author" type="text" id="name" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30" ' . $aria_req . ' /><label for="name">FIRST & LAST NAME</label>
		</div>';

	$fields['email'] =
		'<div class="comment-form-email input-field col s5">
			<input id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) .
		'" size="30" ' . $aria_req . ' /><label for="email">E-MAIL</label>
		</div></div>';

	unset($fields['url']);

	return $fields;
}
add_filter( 'comment_form_default_fields', 'my_update_comment_fields' );

function my_update_comment_field( $comment_field ) {

  $comment_field =
    '<div class="row"><div class="comment-form-comment input-field col s10">
        <textarea required class="materialize-textarea" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea><label for="comment">ENQUIRY MESSAGE</label>
    </div></div>';

  return $comment_field;
}
add_filter( 'comment_form_field_comment', 'my_update_comment_field' );

function wpse71451_enqueue_comment_reply() {
    if ( get_option( 'thread_comments' ) ) { 
        wp_enqueue_script( 'comment-reply' ); 
    }
}
// Hook into comment_form_before
add_action( 'comment_form_before', 'wpse71451_enqueue_comment_reply' );

/**
 * Returns page/post slug
 */
function the_slug()
{
	global $post;
	$post_data = get_post($post->ID, ARRAY_A);
	$slug = $post_data['post_name'].'_page ID_'.$post->ID;
	if(!is_front_page() && is_home()){
		$slug .= ' blog_page';
	}
	return $slug;
}

add_action( 'widgets_init', 'jcf_slug_widgets_init' );
function jcf_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1'
    ));
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-2'
    ) );
}

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function my_excerpt_length($length) {
	return 10;
}

add_filter('excerpt_length', 'my_excerpt_length');


/**
 * Add menu
 */
add_theme_support( 'menus' );

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'header-menu' => 'Header Menu'
		)
	);
}

add_theme_support( 'post-thumbnails' );

/**
 * Add new content type
 */
function create_posttype() {
	register_post_type( 'case_study',
		array(
			'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __( 'Case Study' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'case_study'),
			'supports' => array('title','editor','thumbnail')
		)
	);

	register_post_type( 'faq',
		array(
			'labels' => array(
				'name' => __( 'FAQ' ),
				'singular_name' => __( 'FAQ' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'faq'),
			'supports' => array('title', 'editor')
		)
	);

}
add_action( 'init', 'create_posttype' );

/**
 * Category for Case Studies
 */
register_taxonomy( 'case_categories', array('case_study'), array(
	'hierarchical' => true, 
	'label' => 'Categories', 
	'singular_label' => 'Category', 
	'rewrite' => array( 'slug' => 'case_categories', 'with_front'=> false ))
);
register_taxonomy_for_object_type( 'case_categories', 'case_study' );

/**
 * Category for FAQ
 */
register_taxonomy( 'faq_categories', array('faq'), array(
	'hierarchical' => true, 
	'label' => 'Categories', 
	'singular_label' => 'Category', 
	'rewrite' => array( 'slug' => 'faq_categories', 'with_front'=> false ))
);
register_taxonomy_for_object_type( 'faq_categories', 'faq' );


add_image_size( '550x550', 550, 550, array( 'center', 'center' ));
add_image_size( '800x600', 800, 600, true);

add_post_type_support( 'page', 'excerpt' );

/**
 * Set template for Engineered & Fabricated Products child pages
 */
add_filter(
	'page_template',
	function ($template) {
		global $post;

		if ($post->post_parent && $post->post_parent == 121) {

			$parent = get_post(
				reset(array_reverse(get_post_ancestors($post->ID)))
			);

			$parent = get_post($post->post_parent);
			$child_template = locate_template(
				[
					'page-ef-products-child.php',
					'page.php',
				]
			);

			if ($child_template) return $child_template;
		}

		if ($post->post_parent && $post->post_parent == 189) {

			$parent = get_post(
				reset(array_reverse(get_post_ancestors($post->ID)))
			);

			$parent = get_post($post->post_parent);
			$child_template = locate_template(
				[
					'page-ies-child.php',
					'page.php',
				]
			);

			if ($child_template) return $child_template;
		}



		return $template;
	}
);


/**
 * Get case studies Ajax method
 */
function f711_get_post_content_callback() {

    $category = $_POST['category'];

    $args = array( 
    	'post_type' => 'case_study',
    	'tax_query' => array(array(
    		'taxonomy' => 'case_categories',
    		'field' => 'slug',
    		'terms' => array($category)
    	) )
    );
    $posts = get_posts( $args );
    $output = '';
	foreach ( $posts as $post ):
    $output .= '<a class="see" target="_blank" href=' . get_field('document', $post->ID) . '><div class="item col">
	    <div class="image">
		    <div class="overlay">
		    	'.get_the_post_thumbnail($post->ID, 'medium').'
		    </div>
		    <span class="see">see more</span>
	    </div>
    	<div class="location">
    		'.get_post_meta( $post->ID, 'location', true ).'
    	</div>
    	<div class="text center">
    		<h5>'.get_the_title($post->ID).'</h5>
    	</div>
    </div></a>';

	endforeach; 
	wp_reset_postdata();
	echo $output;
    die();
}
add_action( 'wp_ajax_f711_get_post_content', 'f711_get_post_content_callback' );


/**
 * Get faq's Ajax method
 */
function f711_get_faq_content_callback() {

    $category = $_POST['category'];

    $args = array( 
    	'post_type' => 'faq',
    	'tax_query' => array(array(
    		'taxonomy' => 'faq_categories',
    		'field' => 'slug',
    		'terms' => array($category)
    	) )
    );
    $posts = get_posts( $args );
    $output = '';
	foreach ( $posts as $post ):

    $output .= '<li>
				<div class="collapsible-header">
					<h5>'.get_the_title($post->ID).'</h5>
				</div>
				<div class="collapsible-body">
					<p>'.get_post_field('post_content', $post->ID).'</p>
				</div>
			</li>';

	endforeach; 
	wp_reset_postdata();
	echo $output;
    die();
}
add_action( 'wp_ajax_f711_get_faq_content', 'f711_get_faq_content_callback' );


function add_query_vars_filter( $vars ){
  $vars[] = "q";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<span[^>]+\>/i', '\2', $content);

    return $content;
});
