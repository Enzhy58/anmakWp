<?php 


add_action( 'wp_enqueue_scripts', function() {


    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), 'null', true );
});

function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'index.php' ) ) {
        wp_enqueue_style( 'index', get_template_directory_uri() . '/assets/css/index.min.css' );
    }
    else if ( is_page_template( 'templates/plasma.php' ) ) {
        wp_enqueue_style( 'plasma', get_template_directory_uri() . '/assets/css/services.min.css' );
    }
    else if ( is_page_template( 'templates/laser.php' ) ) {
        wp_enqueue_style( 'laser', get_template_directory_uri() . '/assets/css/services.min.css' );
    }
    else if ( is_page_template( 'templates/gallery.php' ) ) {
        wp_enqueue_style( 'gallery', get_template_directory_uri() . '/assets/css/gallery.min.css' );
    }
    else if ( is_page_template( 'templates/about.php' ) ) {
        wp_enqueue_style( 'about', get_template_directory_uri() . '/assets/css/about.min.css' );
    }
    else if ( is_page_template( 'templates/contacts.php' ) ) {
        wp_enqueue_style( 'contacts', get_template_directory_uri() . '/assets/css/contacts.min.css' );
    }
    else if( is_page_template( 'templates/copy.php' ) ) {
        wp_enqueue_style( 'copy', get_template_directory_uri() . '/assets/css/copy.min.css' );
    }
};

add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );

add_action( 'after_setup_theme', 'add_features' );
function add_features() {
    add_theme_support( 'post-thumbnails', array( 'post' ) );
    add_theme_support( 'custom-logo');

};


add_action( 'after_setup_theme', 'add_menu' );
function add_menu() {
    register_nav_menu( 'top', 'Главное меню сайта' );
    register_nav_menu( 'footer-services', 'Меню услуг' );
    register_nav_menu( 'footer-copy', 'Политика конфиденциальности' );

};


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>