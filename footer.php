<footer class="footer">
  <div class="footer-containers">
    <div class="footer-container footer-container--desc">
      <h2 class="footer__title">Pure Nature</h2>

      <p class="footer__paragraph">Salon Pure Nature powstał w 2012 roku, dzięki pasji dwóch przyjaciółek - Natalii oraz Karoliny, do szeroko pojętej kosmetologii. Obecnie, Salon to 12 niesamowitych osób, które tworzą najlepszy #purenatureteam.</p>
      <p class="footer__paragraph">Do naszej prac podchodzimy z maksymalnym zaangażowaniem, a kosmetyki oraz sprzęt przez nas wykorzystywany - należy do światowej czołówki. Bądź razem z nami - #purenature !</p>
      <a class="footer__link" href="<?php the_permalink("278"); ?>">Czytaj dalej...</a>
    </div>

    <div class="footer-container">
      <h2 class="footer__title">Szybki kontakt</h2>

      <p class="footer__paragraph footer__paragraph--lead"><?php the_field( "ulica", 282 );?>,</p>
      <p class="footer__paragraph footer__paragraph--lead"><?php the_field('kod_pocztowy_i_miejscowosc', 282 ); ?></p>
      <p class="footer__paragraph footer__paragraph--phone-number">Tel. +48 <?php the_field('numer_telefonu', 282 ); ?></p>
      <p class="footer__paragraph">Mail: <?php the_field('adres_e-mail', 282); ?></p>
    </div>

    <div class="footer-container">
      <h2 class="footer__title">Bądź na bieżąco</h2>

      <?php

        if( have_rows('ikonki_mediow_spolecznosciowych', 282) ):
          while ( have_rows('ikonki_mediow_spolecznosciowych', 282) ) : the_row(); ?>

          <a class="footer__social-icon" href="<?php the_sub_field('adres_danego_medium', 282); ?>"><?php the_sub_field('ikonka_danego_medium', 282); ?></a>
        <?php
          endwhile;
        else :
        endif;

      ?>
    </div>
  </div>

  <div class="footer__copyright">
    <div class="footer__copyright-container">
      <p class="footer__paragraph">&copy; 2019 - Pure Nature</p>
      <p class="footer__paragraph">Projekt i realizacja: <span class="footer__paragraph--lead">Bracia Konieczni</span></p>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>