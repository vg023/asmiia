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
    <div class="image-libro col-lg-6">
      <a href="<?php the_field( 'url' ); ?>">
        <?php if( get_field('imagen_de_portada') ): ?>
          <img src="<?php the_field('imagen_de_portada'); ?>" />
        <?php endif; ?>
      </a>
    </div>
    <div class="info-libro col-lg-6">
      <div class="nombre">
        <?php the_field('nombre');?>
      </div>
      <div class="autor">
        <?php the_field('autor');?>
      </div>
      <div class="colaboradores">
        <ul>
          <li><?php the_field('colaboradores');?></li>
        </ul>
      </div>
      <div class="editorial">
        <?php the_field('editorial');?>
      </div>
      <div class="isbn">
        <?php the_field('isbn');?>
      </div>
      <div class="edicion">
        <?php the_field('edicion');?>
      </div>
    </div>
    <div class="resena-libro">
      <p>
        <?php the_field('reseña_del_libro');?>
      </p>
      <a href="<?php the_field( 'url' ); ?>">Descargar Aquí</a>
    </div>
  </div>
</div>
    <?php get_footer(); ?>
