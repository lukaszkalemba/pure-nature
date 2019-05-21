<?php

  /*
    Template Name: O firmie
  */

?>

<?php get_header(); ?>

<img class="about__hero-img" src="<?php bloginfo( 'template_url' );?>/dist/img/offer_hero.png" alt="">

<section class="about-container">

  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content();
  endwhile;
  wp_reset_query();
  ?>

</section>

<?php get_footer(); ?>
