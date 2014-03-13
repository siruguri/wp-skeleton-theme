<?php

/**
 * Theme setup: this stuff is good to do, getting your theme ready and all.
 */


// I hate the alternative syntax, which adds nothing, and just makes it harder to see where anything starts.

if (!function_exists('wp_skeleton_setup')) { 
  function wp_skeleton_setup() {
    add_theme_support('custom-background');
    add_theme_support('menus');

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
      'primary'   => __( 'Top primary menu', 'wp-skeleton-theme' ),
      'secondary' => __( 'Secondary menu in left sidebar', 'wp-skeleton-theme' ),
    ) );
  }
}

add_action( 'after_setup_theme', 'wp_skeleton_setup' );


?>

