<?php 
// load JS e CSS
require get_template_directory().'/inc/enqueue.php';

// menu
require get_template_directory().'/inc/menu.php';
require get_template_directory().'/inc/wp-bootstrap-navwalker.php';

// thumbnail
require get_template_directory().'/inc/thumbnail-size.php';




function register_navwalker(){
	require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function prefix_modify_nav_menu_args( $args ) {
  return array_merge( $args, array(
      'walker' => new WP_Bootstrap_Navwalker(),
  ) );
}
add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );