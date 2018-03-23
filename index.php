<?php get_header(); ?>
<div class="main">
	<div class="mask">
		<p>ASMIIA</p>
	</div>
	<img src="<?php bloginfo('template_url');?>/theme/img/microsco.jpeg">
</div>
<div class="quienes container-flex">
	<h1>quienes somos</h1>
	<p>lorem ipsum</p>
	<div class="quienes-conte">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>	
</div>
<div class="noticias container-felx">
  <div class="row">
    <div class="col-sm d-flex">
      <div id="content col-3" role="main">
        <?php get_template_part('loops/index-loop'); ?>
      </div><!-- /#content -->
       <div id="content col-3" role="main">
        <?php get_template_part('loops/index-loop'); ?>
      </div><!-- /#content -->
       <div id="content col-3" role="main">
        <?php get_template_part('loops/index-loop'); ?>
      </div><!-- /#content -->
    </div>
  </div><!-- /.row -->
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
	</div>
</div>
<?php get_footer(); ?>
