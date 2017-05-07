<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-12">

		<?php 
		
			$lastBlog = new WP_Query('type=post&posts_per_page=1');

			if( $lastBlog->have_posts() ):
			
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
					
					<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
				
				<?php endwhile;
			
			endif;

			wp_reset_postdata();
		?>
	
	</div>

	<div class="col-xs-12 col-sm-8">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;


		//PRINTH THE OTHER TWO POST NOT THE FIRTS ONE

		$lastBlog = new WP_Query('type=post&posts_per_page=2&offset=1');

			if( $lastBlog->have_posts() ):
			
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
					
					<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
				
				<?php endwhile;
			
			endif;

			wp_reset_postdata();
				
		?>
	
	</div>

	<hr>



	<div class="col-xs-12 col-sm-12">

		<?php 
			//PRINT ONLY TURTORIALS BY ID (-1 показва всички, offset - прескача първата)
			$lastBlog = new WP_Query('type=post&posts_per_page=-1&cat=1');

			//PRINT ONLY TURTORIALS BY NAME
			//$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');

			if( $lastBlog->have_posts() ):
			
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
					
					<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
				
				<?php endwhile;
			
			endif;

			wp_reset_postdata();
		?>
	
	</div>

	<div class="col-xs-12 col-sm-12">

		<?php

			//Това е друг начин, но е хубаво да се използва, за да се изпишат променливите в масив и след това той да се повика

			$args = array(

				'type' => 'post',
				'posts_per_page' => 2,
				'offset'=> 1,
			);

			$lastBlog = new WP_Query($args);

			if( $lastBlog->have_posts() ):
			
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
					
					<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
				
				<?php endwhile;
			
			endif;

			wp_reset_postdata();
		?>
	
	</div>





	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?>