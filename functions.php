<?php
function lseafricasummit_setup() {
    add_filter( 'the_generator', 'lseafricasummit_rss_version' );
    add_action( 'init', 'lseafricasummit_head_cleanup' );

    add_action( 'wp_enqueue_scripts', 'lseafricasummit_scripts_and_styles', 999 );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'lseafricasummit_setup' );

function lseafricasummit_rss_version() { return ''; }

function lseafricasummit_head_cleanup() {
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action( 'wp_head', 'wp_generator' );
    add_filter( 'style_loader_src', 'lseafricasummit_remove_wp_ver_css_js', 9999 );
    add_filter( 'script_loader_src', 'lseafricasummit_remove_wp_ver_css_js', 9999 );
}

function lseafricasummit_scripts_and_styles() {
    // Header
    wp_enqueue_style(
        'google-web-fonts',
        '//fonts.googleapis.com/css?family=Open+Sans:300,400,700,800'
    );
    wp_enqueue_style(
        'normalize-css',
        '//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.0/normalize.min.css'
    );
    wp_enqueue_style(
        'font-awesome',
        '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css'
    );
    wp_enqueue_style(
        'animate-css',
        '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css'
    );
    wp_enqueue_style( 'lseafricasummit-style', get_stylesheet_uri(), false, '1.0.0' );
    wp_enqueue_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js', false, '2.7.1', false );

    // Footer
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', false, '2.1.0' );

    wp_enqueue_script(
        'lseafricasummit-plugins',
        get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ), '1.0.0', true
    );
    wp_enqueue_script(
        'lseafricasummit-script',
        get_template_directory_uri() . '/assets/js/application.js', array( 'lseafricasummit-plugins' ), '1.0.0', true
    );
}

function lseafricasummit_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

function lseafricasummit_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() ) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title = "$title $sep $site_description";
    }

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 ) {
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentyfourteen' ), max( $paged, $page ) );
    }

    return $title;
}
add_filter( 'wp_title', 'lseafricasummit_wp_title', 10, 2 );