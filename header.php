<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kpacsrilanka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kpacsrilanka' ); ?></a>


 

	<header id="masthead" class="site-header">

	
		
	<div class="container-fluid pt-2 pb-2">
			<div class="row align-items-center">
				<div class="col-md-4">
				</div>
				<div class="col-md-4  site-header__logo d-flex justify-content-center">
					<?php  	the_custom_logo(); ?>
				</div>
				<div class="col-md-4">
				</div>
			</div>

			
	</div>

		<nav id="site-navigation" class="main-navigation pb-2">
			<div class="container d-flex justify-content-center">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">

					<i class="bi bi-list"></i>
						
					<?php esc_html_e( 'Menu', 'kpacsrilanka' ); ?>
				
					</button>
			
					</div>
					<div class="col-12 text-center">

					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>

					</div>
				</div>
		

			</div>

			
			
		</nav><!-- #site-navigation -->

		
	</header><!-- #masthead -->
