<?php
/*
Template Name: publicaciones
*/
?>
<?php get_header(); ?>
<?php
$args = array(
		'posts_per_page' => -1,
    'post_type' =>'Publicaciones'
	);
$query = new WP_Query($args)
?>
<?php if($query->have_posts()): while($query->have_posts()):$query->the_post(); ?>
  <div class="container">
  	<h1>
  		<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
  	</h1>
    <h2 class="autor">Autor:</h2>
    <p><?php the_field('autor');?></p>
    <h2 class="isbn">ISBN:</h2>
    <p><?php the_field('isbn');?></p>
  <img src="<?php  the_field('imagen_de_portada'); ?>" alt=""> 
  	<p>
  		<?php the_excerpt();?>
  	</p>
  </div>

<?php endwhile;
	endif;
	wp_reset_postdata();
	?>

<?php get_footer(); ?>
