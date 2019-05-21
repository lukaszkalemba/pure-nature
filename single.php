<?php get_header(); ?>


<?php

  while(have_posts()) {
    the_post();
?>

    <section class="section section--offer">
      <img class="offer__img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      <div class="offer-content-container">
        <h2 class="section__title section__title--offer"><?php the_title(); ?></h2>

        <div class="dynamic-content dynamic-content--offer">
          <?php the_content(); ?>
        </div>

        <h2 class="section__title section__title--offer">Cena</h2>

      </div>

      <p><?php the_sub_field('cena'); ?></p>

    </section>

    <?php
      if( have_rows('wady_i_zalety') ): ?>
        <section class="section secion--pros-and-cons">

        <?php
          while ( have_rows('wady_i_zalety') ) : the_row("zalety"); ?>
          <h2 class="section__title section__title--pros-and-cons">Zalety</h2>

            <?php while ( have_rows('zalety') ) : the_row(); ?>
            <p class="pros-and-cons__paragraph">- <?php the_sub_field('zaleta');?></p>
            <?php endwhile; ?>

          <?php endwhile; ?>


        <?php
          while ( have_rows('wady_i_zalety') ) : the_row("wady"); ?>
          <h2 class="section__title section__title--pros-and-cons">Wady</h2>

            <?php while ( have_rows('wady') ) : the_row(); ?>
            <p class="pros-and-cons__paragraph">- <?php the_sub_field('wada');?></p>

          <?php endwhile; ?>

        </section>


<?php
endwhile;
else :
endif;

?>

    <?php
  }

?>



<?php get_footer(); ?>
