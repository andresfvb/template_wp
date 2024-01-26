<?php

function icesi_query_eventos($cantidad = -1) {
  $args = array(
    "post_type" => 'icesi_eventos',
    'posts_per_page' => $cantidad,
  );
  $clases = new WP_Query($args);
  $count = 1;
  $crear = 0;
  while( $clases->have_posts()): $clases->the_post(  );
  $fecha = get_post_meta(get_the_ID(  ), 'icesi_event_fecha', true);

  $timestamp = strtotime($fecha);
  $fecha_formateada = date('d, F, Y', $timestamp);

  if($crear===0){
    ?>
    <div class="carousel-item active">
    <div class="d-flex justify-content-left gap-5">
    <?php
  }else if($count===5){
    $count = 1;
    ?>
    <div class="carousel-item">
    <div class="d-flex justify-content-left gap-5">
      <?php
  }
?>
        <div class="card calendario__item">
          <img src="<?php echo get_post_meta(get_the_ID(  ), 'icesi_event_imagen', true); ?>" class="card-img-top rounded-0" alt="...">
          <div class="card-body">
            <h5 class="card-title mb-0" style="color: #16168E"><?php the_title(); ?></h5>
            <span style="color: #bababa"><?php echo get_post_meta(get_the_ID(  ), 'icesi_event_modalidad', true); ?></span>
            <p class="card-text mt-3"><?php the_excerpt(  ); ?></p>
              <div class="d-flex justify-content-center">
                <a href="<?php echo get_post_meta(get_the_ID(  ), 'icesi_event_url', true); ?>" class="btn rounded-0 py-2" style="background: #16168E; color: white;width: 100%;">Inscribete</a>
              </div>
          </div>
          <div class="calendario__fecha">
            <p><?php echo $fecha_formateada;?></p>
          </div>
        </div> 
      
      <?php
      if($count===4){
    ?>
    </div>
      </div>
    <?php
  }
  $crear = 1;
$count++;
endwhile; wp_reset_postdata(  );
}