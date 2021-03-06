<?php get_header(); ?>


<?php

  while(have_posts()) {
    the_post();
?>

    <section class="offer">
      <img class="offer__img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      <div class="offer-content-container">
        <div class="offer-content-col--post">
          <h2 class="offer__title offer__title--post"><?php the_title(); ?></h2>

          <div class="dynamic-content dynamic-content--offer">
            <?php the_content(); ?>
          </div>
        </div>

        <div class="offer-content-col">
          <h2 class="offer__title offer__title--post">Cena</h2>

          <p class="offer__price"><?php the_field('cena'); ?></p>

          <a class="post__link" href="<?php the_permalink("282"); ?>">Skontaktuj się z nami</a>
        </div>

      </div>
    </section>

    <?php
      if( have_rows('wady_i_zalety') ): ?>
        <section class="pros-and-cons">
          <div class="pros-and-cons-container">

            <div class="pros-and-cons__pros">
              <?php
                while ( have_rows('wady_i_zalety') ) : the_row("zalety"); ?>
                <h2 class="pros-and-cons__title">Zalety</h2>

                  <?php while ( have_rows('zalety') ) : the_row(); ?>
                  <p class="pros-and-cons__paragraph">- <?php the_sub_field('zaleta');?></p>
                  <?php endwhile; ?>

                <?php endwhile; ?>
            </div>

            <div class="pros-and-cons__cons">
                <?php
                  while ( have_rows('wady_i_zalety') ) : the_row("wady"); ?>
                  <h2 class="pros-and-cons__title">Wady</h2>

                  <?php while ( have_rows('wady') ) : the_row(); ?>
                  <p class="pros-and-cons__paragraph">- <?php the_sub_field('wada');?></p>

              <?php endwhile; ?>
            </div>
          </div>
        </section>

<?php
endwhile;
else :
endif;
  }
?>


<?php get_footer(); ?>
