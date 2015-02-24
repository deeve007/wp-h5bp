<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'theme' ), max( $paged, $page ) );
	?></title>
    <meta name="description" content="<?php get_bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	
	<div id="container" class="hfeed">
		<header id="branding" role="banner">
			<h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<div id="site-description"><?php bloginfo( 'description' ); ?></div>

			<nav id="header-menu" role="navigation">
				<h1 class="visuallyhidden">Main Menu</h1>
				<div class="visuallyhidden skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'theme' ); ?>"><?php _e( 'Skip to content', 'theme' ); ?></a></div>
				<?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
			</nav><!-- #access -->
		</header><!-- #branding -->

		<div id="content" role="main">