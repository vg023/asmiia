<?php get_header(); ?>

<div class="container-responsive mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('loops/single-post', get_post_format()); ?>
      </div><!-- /#content -->
    </div>

   
  </div><!-- /.row -->
</div><!-- /.container-responsive -->

<?php get_footer(); ?>
