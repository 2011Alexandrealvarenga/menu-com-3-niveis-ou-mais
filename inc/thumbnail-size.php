<?php 



// add_image_size( 'home-carousel-left', 555, 360, true ); //Imagem do carousel da home
// add_image_size( 'home-carousel-right', 278, 180, true ); //Imagem do carousel da home
// add_image_size( 'highlight-post', 256, 156, true ); //Imagem do carousel da home
// add_image_size( 'home-more-post', 256, 180, true ); //Imagem do carousel da home
// add_image_size( 'single-post', 570, 318, true ); //Imagem do carousel da home


// function prefix_remove_default_images( $sizes ) {
//     unset( $sizes['small']); // 150px
//     unset( $sizes['medium']); // 300px
//     unset( $sizes['large']); // 1024px
//     unset( $sizes['medium_large']); // 768px
//     return $sizes;
// }
// add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images' );

add_filter( 'intermediate_image_sizes', 'remove_default_img_sizes', 10, 1);

function remove_default_img_sizes( $sizes ) {
  $targets = ['medium', 'medium_large', 'large', '1536x1536', '2048x2048', 'small'];

  foreach($sizes as $size_index=>$size) {
    if(in_array($size, $targets)) {
      unset($sizes[$size_index]);
    }
  }

  return $sizes;
}

// images size
// add_image_size( 'home-carousel', 1200, 500, true ); //Imagem do carousel da home
// add_image_size( 'more-posts', 276, 200, true ); //Imagem do carousel da home

// suport para thumbnail
add_theme_support( 'post-thumbnails' );

