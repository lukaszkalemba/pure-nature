<?php

  /*
    Template Name: Cennik
  */

?>

<?php get_header(); ?>

  <section class="tariff">
    <h2 class="tariff__title">Cennik</h2>



<div class="container-fluid px-5 my-5">

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


  <nav>
    <div class="nav-tabs" id="nav-tab" role="tablist">

  <?php
  if ( $posts ) {
  		foreach ( $posts as $post ) {
  ?>

      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo(object_to_array($post)["post_title"]); ?></a>

  <?php
  }
  }
  ?>

</div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Lorem</div>
</div>

</div>

</section>

<?php get_footer(); ?>
