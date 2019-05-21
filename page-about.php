<?php

  /*
    Template Name: O firmie
  */

?>

<?php get_header(); ?>

<img class="about__hero-img" src="<?php bloginfo( 'template_url' );?>/dist/img/offer_hero.png" alt="">

<section class="about-container">

<h2 class="section__title">Odkrywamy Twoje naturalne piękno</h2>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content();
  endwhile;
  wp_reset_query();
  ?>

</section>

<?php get_footer(); ?>
