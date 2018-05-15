<?php get_header(); ?>
<div class="slider">
	<div class="slide">
		<div class="mask">
			<p>ASMIIA</p>
		</div>
		<img src="<?php bloginfo('template_url');?>/theme/img/microsco.jpeg">
	</div>
	<div class="slide">
		<div class="mask">
			<p>ASMIA</p>
		</div>
		<img src="<?php bloginfo('template_url');?>/theme/img/microsco.jpeg">
	</div>
	<div class="slide">
		<div class="mask">
			<p>ASMI</p>
		</div>
	<img src="<?php bloginfo('template_url');?>/theme/img/microsco.jpeg">
	</div>
</div>
<div class="quienes container-flex">
	<h1>¿quienes somos?</h1>
	<hr>
	<i class="fa fa-angle-double-down flecha-abajo"></i>
	<div class="quienes-conte">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores error, quibusdam laudantium illum enim ratione distinctio, dolore fuga assumenda eos ullam quod eveniet, tenetur, possimus vero. Labore impedit quam quaerat veniam recusandae possimus totam, autem repellendus, delectus doloremque aliquam deleniti sapiente nobis accusamus harum perspiciatis in omnis. Maxime obcaecati, modi.
		</p>
	</div>	
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
</div>
<?php get_footer(); ?>
