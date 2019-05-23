<?php get_header(); ?>


<div class="carousel-container">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">

      <?php

        if( have_rows('slajd', 285) ):
            while ( have_rows('slajd', 285) ) : the_row(); ?>
              <li class="carousel__indiactior" data-target="#myCarousel" data-slide-to="1"></li>
            <?php
        endwhile;
        else :
        endif;

      ?>
    </ol>


    <div class="carousel-inner">
      <?php

      if( have_rows('slajd', 285) ):
      while ( have_rows('slajd', 285) ) : the_row(); ?>
      <div class="carousel-item carousel-item--offer">
        <img
          <?php $image_url = get_sub_field('tlo_slajdu')['url']; ?>
          src="<?php echo $image_url ?>"
          class="carousel__image d-block w-100"
          alt="..."
        />
        <div class="carousel-caption d-md-block">
          <h5 class="carousel__title"><?php the_sub_field('tresc_naglowka', 285); ?></h5>
          <a role="button" href="<?php the_sub_field('adres_przycisku', 285); ?>" class="carousel__action-link"><?php the_sub_field('tresc_przycisku', 285); ?></a>
        </div>
    </div>
    <?php
          endwhile;
        else :
        endif;
        ?>
    </div>
    <a
      class="carousel-control-prev"
      href="#carouselExampleCaptions"
      role="button"
      data-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a
      class="carousel-control-next"
      href="#carouselExampleCaptions"
      role="button"
      data-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<section class="offer-home">
  <h2 class="offer-home__title">Oferta</h2>

  <div class="offer__posts">

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

  </div>

</section>

<section class="testimonials">

<div class="container">
  <div class="row">
    <div class="col-md-8 col-center m-auto">
      <h2 class="testimonials__title">Opinie naszych klientów</h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators carousel-indicators--testimonials">
          <?php
          if( have_rows('opinia', 285) ):
              while ( have_rows('opinia', 285) ) : the_row(); ?>
                <li class="carousel__indiactior carousel__indiactior--testimonials" data-target="#myCarousel" data-slide-to="1"></li>
              <?php
          endwhile;
          else :
          endif;
          ?>
        </ol>
    <div class="carousel-inner">
    <?php
      if( have_rows('opinia', 285) ):
          while ( have_rows('opinia', 285) ) : the_row(); ?>
          <div class="item carousel-item carousel-item--testimonials">
            <p class="testimonials__overview"><?php the_sub_field('autor_opinii', 285); ?></p>
            <p class="testimonials__paragraph">
            <?php the_sub_field('tresc_opinii', 285); ?>
            </p>
          </div>
          <?php
    endwhile;
    else :
    endif;
      ?>
    </div>
        <a
          class="carousel-control left carousel-control-prev"
          href="#myCarousel"
          data-slide="prev"
        >
          <i class="carousel__angle--testimonials fa fa-angle-left"></i>
        </a>
        <a
          class="carousel-control right carousel-control-next"
          href="#myCarousel"
          data-slide="next"
        >
          <i class="carousel__angle--testimonials fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>

</section>

<?php get_footer(); ?>
