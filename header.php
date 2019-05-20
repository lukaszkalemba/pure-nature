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
      <img class="header__logo" src="<?php bloginfo( 'template_url' );?>/src/img/mobile-logo.svg" alt="Pure Nature logo">

      <div role="button" class="header__hamburger">
        Menu<div class="hamburger__line"></div>
      </div>
    </div>

    <nav class="nav">
      <ul class="nav__list">
        <?php wp_nav_menu( array(
          'theme_location' => 'main_nav'
        ) ); ?>
      </ul>

      <!-- <li class="nav__item"><a class="nav__link" href="#">O firmie</a></li> -->
      <!-- <li class="nav__item"><a class="nav__link" href="#">Oferta</a></li> -->
      <!-- <li class="nav__item"><a class="nav__link" href="#">Cennik</a></li> -->
      <!-- <li class="nav__item"><a class="nav__link" href="#">Kontakt</a></li>  -->
    </nav>
  </header>

