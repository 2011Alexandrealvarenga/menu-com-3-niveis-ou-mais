<?php 

register_nav_menus(
    array(
        'Principal'     =>      'Menu Principal',
    )
);

function bootstrap5_dropdown_fix( $atts ) {
    if ( array_key_exists( 'data-toggle', $atts ) ) {
         unset( $atts['data-toggle'] );
         $atts['data-bs-toggle'] = 'dropdown';
        }
        return $atts;
    }
add_filter( 'nav_menu_link_attributes', 'bootstrap5_dropdown_fix' );

