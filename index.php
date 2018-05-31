<?php get_header(); ?>
<?php
	$args = array (
		'posts_per_page' => 3,
		'post_type' => 'post',
		'order_by' => 'date',
	);
	
	$lequery = new WP_Query( $args );
?>
<?php
	if ( $lequery->have_posts() ) :
?>
	<div class="prueba">
<?php
	while ( $lequery->have_posts() ) : $lequery->the_post();  	
?>
	<div class="pruebas">
		<h1><?php the_title();?></h1>
		<p><?php the_excerpt(); ?></p>
		<?php the_post_thumbnail(); ?>
	</div>
<?php
	endwhile;
	endif;
// Reset Post Data
	wp_reset_postdata();
?>
</div>
<div class="quienes container-flex">
	<h1>¿quienes somos?</h1>
	<hr>
	<i class="fa fa-angle-double-down flecha-abajo"></i>
	<section class="quienes-conte">
		<h1>“Asociación Mexicana de Investigación Interdisciplinaria”</h1>
		<h1>ASMIIA</h1>
		<h2>MISION</h2>
		<?php the_field('mision',104);?> 
		<h2>VISION</h2>
		<?php the_field('vision',104); ?>	
	</section>	
</div>
<div class="noticias">
	<div class="container-fluid">
	 <div class="row">
      <div id="content" role="main" class="col-4">
      	<h1 class="titul-secc"><a href="<?php get_template_directory_uri(); ?>/page-publicacion.php">d</a></h1>
        <?php get_template_part('loops/queryblo-loop'); ?>
      </div><!-- /#content -->
      <div id="content" role="main" class="col-4">
	  	<?php get_template_part('loops/queryart-loop'); ?>
	  </div><!-- /#content -->
	  <div id="content" role="main" class="col-4">
	   	<h1 class="titul-secc">Noticias</h1>
	    <?php get_template_part('loops/querypub-loop'); ?>
	  </div><!-- /#content -->
    </div>	
	</div>
   
</div><!-- /.container-responsive -->
<div class="parallax container-flex">	
	<div class="para-conte container-flex">
		<h1>¿Como puedo aportar?</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="mask"></div>
	</div>
	<div class="para-conte container-flex">
		<h1>¿Como puedo aportar?</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="mask"></div>
	</div>
</div>
<?php get_footer(); ?>
