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
<div class="quienes container-flex">
	<h1>¿quienes somos?</h1>
	<hr>
	<i class="fa fa-angle-double-down flecha-abajo"></i>
	<section class="quienes-conte">
		<div class="quienes-intro">
			<h1>“Asociación Mexicana de Investigación Interdisciplinaria”</h1>
			<h2>ASMIIA</h2>	
		</div>
		<div class="mision">
			<h2>MISION</h2>
			<h3>
				<?php the_field('mision',16);?>	
			</h3> 	
		</div>
		<div class="vision">
			<h2>VISION</h2>
			<h3>
				<?php the_field('vision',16); ?>	
			</h3>	
		</div>			
		<i class="fa fa-angle-double-up flecha-arriba"></i>
	</section>	
</div>
<div class="noticias">
	<div class="container-fluid">
	 <div class="row">
      <div id="content" class="blog col-12" role="main">
 	    <?php get_template_part('loops/queryblo-loop'); ?>
      </div><!-- /#content -->
      <div id="content" class="art col-12" role="main">
	  	<?php get_template_part('loops/queryart-loop'); ?>
	  </div><!-- /#content -->
	  <div id="content" class="pub col-12" role="main">
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
