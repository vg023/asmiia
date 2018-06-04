<?php get_header(); ?>
<div class="pruebas-wrap">
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
			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
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
		<div class="container">
			<p>Haciendo deposito o transferencia con los siguientes datos</p>
			<ul class="lista-aporte">
				<li><span>Institucion:</span> Bancomer</li>
				<li><span>Cuenta:</span> 00001115555</li>
				<li><span>Razon social:</span> ASMIIA</li>
			</ul>
		</div>
		<div class="mask"></div>
	</div>
</div>
<?php get_footer(); ?>
