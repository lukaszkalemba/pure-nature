<?php get_header(); ?>


<?php

  while(have_posts()) {
    the_post();
?>

    <section class="section section--offer">
      <img class="offer__img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      <div class="offer-content-container">
        <h2 class="section__title c"><?php the_title(); ?></h2>

        <div class="dynamic-content dynamic-content--offer">
          <?php the_content(); ?>
        </div>
      </div>

      <h2 class="section__title section__title">Cena</h2>
    </section>
    <?php
  }

?>



<?php get_footer(); ?>
