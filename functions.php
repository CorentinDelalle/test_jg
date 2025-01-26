<?php
/**
 * minustwenty_jg functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package minustwenty_jg
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function minustwenty_jg_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on minustwenty_jg, use a find and replace
		* to change 'minustwenty_jg' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'minustwenty_jg', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'minustwenty_jg' ),
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
			'minustwenty_jg_custom_background_args',
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

	add_theme_support('page-templates');

}
add_action( 'after_setup_theme', 'minustwenty_jg_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function minustwenty_jg_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'minustwenty_jg_content_width', 640 );
}
add_action( 'after_setup_theme', 'minustwenty_jg_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function minustwenty_jg_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'minustwenty_jg' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'minustwenty_jg' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'minustwenty_jg_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function minustwenty_jg_scripts() {
    // Enqueue theme styles
    wp_enqueue_style( 'minustwenty_jg-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'minustwenty_jg-style', 'rtl', 'replace' );

    // Enqueue theme scripts
    wp_enqueue_script( 'minustwenty_jg-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'minustwenty_jg-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // Enqueue Google Fonts
	function google_fonts() {
		// Array of fonts with weights
		$fonts = array(
			"Montserrat:100,200,300,400,500,600,700,800,900",
			"Roboto:100,300,400,500,700,900"
		);
	
		// Construct the Google Fonts URL
		$fonts_url = add_query_arg(
			array(
				'family' => urlencode(implode('|', $fonts)),
				'subset' => 'latin'
			),
			'https://fonts.googleapis.com/css'
		);
	
		return $fonts_url;
	}

	wp_enqueue_style('adding-google-fonts', google_fonts(), array(), null);

}
add_action( 'wp_enqueue_scripts', 'minustwenty_jg_scripts' );



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

/**
 * Customizes the permalink structure for 'kiosque' custom post type.
 *
 * This function hooks into the 'post_type_link' filter to modify the permalink
 * structure of 'kiosque' custom post type posts. It replaces the '%type-de-kiosques%'
 * placeholder in the post permalink with the slug of the first term assigned to the
 * 'type-de-kiosques' taxonomy for the given post. If the post does not have any terms
 * in this taxonomy, it replaces the placeholder with 'no-type'.
 *
 * @param string $post_link The original permalink.
 * @param WP_Post $post The post object.
 * @return string The modified permalink.
 */
function custom_post_type_link($post_link, $post) {
    if (is_object($post) && $post->post_type == 'kiosque') {
        $terms = wp_get_object_terms($post->ID, 'type-de-kiosques');
        if ($terms && !is_wp_error($terms) && !empty($terms)) {
            return str_replace('%type-de-kiosques%', $terms[0]->slug, $post_link);
        } else {
            return str_replace('%type-de-kiosques%', 'no-type', $post_link);
        }
    }
    return $post_link;
}
add_filter('post_type_link', 'custom_post_type_link', 10, 2);
