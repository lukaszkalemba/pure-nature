<?php

  function link_styles_and_scripts() {
    wp_enqueue_style('style', get_theme_file_uri('/dist/css/main.min.css'));
    wp_enqueue_script('js', get_theme_file_uri('/dist/js/index.min.js'), NULL,  microtime(), true);
  }

  add_action('wp_enqueue_scripts', 'link_styles_and_scripts');



  function register_main_nav() {
    register_nav_menus(
      array(
        'main_nav' => __( 'Główna nawigacja' ),
      )
    );
  }

  add_action( 'init', 'register_main_nav' );

?>