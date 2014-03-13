<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <title><?php bloginfo('name'); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">

    <?php
    if ( is_singular() && get_option( 'thread_comments' ) )
      wp_enqueue_script( 'comment-reply' );
    wp_head();
    ?>

  </head>

  <body <?php body_class(); ?>>
    
    <div id="wrapper">
      <header>
    	<h1>
    	  <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    	    <?php bloginfo( 'name' ); ?>
    	  </a>

    	</h1>

    	<h2><?php bloginfo( 'description' ); ?>
        </h2>

	<?php
	// This is a good place for a menu - we will use the advanced menu extraction script to get a hold of the menu items 
	// Using a ridiculous combination of wp_nav_menu and Javascript.
	wp_nav_menu( array( 'container_class' => 'menu-header-hidden', 'theme_location' => 'secondary' ) ); 
	?>
	
  	
      </header>