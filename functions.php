<?php
/**
 * @package kickstart
 *
 * Theme's functions file.
 */

// Enable ACF Early Access
define( 'ACF_EARLY_ACCESS', '5' );

if ( ! function_exists( 'kickstart_setup' ) ) :
	function kickstart_setup() {
		load_theme_textdomain( 'kickstart', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Enable title-tag
		add_theme_support( 'title-tag' );
		// Enable post-thumbnails
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-main-nav' => esc_html__( 'Primary', 'kickstart' ),
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
		add_theme_support( 'custom-background', apply_filters( 'kickstart_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'kickstart_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kickstart_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kickstart' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kickstart' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '<small><i class="fab fa-hotjar"></i></small></h2>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'kickstart' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'kickstart' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'kickstart_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kickstart_scripts() {
	wp_enqueue_style( 'kickstart-style', get_stylesheet_uri() , array(), '20180314', 'all');
	wp_enqueue_script( 'kickstart-app', get_template_directory_uri() . '/app.js', array(), '20180208', true );
}
add_action( 'wp_enqueue_scripts', 'kickstart_scripts' );

/**
 * Display Subtitle post meta based on Post ID.
 *
 * @return void
 */
function the_subtitle() {
	global $post;
	$post_id = $post->ID;
	$key     = 'Subtitle';
	$single  = true;
	echo get_post_meta($post_id, $key, $single);
}

/**
 * Display site custom logo defined through the customizer.
 *
 * @return void
 */
function logo_display() {
	$logo_id = get_theme_mod( 'custom_logo' );
	$logo    = wp_get_attachment_image_src( $logo_id , 'full' );

	if ( has_custom_logo() ) {
		$logodisplay = '<img src="'. esc_url( $logo[0] ) .'">';
		echo $logodisplay;
	} else {
		$logodisplay =  '<h1>'. get_bloginfo( 'name' ) .'</h1>';
		echo $logodisplay;
	}
}

/**
 * Add Shortcodes -> tobe moved
 */
function lead_shortcode($atts = [], $content = null)
{
  $return  = '<div class="lead-border bg-primary">&nbsp;</div>';
  $return .= '<p class="lead">' . $content. '</p>';
  $return .= '<div class="lead-border bg-primary">&nbsp;</div>';
  return $return;
}
add_shortcode('lead', 'lead_shortcode');

