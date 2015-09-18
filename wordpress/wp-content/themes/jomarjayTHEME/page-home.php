<?php get_header(); ?>

<div class="row">

	<div class="col-xs-12">

		<?php 

				$args = array(
					'type' => 'post',
					'posts_per_page' => 3,
				);

				$lastBlog = new WP_Query($args);
			
				if( $lastBlog->have_posts() ):
					
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
						
						<?php get_template_part('content','featured'); ?>
					
					<?php endwhile;
					
				endif;	

				wp_reset_postdata(); // safe guard life saving functions reset 



		 ?>
		
	</div>

	<div class="col-xs-12 col-sm-8">
	
			<?php  
			if( have_posts()):

				while(have_posts()): the_post(); ?>

						<?php get_template_part('content', get_post_format());  ?>



			<?php	endwhile;

		 		endif;	

		 		// PRINT OTHER 2 POST  NOT  THE FIRST ONE

		 		/*$args = array(
		 			'type'	=> 'post',
		 			'posts_per_page' => 2,
		 			'offset' => 1,
		 		);

		 		$lastBlog = new WP_Query($args);  // offset d na mogawas ang 1st post dresto na sa ika duha nga last ge post
			
				if( $lastBlog->have_posts() ):
					
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
						
						<?php get_template_part('content',get_post_format()); ?>
					
					<?php endwhile;
					
				endif;	

				wp_reset_postdata();*/


			 ?>

		<!-- 	 <hr>
			 <p>Print only news</p> -->


			 <?php 

			 	// PRINT ONLY news category

		 /*		$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');  // -1 no limit 
			
				if( $lastBlog->have_posts() ):
					
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
						
						<?php get_template_part('content',get_post_format()); ?>
					
					<?php endwhile;
					
				endif;	

				wp_reset_postdata();
*/

			  ?>


	</div>

		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
			
		</div>

</div>
<?php get_footer(); ?>