	<?php
	    	$args = array( 
				'posts_per_page' => 3, 
				'cat' => 2,
			);
	    	$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) :
		?>
		<?php
			$category_id = get_cat_ID( 'articulos' );
			$category_link = get_category_link( $category_id );
		?>
      	<h1 class="titul-secc">
      		<a href="<?php echo esc_url( $category_link ); ?>" title="articulos">articulos</a>
      	</h1>
		<div class="container-fluid">
			<div class="row">
		 <?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		
			
				<div class="col">
					<h1>
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</h1>
					<p>
  						<?php the_excerpt();?>
  					</p>
  					
  					<a class="boton-noticias" href="<?php the_permalink();?>">¿Quieres leer más?</a>
				</div>	
			
		
		<?php
			endwhile;
			endif;
			wp_reset_postdata();
		?>
		</div>
	</div>
	