<?php
if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function jcubsa_theme_setup() {
	load_theme_textdomain( 'jcubsa_theme', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'main-1' => esc_html__( 'Primary', 'jcubsa_theme' ),
		)
	);
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
	add_theme_support(
		'custom-background',
		apply_filters(
			'jcubsa_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'jcubsa_theme_setup' );

function jcubsa_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jcubsa_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'jcubsa_theme_content_width', 0 );

function jcubsa_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jcubsa_theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jcubsa_theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jcubsa_theme_widgets_init' );

function jcubsa_theme_scripts() {
	wp_enqueue_style( 'jcubsa_theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'jcubsa_theme-style', 'rtl', 'replace' );

	// Enqueue custom script for the hamburger menu
	wp_enqueue_script( 'jcubsa_theme-custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'jcubsa_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jcubsa_theme_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Link to Google Fonts */

function enqueue_google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&family=Ubuntu:wght@400;700&family=Poppins:wght@400;700&display=swap', false ); 
}
add_action( 'wp_enqueue_scripts', 'enqueue_google_fonts' );

?>


