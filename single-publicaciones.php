<?php
/**!
 * Single-publicaciones
 */
?>

<?php get_header(); ?>
<?php the_field('nombre');?>
<?php the_field('autor');?>
<?php the_field('isbn');?>
<?php get_footer(); ?>