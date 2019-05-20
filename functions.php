<?php

  function link_styles_and_scripts() {
    wp_enqueue_style('style', get_theme_file_uri('/dist/css/main.min.css'));
    wp_enqueue_script('js', get_theme_file_uri('/dist/js/index.min.js'), NULL,  microtime(), true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap&subset=latin-ext');
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


  function add_main_nav_item_classes($classes, $item, $args) {
    if($args->theme_location == 'main_nav') {
      $classes[] = 'nav__item';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_main_nav_item_classes', 1, 3);


?>