<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<header class="entry-header">
		<?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
		<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
	</header>
</article>

<hr>