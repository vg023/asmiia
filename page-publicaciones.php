<?php
/*
Template Name: Publicaciones
*/
?>
<?php get_header(); ?>
<?php 
$args = array( 
		'posts_per_page' => -1, 
		'taxonomy' => 'libros',
    'post_type' =>'Publicaciones'
	);
$query = new WP_Query($args)
?>
<?php if($query->have_posts()): while($query->have_posts()):$query->the_post(); ?>

  <div class="container">
  	<h1>
  		<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
  	</h1>
    <p><?php the_field('nombre');?></p>
    <p><?php the_field('autor');?></p>
    <p><?php the_field('isbn');?></p>
  <img src="<?php bloginfo('template_url')?>/<?php the_field('imagen-de-portada');?>">
  
 <?php $imagen = get_field('imagen-de-portada'); ?>
  <img src="<?php echo $imagen['url']; ?>">
  	<p>
  		<?php the_excerpt();?>
  	</p>
  </div>

<?php endwhile;
	endif; 
	wp_reset_postdata();
	?>

<?php get_footer(); ?>
