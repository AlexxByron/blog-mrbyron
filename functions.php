<?php
/**
 * Blog Mrbyron functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blog_Mrbyron
 */

if ( ! defined( 'MR_BYRON_BLOG_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'MR_BYRON_BLOG_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blog_mrbyron_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Blog Mrbyron, use a find and replace
		* to change 'blog-mrbyron' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'blog-mrbyron', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'blog-mrbyron' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'blog_mrbyron_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
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
add_action( 'after_setup_theme', 'blog_mrbyron_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blog_mrbyron_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blog_mrbyron_content_width', 640 );
}
add_action( 'after_setup_theme', 'blog_mrbyron_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blog_mrbyron_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'blog-mrbyron' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'blog-mrbyron' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'blog_mrbyron_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blog_mrbyron_scripts() {
    // Bootstrap V5
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.2');
    
    // Fontawesome
    wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/assets/css/all.min.css', array(), MR_BYRON_BLOG_VERSION);

    // Rounded CSS
    wp_enqueue_style('rounded-style', get_template_directory_uri() . '/assets/css/rounded.css', array(), MR_BYRON_BLOG_VERSION);

    // Back Menus CSS
    wp_enqueue_style('back-menus-style', get_template_directory_uri() . '/assets/css/back-menus.css', array(), MR_BYRON_BLOG_VERSION);

    // Animate CSS
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css', array(), MR_BYRON_BLOG_VERSION);

    // Owl Carousel
    wp_enqueue_style('owl-carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), MR_BYRON_BLOG_VERSION);

    // Magnific Popup
    wp_enqueue_style('magnific-popup-style', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), MR_BYRON_BLOG_VERSION);

    // Main Style CSS
    wp_enqueue_style('blog-mrbyron-style', get_stylesheet_uri(), array(), MR_BYRON_BLOG_VERSION);
    wp_style_add_data('blog-mrbyron-style', 'rtl', 'replace');

    // Spacing CSS
    wp_enqueue_style('back-spacing-style', get_template_directory_uri() . '/assets/css/back-spacing.css', array(), MR_BYRON_BLOG_VERSION);

    // Responsive CSS
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css', array(), MR_BYRON_BLOG_VERSION);

    // Navigation Script
    wp_enqueue_script('blog-mrbyron-navigation', get_template_directory_uri() . '/js/navigation.js', array(), MR_BYRON_BLOG_VERSION, true);

	// Bootstrap JavaScript
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), MR_BYRON_BLOG_VERSION, true);

    // Owl Carousel JavaScript
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), MR_BYRON_BLOG_VERSION, true);

    // Magnific Popup JavaScript
    wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), MR_BYRON_BLOG_VERSION, true);

    // WOW JavaScript
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), MR_BYRON_BLOG_VERSION, true);

    // Back Menus JavaScript
    wp_enqueue_script('back-menus-js', get_template_directory_uri() . '/assets/js/back-menus.js', array(), MR_BYRON_BLOG_VERSION, true);

    // Plugins JavaScript
    wp_enqueue_script('plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array(), MR_BYRON_BLOG_VERSION, true);

    // Main JavaScript
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), MR_BYRON_BLOG_VERSION, true);
	
    // Comment-reply Script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'blog_mrbyron_scripts');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
