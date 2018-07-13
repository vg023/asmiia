<?php get_header(); ?>
<div class="pruebas-wrap">
	<?php
		$args = array (
			'posts_per_page' => 3,
			'post_type' => array ('post','publicaciones'),
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
			<div class="titul">
				<h1 class="titul-slide"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			</div>
			<div class="conte-s">
				<p class="conte-slide"><?php the_excerpt(); ?></p>
			</div>
			<?php the_post_thumbnail(); ?>
		</div>
	<?php
		endwhile;
		endif;
	// Reset Post Data
		wp_reset_postdata();
	?>
	</div>
</div>

<div class="quienes container-flex ">
	<h1 class="encabezado-quienes">¿quienes somos?</h1>
	<hr>
	<i class="fa fa-angle-double-down flecha-abajo"></i>
	<section class="quienes-conte row">
		<div class="quienes-intro container-fluid col-12">
			<h2>“Asociación Mexicana de Investigación Interdisciplinaria”</h2>
			<!--<h2>ASMIIA</h2>-->
		</div>

		<div class="mision col-lg-6 ">
			<h2>MISION</h2>
			<p><?php the_field('mision',16);?></p>
 		</div>

		<div class="vision col-lg-6">
			<h2>VISION</h2>
			<p><?php the_field('vision',16); ?></p>
		</div>
		<i class="fa fa-angle-double-up flecha-arriba"></i>
 </section>

</div>

<div class="noticias">
	<div class="container-fluid">
	 <div class="row">
	 <div id="content" class="pub col-12" role="main">
	    <?php get_template_part('loops/querypub-loop'); ?>
	  </div><!-- /#content -->

   <!--    <div id="content" class="blog col-12" role="main">
 	     get_template_part('loops/queryblo-loop'); 
      </div> /#content -->

      <div id="content" class="art col-12" role="main">
	  	<?php get_template_part('loops/queryconv-loop'); ?>
	  </div><!-- /#content -->
    </div>
	</div>

</div><!-- /.container-responsive -->
<div class="parallax container-flex">
	<div class="para-conte container-flex">
		<h1>¡PROXIMAMENTE MÁS NOTICIAS!</h1>
		<div class="mask"></div>
	</div>
</div>
<?php get_footer(); ?>
