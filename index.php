<?php get_header(); ?>
<div class="main">
	<div class="mask">
		<p>ASMIIA</p>
	</div>
	<img src="<?php bloginfo('template_url');?>/theme/img/microsco.jpeg">
</div>
<div class="container-responsive mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('loops/index-loop'); ?>
      </div><!-- /#content -->
    </div>
  </div><!-- /.row -->
</div><!-- /.container-responsive -->

<?php get_footer(); ?>
