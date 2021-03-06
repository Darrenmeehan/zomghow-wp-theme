<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ZOMGHOW
 * @since ZOMGHOW 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title() ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' , 'zomghow' ); ?>

	<header id="masthead" class="site-header" role="banner">
	
	<div id="masthead-inner">
	
		<hgroup>
			<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</hgroup>
		
		<nav role="navigation" class="site-navigation main-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', 'zomghow' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'zomghow' ); ?>"><?php _e( 'Skip to content', 'zomghow' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>		
		</nav>
		
	</div>
	
	</header><!-- #masthead .site-header -->

	<div id="main">