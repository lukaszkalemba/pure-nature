<?php get_header(); ?>


<div class="carousel-container">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li class="carousel__indiactior active"
        data-target="#carouselExampleCaptions"
        data-slide-to="0"
      ></li>
      <li class="carousel__indiactior" data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li class="carousel__indiactior" data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="<?php bloginfo( 'template_url' );?>/dist/img/hero.png"
          class="carousel__image d-block w-100"
          alt="..."
        />
        <div class="carousel-caption d-md-block">
          <h5 class="carousel__title">Odkryj swoje prawdziwe piękno</h5>
          <a role="button" href="<?php the_permalink("280"); ?>" class="carousel__action-link">Dowiedz się więcej</a>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="<?php bloginfo( 'template_url' );?>/dist/img/hero.png"
          class="carousel__image d-block w-100"
          alt="..."
        />
        <div class="carousel-caption d-md-block">
          <h5 class="carousel__title">Odkryj swoje prawdziwe piękno</h5>
          <a role="button" href="<?php the_permalink("280"); ?>" class="carousel__action-link">Dowiedz się więcej</a>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="<?php bloginfo( 'template_url' );?>/dist/img/hero.png"
          class="carousel__image d-block w-100"
          alt="..."
        />
        <div class="carousel-caption d-md-block">
          <h5 class="carousel__title">Odkryj swoje prawdziwe piękno</h5>
          <a role="button" href="<?php the_permalink("280"); ?>" class="carousel__action-link">Dowiedz się więcej</a>
        </div>
      </div>
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



<section class="section">
  <h2 class="section__title">Oferta</h2>

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

<section class="section section--testimonials">

<div class="container">
      <div class="row">
        <div class="col-md-8 col-center m-auto">
          <h2 class="section__title section__title--testimonials">Opinie naszych klientów</h2>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators carousel-indicators--testimonials">
              <li
                data-target="#myCarousel"
                data-slide-to="0"
                class="carousel__indiactior carousel__indiactior--testimonials active"
              ></li>
              <li class="carousel__indiactior carousel__indiactior--testimonials" data-target="#myCarousel" data-slide-to="1"></li>
              <li class="carousel__indiactior carousel__indiactior--testimonials" data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
              <div class="item carousel-item active">
                <p class="testimonials__overview">Anna Kowalska</p>
                <p class="testimonials__paragraph">
                  Z całego serca polecam salon Pure Nature. Wysoka jakość,
                  przystępna cena oraz świetna atmosfera podczas każdej wizyty.
                  Makijaż oraz paznokcie zostały wykonane na najwyższym
                  poziomie. Salon Pure Nature to najlepszy wybór.
                </p>
              </div>
              <div class="item carousel-item">
                <p class="testimonials__overview">Anna Kowalska</p>
                <p class="testimonials__paragraph">
                  Z całego serca polecam salon Pure Nature. Wysoka jakość,
                  przystępna cena oraz świetna atmosfera podczas każdej wizyty.
                  Makijaż oraz paznokcie zostały wykonane na najwyższym
                  poziomie. Salon Pure Nature to najlepszy wybór.
                </p>
              </div>
              <div class="item carousel-item">
                <p class="testimonials__overview">Anna Kowalska</p>
                <p class="testimonials__paragraph">
                  Z całego serca polecam salon Pure Nature. Wysoka jakość,
                  przystępna cena oraz świetna atmosfera podczas każdej wizyty.
                  Makijaż oraz paznokcie zostały wykonane na najwyższym
                  poziomie. Salon Pure Nature to najlepszy wybór.
                </p>
              </div>
            </div>
            <!-- Carousel controls -->
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
