<?php
/**!
 * Single-publicaciones
 */
?>

<?php get_header(); ?>
<div class="title-pub">
  <h1>
    <?php the_title(); ?>
  </h1>
</div>
<div class="conte-pub">
  <h2>
    <?php the_field('nombre');?>
  </h2>
  <h2>
    <?php the_field('autor');?>
  </h2>
  <h2>
    <?php the_field('isbn');?>
  </h2>  
</div>
<?php get_footer(); ?>