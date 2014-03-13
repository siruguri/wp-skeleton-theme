<?php

/**
 * Theme setup: this stuff is good to do, getting your theme ready and all.
 */


// I hate the alternative syntax, which adds nothing, and just makes it harder to see where anything starts.

function wp_skeleton_setup() {
  add_theme_support('custom-background');
  add_theme_support('menus');

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus( array(
    'primary'   => __( 'Top primary menu', 'wp-skeleton-theme' ),
    'secondary' => __( 'Secondary menu in left sidebar', 'wp-skeleton-theme' ),
  ) );
}

function wp_skeleton_scripts() {
  // Add Lato font, used in the main stylesheet.
  wp_enqueue_script( 'wp-skeleton-custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '20140313' );

}
add_action( 'wp_enqueue_scripts', 'wp_skeleton_scripts' );

add_action( 'after_setup_theme', 'wp_skeleton_setup' );


?>

