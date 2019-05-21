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



<section class="section section--offer">
  <h2 class="section__title">Oferta</h2>
</section>

<?php get_footer(); ?>
