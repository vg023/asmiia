<?php
/*
Template Name: Articulos
*/
?>
<?php get_header(); ?>
<?php 
$args = array( 
		'posts_per_page' => -1, 
		'cat' => 4,
	);
$query = new WP_Query($args)
?>
<?php if($query->have_posts()): while($query->have_posts()):$query->the_post(); ?>

  <div class="container">
  	<h1>
  		<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
  	</h1>
  	<p>
  		<?php the_excerpt();?>
  	</p>
  </div>

<?php endwhile;
	endif; 
	wp_reset_postdata();
	?>

<?php get_footer(); ?>
