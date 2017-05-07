<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<?php wp_head(); ?>
</head>

<?php 
	if ( is_front_page() ):

		$alessandro_classes = array('alessandro - class', 'my-class' );
	else:
		$alessandro_classes = array('no-class' );
	
	endif;
?>

<body <?php body_class($alessandro_classes); ?>>

	<div class="container">
		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>

		<div class="row">
			<div class="col-xs-12">
				<nav class="navbar navbar-default navbar-fixed-top">
					 <div class="container">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">Awesome Theme</a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								 wp_nav_menu( array(
					                'menu'              => 'primary',
					                'theme_location'    => 'primary',
					                'depth'             => 2,
					                'container'         => 'div',
					                'container_class'   => 'collapse navbar-collapse',
					        'container_id'      => 'bs-example-navbar-collapse-1',
					                'menu_class'        => 'nav navbar-nav navbar-right',
					                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'walker'            => new wp_bootstrap_navwalker())
					            );
							?>
						</div>
					 </div><!-- /.container-fluid -->
				</nav>
			</div>
			<div class="col-xs-12">
				<div class="container">
					<div class="search-form-container">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div><!-- /.row -->

		
		

