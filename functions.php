<?php
/**
 * SS Associates Theme Functions
 */

if ( ! function_exists( 'ss_associates_setup' ) ) :
    function ss_associates_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register navigation menus.
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'ss-associates' ),
            )
        );

        // Add theme support for core custom logo.
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
endif;
add_action( 'after_setup_theme', 'ss_associates_setup' );

/**
 * Enqueue scripts and styles.
 */
function ss_associates_scripts() {
    wp_enqueue_style( 'ss-associates-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Swiper CSS & JS
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.5' );
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.5', true );

    // GSAP Core & Plugins
    wp_enqueue_script( 'gsap-core', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true );
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap-core'), '3.12.5', true );

    // SplitType for Text Animation
    wp_enqueue_script( 'splittype', 'https://unpkg.com/split-type', array(), '0.3.3', true );

    // Lenis Smooth Scroll
    wp_enqueue_script( 'lenis', 'https://unpkg.com/lenis@1.1.9/dist/lenis.min.js', array(), '1.1.9', true );

    // Main Theme Script
    wp_enqueue_script( 'ss-associates-main-js', get_template_directory_uri() . '/js/main.js', array('gsap-core', 'gsap-scrolltrigger', 'splittype', 'lenis', 'swiper-js'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ss_associates_scripts' );
