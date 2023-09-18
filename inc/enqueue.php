<?php 
function SSGD_css_enqueue() { 
  wp_enqueue_style( 'general', get_template_directory_uri() . '/assets/css/general.css', array(), '1.1', 'all');
  wp_enqueue_style( 'bootstrap5', get_template_directory_uri() . '/assets/css/tools/bootstrap.css', array(), '1.1', 'all');
  wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
  wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.1', 'all');
  wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/menu.css', array(), '1.1', 'all');

  // wp_enqueue_style( 'boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css', array(), '1.1', 'all');
  // wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/colors.css', array(), '1.1', 'all');

  // if(is_page('projetos') || is_home() || is_front_page() ){

  // // carousel horizontal
  //   wp_enqueue_style( 'carousel-horizontal-swiper', get_template_directory_uri() . '/assets/css/tools/swiper-bundle.min.css', array(), '1.1', 'all');
  //   wp_enqueue_style( 'carousel-horizontal', get_template_directory_uri() . '/assets/css/tools/carousel-horizontal.css', array(), '1.1', 'all');
  
  // }
    
}
add_action( 'wp_enqueue_scripts', 'SSGD_css_enqueue');

function SSGD_JS_stratea_scripts() {

  
  // wp_register_script('general-script', get_stylesheet_directory_uri().'/assets/js/general-script.js', array('jquery'));
  // wp_enqueue_script('general-script');
  
  // wp_register_script('bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'));
  // wp_enqueue_script('bootstrap.min');

  // wp_register_script('general-js', get_stylesheet_directory_uri().'/assets/js/general.js', array('jquery'));
  // wp_enqueue_script('general-js');

  // if( is_front_page() ){
    wp_register_script('jquery-slim', get_stylesheet_directory_uri().'/assets/js/jquery.slim.min.js');
    wp_enqueue_script('jquery-slim');
    
    wp_register_script('popper_min', get_stylesheet_directory_uri().'/assets/js/popper.min.js');
    wp_enqueue_script('popper_min');
    
    wp_register_script('boostrap-bundle', get_stylesheet_directory_uri().'/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_script('boostrap-bundle');

    wp_register_script('footer_js', get_stylesheet_directory_uri().'/assets/js/footer.js');
    wp_enqueue_script('footer_js');
  // }

  
}
add_action('wp_footer', 'SSGD_JS_stratea_scripts');