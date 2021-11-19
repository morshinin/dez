<?php
/**
 * dez functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dez
 */

if ( ! function_exists( 'deztheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function deztheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on dez, use a find and replace
	 * to change 'deztheme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'deztheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'deztheme' ),
		'secondary'	=>	esc_html__( 'Secondary', 'deztheme' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'deztheme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Включаем поддержку лого
	add_theme_support( 'custom-logo', array( 

		'width'			=>		160,
		'height'		=>		160
		// 'flex-height'	=>		true,
		// 'flex-width'	=>		true,
		// 'size'			=>		'deztheme-logo',
		// 'header-text'	=>		array( 'site-title', 'site-description' )

	 ) );
	/**
	 * Add image sizes
	 */
	add_image_size( 'deztheme-logo', 160, 160, true );
	add_image_size( 'deztheme-tax-thumbnail', 698, 253, true );
	add_image_size( '3-col-thumb', 450, 160, true );
	add_image_size( '2-col-thumb', 200, 120, true );
}
endif;
add_action( 'after_setup_theme', 'deztheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function deztheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'deztheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'deztheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deztheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'deztheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'deztheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array( 
		'name'			=>		esc_html__( 'Footer-1', 'deztheme' ),
		'id'			=>		'footer-1',
		'description'	=>		esc_html__( 'Первая область подвала', 'deztheme' ),
		'before_widget'	=>		'<div class="widget">',
		'after_widget'	=>		'</div>',
		'before_title'	=>		'<h4 class="widget-title">',
		'after_title'	=>		'</h4>'
	 ) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer-2', 'deztheme' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Вторая область подвала', 'deztheme' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer-3', 'deztheme' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Третья область подвала', 'deztheme' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer-4', 'deztheme' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Четвертая область подвала', 'deztheme' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer-5', 'deztheme' ),
		'id'            => 'footer-5',
		'description'   => esc_html__( 'Пятая область подвала', 'deztheme' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer-6', 'deztheme' ),
		'id'            => 'footer-6',
		'description'   => esc_html__( 'Шестая область подвала', 'deztheme' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'deztheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function deztheme_scripts() {
	// underscores style
	wp_enqueue_style( 'deztheme-style', get_stylesheet_uri(), array( 'deztheme-slickslider-style' ) );

	// custom style
	wp_enqueue_style( 'deztheme-custom-style', get_template_directory_uri() . '/css/custom.css', array( 'deztheme-bootstrap-style' ) );

	wp_enqueue_script( 'deztheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'deztheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// bootstrap style
	wp_enqueue_style( 'deztheme-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array( 'deztheme-style' ) );

	// slickslider style
	wp_enqueue_style( 'deztheme-slickslider-style', get_template_directory_uri() . '/css/slick.css' );

	// wp_enqueue_script( 'deztheme-tether-script', get_template_directory_uri() . '/js/tether.min.js', array( 'jquery' ), false, true );

	// slickslider script
	wp_enqueue_script( 'deztheme-slickslider-script', get_template_directory_uri() . '/js/slick.min.js', array( 'deztheme-bootstrap-script' ), false, true );

	// deztheme main script
	wp_enqueue_script( 'deztheme-main-script', get_template_directory_uri() . '/js/deztheme-main.js', array( 'deztheme-slickslider-script' ) );

	wp_enqueue_script( 'deztheme-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), false, true );

}
add_action( 'wp_enqueue_scripts', 'deztheme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Navwalker bootstrap class
 */
require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';