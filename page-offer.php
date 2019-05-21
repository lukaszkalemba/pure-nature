<?php

  /*
    Template Name: Oferta
  */

?>

<?php get_header(); ?>


<section class="offer">
  <h2 class="offer__title">Nasza oferta</h2>

  <?php

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1
  );

  $blogposts = new WP_Query($args);

  while($blogposts->have_posts()) {
    $blogposts->the_post();
?>

    <div class="post-container">

      <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $page->ID ); ?></a>
      <h3 class="post__title"><?php the_title(); ?></h3>
      <a class="post__link" href="<?php the_permalink(); ?>">Dowiedz się więcej</a>

    </div>
<?php
  }

?>

</section>

<?php get_footer(); ?>
