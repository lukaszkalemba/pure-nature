<?php

  /*
    Template Name: Cennik
  */

?>

<?php get_header(); ?>

  <section class="tariff">
    <h2 class="tariff__title">Cennik</h2>
    
  <?php

function object_to_array($obj) {
  if(is_object($obj)) $obj = (array) $obj;
      if(is_array($obj)) {
          $new = array();
          foreach($obj as $key => $val) {
              $new[$key] = object_to_array($val);
          }
      }
      else $new = $obj;
      return $new;
  }

    $args = array(
    	'post_type'   => 'post',
    	'numberposts' => -1,
    	'post_status' => 'any'
    );
    $posts = get_children( $args );

?>

<ul class="nav nav-pills mb-3 pills__list" id="pills-tab" role="tablist">
<?php
  if ( $posts ) {
  		foreach ( $posts as $post ) {
  ?>

    <li class="nav-item">
      <a class="nav-item nav-link nav-link--tab nav-link--tab--tariff" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"><?php echo(object_to_array($post)["post_title"]); ?></a>
    </li>

  <?php
  }
}
  ?>
</ul>

<div class="tab-content pills__content" id="pills-tabContent">

<?php
  if ( $posts ) {
  		foreach ( $posts as $post ) {
  ?>

  <div class="tab-pane fade show tariff-tab pills__positions" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

    <?php

      if( have_rows('lista_pozycji') ):
        while ( have_rows('lista_pozycji') ) : the_row(); ?>

        <div class="single-tariff-item">
          <div class="single-tariff-position">
            <p><?php the_sub_field('nazwa_pozycji'); ?></p>
            <p><?php the_sub_field('cena_pozycji'); ?></p>
          </div>
        </div>

      <?php
        endwhile;
        else :
        endif;

        ?>
  </div>

  <?php
    }
    ?>


<?php
  }
?>

</section>

<?php get_footer(); ?>
