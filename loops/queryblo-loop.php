	<?php
	    	$args = array( 
				'posts_per_page' => 3, 
				'cat' => 2,
			);
	    	$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) :
		?>
		 <?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<div class="container">
			<h1>
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
			</h1>
			<p>
  				<?php the_excerpt();?>
  			</p>
		</div>
		<?php
			endwhile;
			endif;
			wp_reset_postdata();
		?>
