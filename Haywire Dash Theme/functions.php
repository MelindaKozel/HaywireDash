<?php

function haywire_files(){
	//enqueue the stuff here
	wp_enqueue_style( 'main_haywire_styles', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'mobilemenu-min', get_template_directory_uri() . '/mobilemenu-min.js' , array('jquery') , '' , true );
	wp_enqueue_script( 'smoothscroll-min', get_template_directory_uri() . '/smoothscroll-min.js' , array('jquery') , '' , true );
	wp_enqueue_script( 'currenttime', get_template_directory_uri() . '/currenttime.js', '', true );

}
add_theme_support( 'custom-logo');
add_action( 'wp_enqueue_scripts', 'haywire_files' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


function right_sidebar() {
     /**
    * Creates a sidebar
    * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
    */
    $args = array(
      'name'          => __( 'Right Sidebar', 'twentythirteen' ),
      'id'            => 'r_sidebar',
    );
  
    register_sidebar( $args );
  }

  add_action( 'widgets_init', 'right_sidebar' );
?>