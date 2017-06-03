<?php
/**
 * Sets content width based on the theme's design.
 *
 * @since 1.0.0
 */
function im17_content_width() {
	$content_width = 660;
	if ( is_page_template( 'templates/full-width.php' ) ) {
		$content_width = 1200;
	}

	$GLOBALS['content_width'] = apply_filters( 'im17_content_width', $content_width );
}

add_action( 'after_setup_theme', 'im17_content_width' );

/**
 * Adds support for various theme features.
 *
 * @since 1.0.0
 */
function im17_setup() {
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'header-text' => array( 'site-title', 'site-description' ),
		'flex-width' => true,
		'height'	  => 96,
		'width'		  => 200,
	) );

	add_theme_support( 'html5', array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 628, true );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'im17' ),
		'footer'  => esc_html__( 'Footer Menu', 'im17' ),
	) );
}

add_action( 'after_setup_theme', 'im17_setup' );

/**
 * Register the sidebars (widget areas).
 *
 * @since 1.0.0
 */
function im17_sidebars() {
	$sidebars = array(
		'front-page' => esc_html__( 'Front Page', 'im17' ),
		'after-post' => esc_html__( 'After Post', 'im17' ),
	);

	foreach ( $sidebars as $id => $name ) {
		register_sidebar( array(
			'id'			=> $id,
			'name'			=> $name,
			'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="container"><div class="widget-container">',
			'after_widget'	=> '</div></div></section>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		) );
	}
}

add_action( 'widgets_init', 'im17_sidebars' );

/**
 * Enqueue theme styles & scripts.
 *
 * @since 1.0.0
 */
function im17_scripts() {
	wp_enqueue_style( 'im17-fonts', 'https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i|Playfair+Display:700|Inconsolata' );
	wp_enqueue_style( 'im17-style', get_stylesheet_uri(), array( 'im17-fonts', 'dashicons' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'im17_scripts' );

/**
 * Custom excerpt more tag.
 *
 * @since 1.0.0
 */
function im17_excerpt_more( $more ) {
	global $post;

	return sprintf( '&hellip;<p class="more-link-container"><a href="%1$s" class="more-link button alt">%2$s</a></p>', esc_url( get_permalink( $post->ID ) ), esc_html__( 'Read Post', 'im17' ) );
}

add_filter( 'excerpt_more', 'im17_excerpt_more' );

/**
 * Custom excerpt length.
 *
 * @since 1.0.0
 */
function im17_excerpt_length( $length ) {
	return 30;
}

add_filter( 'excerpt_length', 'im17_excerpt_length' );
