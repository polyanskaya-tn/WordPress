<?php

/**
 * Enqueues scripts and styles.
 */

function interior_scripts() {

	wp_enqueue_style( 'reset', get_bloginfo('template_url').'/css/reset.css' );
	wp_enqueue_style( 'style', get_bloginfo('template_url').'/style.css' );
	wp_enqueue_style( 'grid', get_bloginfo('template_url').'/css/grid.css' );

	// Load the html5 shiv.
	wp_enqueue_script( 'jquery-1.6.2.min', get_template_directory_uri() . '/js/jquery-1.6.2.min.js' );
wp_enqueue_script( 'jquery.easing.1.3', get_template_directory_uri() . '/js/jquery.easing.1.3.js' );
wp_enqueue_script( 'jcarousellite_1.0.1', get_template_directory_uri() . '/js/jcarousellite_1.0.1.js' );

	wp_enqueue_script( 'jquery.galleriffic', get_template_directory_uri() . '/js/jquery.galleriffic.js' );
	wp_enqueue_script( 'jquery.opacityrollover', get_template_directory_uri() . '/js/jquery.opacityrollover.js' );
}

add_action( 'wp_enqueue_scripts', 'interior_scripts' );


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 * 
 */
function interior_setup() {
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menu( array(
		'primary' => __( 'Primary Menu', 'Главное меню' ),
		'social'  => __( 'Social Links Menu', 'Социальные сети' ),
	) ); 

	/*
		register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'Главное меню' ),
		'social'  => __( 'Social Links Menu', 'Социальные сети' ),
	) ); 

	*/
}

add_action( 'after_setup_theme', 'interior_setup' );

/**
 * Register widget area.
 *
 */
function interior_widgets_init() {
	register_sidebar( array(
		'name'          => 'Interior sidebar',
		'id'            => 'sidebar1',
		'description'   => 'Add widgets here to appear in your sidebar.',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="prev-indent-bot">',
		'after_title'   => '</h3>',

	) );
	
	register_sidebar( array(
		'name'          => 'Interior catalog',
		'id'            => 'catalog1',
		'description'   => 'Add widgets here to appear in your catalog.',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',

	) );
}
add_action( 'widgets_init', 'interior_widgets_init' );


/**
*	Slider
**/
function slider() {
	register_post_type( 'slider', array(
		'public' => true,
		'supports' => array('title','thumbnail', 'custom-fields'), //'editor',
		'labels' => array(
			'name'               => 'Слайдер', // основное название для типа записи
			'all_items'			 => 'Все слайды', // Все записи. По умолчанию равен menu_name
/*			'singular_name'      => '____', // название для одной записи этого типа
*/			'add_new'            => 'Добавить новый', // для добавления новой записи
			'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
/*			'edit_item'          => 'Редактирование ____', // для редактирования типа записи
			'new_item'           => 'Новое ____', // текст новой записи
			'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
			'search_items'       => 'Искать ____', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => '____', // название меню
*/		),

		) );
}
add_action( 'init', 'slider' );



?>
