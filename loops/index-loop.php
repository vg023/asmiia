<?php
/**!
 * The Default Loop (used by index.php, category.php and author.php)
 * =================================================================
 * If you require only post excerpts to be shown in index and category pages, 
 * use the [---more---] line within blog posts.
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <div class="container">
  	<h1>
  		<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
  	</h1>
  	<p>
  		<?php the_excerpt();?>
  	</p>
  </div>

<?php endwhile; ?>

<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
<ul class="pagination">
  <li class="page-item older">
    <?php next_posts_link('<i class="fas fa-arrow-left"></i> ' . __('Previous', 'b4st')) ?></li>
  <li class="page-item newer">
    <?php previous_posts_link(__('Next', 'b4st') . ' <i class="fas fa-arrow-right"></i>') ?></li>
</ul>
<?php } ?>

<?php
  else:
    wp_redirect(get_bloginfo('url').'/404', 404);
    exit;
  endif;
?>
