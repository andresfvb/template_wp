<?php get_header(); ?>

<?php while(have_posts( )): the_post(  ); ?>

<main class="content-page">
<!-- Slider -->
<section id="carousel" class="sections container-fluid d-flex flex-row align-items-end">
  <div class="row">
    <div class="text-emphasis-warning carousel__slogan d-flex flex-wrap col-md-6">
      <div class="carousel__section d-flex flex-nowrap flex-column">
        <h3 class="carousel__title">#UnPlusParaTuCarrera</h3>
        <p class="carousel__subtitle">En Icesi impulsamos las <span class="carousel__bold">las competencias</span> de la
        <span class="carousel__bold">nueva generación de profecionales</span> con:</p>
        <div class="carousel__items d-flex mx">
          <p class="carousel__item p-2"><i class="bi bi-check-circle-fill"></i>Maestrías</p>
          <p class="carousel__item p-2"><i class="bi bi-check-circle-fill"></i>Especializaciones</p>
        </div>
        <div class="carousel__explorer">
          <button type="button" class="btn btn-light text-primary btn-lg px-5 py-4"><i class="bi bi-arrow-right"></i> Explora más</button>
        </div>
      </div>
    </div>
    <div id="carouselExampleSlidesOnly" data-bs-ride="carousel" class="carousel slide carousel-fade col-md-6 p-0" >
      <div class="carousel-inner">
        <div class="carousel-item active ">
          <img src="<?php echo get_post_meta( get_the_ID(  ), 'icesi_slider1', true ); ?>" class="w-100" alt="Mujeres empresariales">
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_post_meta( get_the_ID(  ), 'icesi_slider2', true ); ?>" class="w-100" alt="Hombre estudiante">
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_post_meta( get_the_ID(  ), 'icesi_slider3', true ); ?>" class="w-100" alt="Personas estudiante">
        </div>
      </div>
    </div>
  </div>
</section>      
<!-- Section of "Liderazgo Transpofrmacional"-->
<section id="liderazgo" class="sections container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_post_meta( get_the_ID(  ), 'icesi_image1', true ); ?>');">
  <div class="row h-100">
    <div class="section__left h-100 col-md-5 d-grid align-items-center flex-nowrap text-emphasis-warning">
      <div class="section__info">
        <h2 class="mb-4"><?php echo get_post_meta( get_the_ID(  ), 'icesi_title1', true ); ?></h2>
        <p><?php echo get_post_meta( get_the_ID(  ), 'icesi_text1', true ); ?></p>
        <button type="button" class="btn btn-light text-primary btn-md px-5 py-3 "><i class="bi bi-arrow-right"></i> Descubre los programas</button>
      </div>
    </div>
    <div class="section__right col-md-7 d-grid p-5 align-items-center flex-nowrap text-emphasis-warning">
      <div class="section__items">
        <h4 class="mb-3">Características</h4>
        <div class="container-fluid">
          <div class="row gap-3 text-center">
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-journal-bookmark fs-2"></i><p>Gestión de Proyectos</p></div>
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-hand-thumbs-up fs-2"></i><p>Gestión de Conflictos</p></div>
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-alarm fs-2"></i><p>Gestión del Tiempo</p></div>
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-lightbulb fs-2"></i><p>Creatividad</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section of "Analitica digital e innovacion"-->
<section id="analitica" class="sections container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_post_meta( get_the_ID(  ), 'icesi_image2', true ); ?>');">
  <div class="row h-100">
    <div class="section__left h-100 col-md-5 d-grid align-items-center flex-nowrap text-emphasis-warning">
      <div class="section__info">
      <h2 class="mb-4"><?php echo get_post_meta( get_the_ID(  ), 'icesi_title2', true ); ?></h2>
        <p><?php echo get_post_meta( get_the_ID(  ), 'icesi_text2', true ); ?></p>
        <button type="button" class="btn btn-light text-primary btn-md px-5 py-3 "><i class="bi bi-arrow-right"></i> Descubre los programas</button>
      </div>
    </div>
    <div class="section__right col-md-7 d-grid p-5 align-items-center flex-nowrap text-emphasis-warning">
      <div class="section__items">
        <h4 class="mb-3">Características</h4>
        <div class="container-fluid">
          <div class="row gap-3 text-center">
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-journal-bookmark fs-2"></i><p>Gestión de Proyectos</p></div>
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-hand-thumbs-up fs-2"></i><p>Gestión de Conflictos</p></div>
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-alarm fs-2"></i><p>Gestión del Tiempo</p></div>
            <div class="section__item col d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-lightbulb fs-2"></i><p>Creatividad</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section of "Profundización profesional"-->
<section id="profundizacion" class="sections container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_post_meta( get_the_ID(  ), 'icesi_image3', true ); ?>');">
  <div class="row h-100">
    <div class="section__left h-100 col-md-5 d-grid align-items-center flex-nowrap text-emphasis-warning">
      <div class="section__info">
      <h2 class="mb-4"><?php echo get_post_meta( get_the_ID(  ), 'icesi_title3', true ); ?></h2>
        <p><?php echo get_post_meta( get_the_ID(  ), 'icesi_text3', true ); ?></p>
        <button type="button" class="btn btn-light text-primary btn-md px-5 py-3 "><i class="bi bi-arrow-right"></i> Descubre los programas</button>
      </div>
    </div>
    <div class="sections__right col-md-7 d-grid p-5 align-items-center flex-nowrap text-emphasis-warning">
      <div class="section__items">
        <h4 class="mb-3">Características</h4>
        <div class="container-fluid">
          <div class="row gap-3 text-center">
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-journal-bookmark fs-2"></i><p>Gestión de Proyectos</p></div>
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-hand-thumbs-up fs-2"></i><p>Gestión de Conflictos</p></div>
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-alarm fs-2"></i><p>Gestión del Tiempo</p></div>
            <div class="section__item col d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-lightbulb fs-2"></i><p>Creatividad</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section of "Productividad"-->
<section id="productividad" class="sections container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_post_meta( get_the_ID(  ), 'icesi_image4', true ); ?>');">
  <div class="row h-100">
    <div class="section__left h-100 col-md-5 d-grid align-items-center flex-nowrap text-emphasis-warning">
      <div class="section__info">
      <h2 class="mb-4"><?php echo get_post_meta( get_the_ID(  ), 'icesi_title4', true ); ?></h2>
        <p><?php echo get_post_meta( get_the_ID(  ), 'icesi_text4', true ); ?></p>
        <button type="button" class="btn btn-light text-primary btn-md px-5 py-3 "><i class="bi bi-arrow-right"></i> Descubre los programas</button>
      </div>
    </div>
    <div class="section__right col-md-7 d-grid p-5 align-items-center flex-nowrap text-emphasis-warning">
      <div class="sections__items">
        <h4 class="mb-3">Características</h4>
        <div class="container-fluid">
          <div class="row gap-3 text-center">
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-journal-bookmark fs-2"></i><p>Gestión de Proyectos</p></div>
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-hand-thumbs-up fs-2"></i><p>Gestión de Conflictos</p></div>
            <div class="section__item col px-5 py-4 d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-alarm fs-2"></i><p>Gestión del Tiempo</p></div>
            <div class="section__item col d-flex align-items-center justify-content-center flex-wrap"><i class="bi bi-lightbulb fs-2"></i><p>Creatividad</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Calendario de eventos-->
<!-- Expereiencias de egresados -->
</main>
<?php endwhile; ?>
<?php get_footer( ); ?>