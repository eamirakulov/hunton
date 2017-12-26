<?php

/**
 * Returns page/post slug
 */

function the_slug()
{
	global $post;
	$post_data = get_post($post->ID, ARRAY_A);
	$slug = $post_data['post_name'].'_page';
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
			'header-menu' => 'Header Menu',
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
			'supports' => array('title','editor')
		)
	);
}
add_action( 'init', 'create_posttype' );

register_taxonomy( 'case_categories', array('case_study'), array(
	'hierarchical' => true, 
	'label' => 'Categories', 
	'singular_label' => 'Category', 
	'rewrite' => array( 'slug' => 'case_categories', 'with_front'=> false ))
);
register_taxonomy_for_object_type( 'case_categories', 'case_study' );

register_taxonomy( 'faq_categories', array('faq'), array(
	'hierarchical' => true, 
	'label' => 'Categories', 
	'singular_label' => 'Category', 
	'rewrite' => array( 'slug' => 'faq_categories', 'with_front'=> false ))
);
register_taxonomy_for_object_type( 'faq_categories', 'case_study' );


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

    $output .= '<div class="item col">
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
    </div>';

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

