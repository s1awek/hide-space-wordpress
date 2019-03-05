<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<section data-aos="fade-in" data-aos-duration="2000" data-aos-once="true" class="top-wrap fixed-top">
	<section class="info-bar">
		<div class="container">
			<div class="row row-info-bar">
				<div class="col-auto col-phone-number col-top-info">
					<i class="fas fa-mobile-alt"></i><span class="phone-number">Zadzwoń: +48 555 555 555</span>
				</div>
				<div class="col-auto col-email-address col-top-info">
					<i class="fas fa-envelope"></i><span class="email-address">Email: <a href="mailto:#" class="info-bar__link">hello@hide-space.com</a></span>
				</div>
				<div class="col-auto col-language-switcher">
					<select class="selectpicker" aria-label="Choose language" data-width="fit" data-flag="true">
						<option aria-label="Polish" data-content="<span class='lang-pl'>PL</span>">PL</option>
						<option aria-label="English" data-content="<span class='lang-en'>EN</span>">EN</option>
					</select>

				</div>
				<div class="col-auto col-top-bar-social col-top-info">
					<a href="#" aria-label="Facebook" class="social-link"><i class="fab fa-facebook-f"></i></a>
					<a href="#" aria-label="Twitter" class="social-link"><i class="fab fa-twitter"></i></a>
					<a href="#" aria-label="Instagram" class="social-link"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</section>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="navbar-top" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-xl navbar-dark">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php 
				
				$search_form = '<form class="form-inline">
				<input class="form-control" type="search" placeholder="Szukaj" aria-label="Search">
				<button class="btn btn-outline-success" aria-label="Search" type="submit"><i class="fas fa-search"></i></button>
				</form>';
				
				?>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
	</section>
