<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
	</header>
	
	<div class="row">
		<?php if( has_post_thumbnail() ): ?>
		
			<div class="col-xs-12 col-sm-4">
				<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
			</div>
			
		<?php else: ?>
		
			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>
		
		<?php endif; ?>
	</div>

</article>

<hr>