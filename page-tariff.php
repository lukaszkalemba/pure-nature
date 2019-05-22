<?php

  /*
    Template Name: Cennik
  */

?>

<?php get_header(); ?>

  <section class="tariff">
    <h2 class="tariff__title">Cennik</h2>

  <?php

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1
  );

  $blogposts = new WP_Query($args);

  while($blogposts->have_posts()) {
    $blogposts->the_post();
    ?>

    <p class="tariff__offer-title"><?php the_title(); ?></p>


  <?php
  }
  ?>

</section>
  </section>

<?php get_footer(); ?>
