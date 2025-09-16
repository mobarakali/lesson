<?php 
// Enqueue Scripts and Styles
function lessonlms_theme_scripts() {
    // Theme stylesheet
    wp_enqueue_style( 'style-css', get_template_directory_uri().'/assets/css/style.css' );

    // Responsive stylesheet
    wp_enqueue_style( 'responsive-css', get_template_directory_uri().'/assets/css/responsive.css' );

    // Slick carousel stylesheet
    wp_enqueue_style(
        'slick-carousel-css', // handle
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', // src
        array(), // dependency
        '1.9.0', // version
        'all' // media
    );
    
    // Boxicons stylesheet
    wp_enqueue_style( 'boxicons-css', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' );

    // Style CSS
    wp_enqueue_style( 'lessonlms-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'lessonlms_theme_scripts' ); 