<?php
/**!
 * Single-publicaciones
 */
?>
<div class="container-fluid">
  <?php get_header(); ?>
  <div class="title-pub">
    <h1>
      <?php the_title(); ?>
    </h1>
  </div>
  <div class= "row conte-pub">
    <div class="image-libro container col-sm-12 col-md-12 col-lg-6">
      <a href="<?php the_field( 'url' ); ?>">
        <?php if( get_field('imagen_de_portada') ): ?>
          <img src="<?php the_field('imagen_de_portada'); ?>" />
        <?php endif; ?>
      </a>
    </div>
    <div class="info-libro container col-6 col-sm-12 col-md-12 col-lg-6">
        <p>
          <?php the_field('nombre');?>
          <br><?php the_field('autor');?></br>
          <ul>
            <li><?php the_field('colaboradores');?></li>
          </ul>
          <br><?php the_field('editorial');?></br>
          <br><?php the_field('isbn');?></br>
          <br><?php the_field('edicion');?></br>

        </p>
    </div>
    <div class="resena-libro col-lg-12 ">
      <p>
        <?php the_field('reseña_del_libro');?>
      </p>
      <a href="<?php the_field( 'url' ); ?>">Descargar Aquí</a>
    </div>
  </div>
</div>
    <?php get_footer(); ?>
