<?php

  /*
    Template Name: Kontakt
  */

?>

<?php get_header(); ?>

<div class="map"></div>

  <section class="contact">
    <h3 class="contact__title">Dane Kontaktowe</h3>

    <div class="contact__subsection">
      <p class="contact__paragraph contact__paragraph--lead"><?php the_field('ulica'); ?>,</p>
      <p class="contact__paragraph contact__paragraph--lead"><?php the_field('kod_pocztowy_i_miejscowosc'); ?></p>
    </div>

    <div class="contact__subsection">
      <p class="contact__paragraph">Tel. +48 <?php the_field('numer_telefonu'); ?></p>
      <p class="contact__paragraph">Mail: <?php the_field('adres_e-mail'); ?></p>
    </div>

    <div class="contact__subsection">
      <p class="contact__paragraph">NIP: <?php the_field('nip'); ?></p>
      <p class="contact__paragraph">REGON: <?php the_field('regon'); ?></p>
    </div>


    <?php

      if( have_rows('kontakt_z_danym_pracownikiem') ):
        while ( have_rows('kontakt_z_danym_pracownikiem') ) : the_row(); ?>

        <div class="contact__subsection">
          <p class="contact__paragraph contact__paragraph--lead"><?php the_sub_field('imie_pracownika'); ?></p>
          <p class="contact__paragraph"><?php the_sub_field('numer_telefonu_pracownika'); ?></p>
        </div>
    <?php
        endwhile;
      else :
      endif;

    ?>

  </section>

  <section class="socials">
    <h3 class="socials__title">Bądź na bieżąco</h3>
  </section>
<?php get_footer(); ?>
