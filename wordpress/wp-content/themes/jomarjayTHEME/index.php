<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12 col-sm-8">
	
			<?php  
			if( have_posts()):

				while(have_posts()): the_post(); ?>

						<?php get_template_part('content', get_post_format());   // by using this function need cxa ug slug, name create kog new file name.content.php ?>


				<!-- 	<h3><?php the_title(); ?></h3>
					<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>	
					<small>Posted on: <?php the_time('F j, Y'); ?> at <?php  the_time('g:i a' ); ?>, in <?php  the_category();?></small>
					<p><?php the_content(); ?></p>
					
					<hr> -->

			<?php	endwhile;

		 		endif;	

			 ?>
	</div>

		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
			
		</div>

</div>
<?php get_footer(); ?>