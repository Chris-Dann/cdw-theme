<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/cc957b8971.js"></script>
</head>

<body <?php body_class(); ?>>
<div class="dano_outer_page">
	<div class="dano_inner_page">
	<header class="dano_header">

		<h1 class="signature"><a href="<?php echo get_site_url(); ?>">Chris Dann</a></h1>
		<i class="hamburger-icon fas fa-bars d-md-none"></i>
		<div class="desktop-menu d-none d-md-inline-block">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</div>

	</header>

	<!-- MOBILE NAVIGATION MENU -->
	<nav id="mobile-navigation" class="ut_hamburger_menu">
		<div class="ut_hamburger_menu_menu">
			<div class="ut_hamburger_menu_menu__inner">
				<div class="ut_hamburger_menu_menu__close_button">
					<i class="ut_hamburger_menu_menu__close_button--icon fas fa-times"></i>
				</div>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'handheld-menu',
						'container'		 => '',
					) );
				?>
			</div>
		</div>
	</nav>

