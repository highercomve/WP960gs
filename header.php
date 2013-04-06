<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
	<?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header" class="container">
		<div id="masthead" class="row">
			<div id="branding" role="banner" class="grid12">
				<div class="row">
					<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
					
					<<?php echo $heading_tag; ?> id="site-title" class="grid5">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

							<img src="<?php bloginfo("template_directory") ?>/images/logo_completo.png" title="<?php bloginfo("name") ?>" />

						</a>
					</<?php echo $heading_tag; ?>>
				
					<div id="header-widget-area" class="grid7 right">
						<?php dynamic_sidebar("header-widget-area") ?>
					</div> <!-- #header-widget-area -->

				</div> <!-- .row -->	
			</div><!-- #branding -->

			<div id="access" role="navigation" class="grid12">
				<?php wp_nav_menu( array( 'container_class' => 'menu', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #access -->

			
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="content" class="container">
