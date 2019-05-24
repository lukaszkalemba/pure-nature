<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pure Nature - Odkryj swoje prawdziwe piękno</title>

  <?php wp_head(); ?>
</head>
<body>

  <header class="header">
    <div class="header-container">
      <a href="<?php the_permalink("285"); ?>">
        <img class="header__logo" src="<?php bloginfo( 'template_url' );?>/src/img/mobile-logo.svg" alt="Pure Nature logo">
      </a>

      <div role="button" class="header__hamburger">
        Menu<div class="hamburger__line"></div>
      </div>
    </div>
  </header>

  <nav class="navigation">
    <?php wp_nav_menu( array(
      'theme_location' => 'main_nav',
      'container' => 'false',
      'menu_class' => 'nav__list',
      ) ); ?>

    <p class="nav__phone-number">Tel. +48 <?php the_field('numer_telefonu', 282 ); ?></p>
  </nav>

