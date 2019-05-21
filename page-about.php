<?php

  /*
    Template Name: O firmie
  */

?>

<?php get_header(); ?>

<img class="about__hero-img" src="<?php bloginfo( 'template_url' );?>/dist/img/offer_hero.png" alt="">

<section class="about">

<h2 class="about__title">Odkrywamy Twoje naturalne piękno</h2>

  <?php while ( have_posts() ) : the_post(); ?>
  <div class="dynamic-content dynamic-content--about">
    <?php the_content(); ?>
  </div>
  <?php
  endwhile;
  wp_reset_query();
  ?>

</section>


<section class="employees">

<?php

if( have_rows('pracownik') ):
    while ( have_rows('pracownik') ) : the_row(); ?>

    <article class="employees__employee">

      <?php $image_url = get_sub_field('zdjecie_pracownika')['url']; ?>
      <img class="employee__img" src="<?php echo $image_url ?>" alt="">

    <h3 class="employee__first-name"><?php the_sub_field('imie_pracownika'); ?></h3>
    <p class="employee__workplace"><?php the_sub_field('stanowisko_pracownika'); ?></p>

    </article>

<?php
  endwhile;
else :
endif;

?>

</section>


<?php get_footer(); ?>
