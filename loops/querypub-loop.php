	<?php
	    	$args = array( 
	    		'post_type' => 'publicaciones',
				'posts_per_page' => 3
			);
	    	$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) :
		?>
		<?php
      		$category_id = get_cat_ID( 'publicaciones' );
      		$category_link = get_category_link( $category_id );
		?>
		
      	<h1 class="titul-secc">
      		<a href="<?php echo get_site_url();?>/publicaciones" title="publicaciones">publicaciones</a>
      	</h1>
		 
		 <?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<div class="container">
			<div class="pub-container">
				<h1>
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
				</h1>
				<p>
	  				<?php the_excerpt();?>
	  			</p>
			</div>
			<div class="masc">
				<?php the_post_thumbnail();?>	
			</div>
			<a class="boton-noticias" href="<?php the_permalink();?>">¿Quieres leer más?</a>
		</div>
		<?php
			endwhile;
			endif;
			wp_reset_postdata();
		?>
