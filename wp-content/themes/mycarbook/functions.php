<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


require_once get_template_directory() . '/inc/redux-options.php';
require_once get_template_directory() . '/inc/metaboxes.php';

function mycarbook_setup() {
	load_theme_textdomain( 'mycarbook', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(array(
		'header_nav' => esc_html__('Header Navigation', 'mycarbook' ),
		'footer_info_nav' => esc_html__('Footer Information Navigation', 'mycarbook' ),
		'footer_customer_support_nav' => esc_html__('Footer Customer Support Navigation', 'mycarbook' ),
	));
	
	
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'mycarbook_setup' );

function mycarbook_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mycarbook_content_width', 640 );
}
add_action( 'after_setup_theme', 'mycarbook_content_width', 0 );

function mycarbook_scripts() {
	wp_enqueue_style( 'cb-theme-style', get_stylesheet_uri(), array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-open-iconic-bootstrap-css', get_stylesheet_directory_uri() . '/assets/style/open-iconic-bootstrap.min.css' , array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-animate-css', get_stylesheet_directory_uri() . '/assets/style/animate.css' , array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-owl-carousel-css', get_stylesheet_directory_uri() . '/assets/style/owl.carousel.min.css' , array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-owl-theme-css', get_stylesheet_directory_uri() . '/assets/style/owl.theme.default.min.css' , array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-magnific-popup-css', get_stylesheet_directory_uri() . '/assets/style/magnific-popup.css' , array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-aos-css', get_stylesheet_directory_uri() . '/assets/style/aos.css' , array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-ionicons-min-css', get_stylesheet_directory_uri() . '/assets/style/ionicons.min.css' , array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-bootstrap-datepicker-css', get_stylesheet_directory_uri() . '/assets/style/bootstrap-datepicker.css' , array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-timepicker-css', get_stylesheet_directory_uri() . '/assets/style/jquery.timepicker.css' , array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-flaticon-css', get_stylesheet_directory_uri() . '/assets/style/flaticon.css' , array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-icomoon-css', get_stylesheet_directory_uri() . '/assets/style/icomoon.css' , array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'cb-style-css', get_stylesheet_directory_uri() . '/assets/style/style.css' , array(), _S_VERSION, 'all' );

	wp_enqueue_style('cb-fonts', cb_fonts_url(), [], '1.0');

	wp_enqueue_script( 'cb-popper-js', get_template_directory_uri() . '/assets/scripts/popper.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-bootstrap-js', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-easing-js', get_template_directory_uri() . '/assets/scripts/jquery.easing.1.3.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-waypoints-js', get_template_directory_uri() . '/assets/scripts/jquery.waypoints.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-stellar-js', get_template_directory_uri() . '/assets/scripts/jquery.stellar.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-owl-carousel-js', get_template_directory_uri() . '/assets/scripts/owl.carousel.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-magnific-popup-js', get_template_directory_uri() . '/assets/scripts/jquery.magnific-popup.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-aos-js', get_template_directory_uri() . '/assets/scripts/aos.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-animateNumber-js', get_template_directory_uri() . '/assets/scripts/jquery.animateNumber.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-bootstrap-datepicker-js', get_template_directory_uri() . '/assets/scripts/bootstrap-datepicker.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-timepicker-js', get_template_directory_uri() . '/assets/scripts/jquery.timepicker.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-scrollax-js', get_template_directory_uri() . '/assets/scripts/scrollax.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-google-api-js', "https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false", array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-google-map-js', get_template_directory_uri() . '/assets/scripts/google-map.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cb-main-js', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mycarbook_scripts' );

function cb_fonts_url() {
	$fonts_url = '';
	$families = array();
	$families[] = 'Poppins:200,300,400,500,600,700,800';

	$query_args = array(
		'family' => urlencode(implode('|', $families)),
		'display' => 'swap',
	);
	$fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
	return esc_url_raw($fonts_url);
}

// add_filter( 'nav_menu_css_class', '__return_empty_array' );
add_filter( 'nav_menu_css_class', 'CB_add_li_class', 1, 3 );

function CB_add_li_class($classes, $item, $args ) {
	if (isset($args->add_li_class) && $args->theme_location === 'header_nav') {
		$classes = array();
		$classes[] = $args->add_li_class;
		
		if($item->current) {
			$classes[] = $args->add_li_active_class;
		}
	}
	return $classes;
}

add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

add_filter( 'nav_menu_link_attributes', 'CB_add_nav_menu_link_attributes', 10, 4 );
function CB_add_nav_menu_link_attributes( $atts, $item, $args, $depth ) {

	if ( isset($args->add_a_class)) {
		$atts['class'] = $args->add_a_class;
	}

	return $atts;
}

add_action( 'init', 'create_custom_taxonomy' );
function create_custom_taxonomy(){

	register_taxonomy( 'brand', [ 'post', 'car'], [
		'hierarchical'          => false,

		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Brands',
			'singular_name'     => 'Brand',
			'search_items'      => 'Search Brands',
			'all_items'         => 'All Brands',
			'parent_item'       => 'Parent Brand',
			'parent_item_colon' => 'Parent Brand:',
			'edit_item'         => 'Edit Brand',
			'update_item'       => 'Update Brand',
			'add_new_item'      => 'Add New Brand',
			'new_item_name'     => 'New Brand Name',
			'menu_name'         => 'Brand',
		],
		'show_ui'               => true, // равен аргументу public
		'show_in_rest'			=> true,
		'rewrite'				=> array('slug'=>'brands'),
		'query_var'				=> true,
		'description'           => '', // описание таксономии
		'public'                => true,
		'show_admin_column'     => true,
	] );

	register_post_type( 'car', [
		'label'  => null,
		'labels' => [
			'name'               => 'Cars', // основное название для типа записи
			'singular_name'      => 'Car', // название для одной записи этого типа
			'menu_name'     	 => 'Cars',
		],
		'supports'            => [ 'title', 'editor','thumbnail', 'comments' ], // 'title','editor','author','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'has_archive'         => true,
		'show_in_rest'			=> true,
		// 'description'         => '',
		// // 'exclude_from_search' => null, // зависит от public
		// // 'show_in_nav_menus'   => null, // зависит от public
		// // 'show_in_admin_bar'   => null, // зависит от show_in_menu
		// 'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		// 'rest_base'           => null, // $post_type. C WP 4.7
		// 'menu_position'       => null,
		// 'menu_icon'           => null,
		// //'capability_type'   => 'post',
		// //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		// //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		// 'hierarchical'        => false,
		
		// 'taxonomies'          => [],
		// 'rewrite'             => true,
		// 'query_var'           => true,
	] );

}

