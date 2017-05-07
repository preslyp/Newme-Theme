<?php get_header(); ?>

	<div class="row">

		<div class="col-xs-12">

		<div id="awesome-carousel" class="carousel slide" data-ride="carousel">

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
				<?php
					$args_cat = array(
						'include' => '1, 9, 8'
					);

					$categories = get_categories($args_cat);
					$count = 0;
					$bullets = '';
					foreach ($categories as $category):

						$args = array(
							'type' => 'post', 
							'posts_per_page' => 1,//първият от всяка категория като цикълът минава през всяка
												// категория и взима първият от нея
							'category__in' => $category->term_id,
							//'category__not_in' => array( ) - казваме кои категории не искаме да се включват
						);
					
						$lastBlog = new WP_Query($args);

						if( $lastBlog->have_posts() ):
						
							while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

								<div class="item <?php if ($count==0): echo "active"; endif; ?>">
								    <?php the_post_thumbnail('full'); ?>
								    <div class="carousel-caption">
								    	
								    	<?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
	
										<small><?php the_category(' '); ?></small>

								    </div>
								</div>

								<?php $bullets .= '<li data-target="#awesome-carousel" data-slide-to="'.$count.'" class="';?>

								<?php if ($count==0): $bullets .= "active"; endif; ?>

								<?php $bullets .= '"></li>'; ?>
							
							<?php endwhile;
						
						endif;

						wp_reset_postdata();
						$count++;
					endforeach;
				?>
			<ol class="carousel-indicators">
			<?php echo $bullets; ?>
		    	
		  	</ol>

		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#awesome-carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#awesome-carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	
	</div>
	
	</div>

	<div class="row">

	<div class="col-xs-12 col-sm-8">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;

		?>
	
	</div>

	<hr>

	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
	</div>

<?php get_footer(); ?>