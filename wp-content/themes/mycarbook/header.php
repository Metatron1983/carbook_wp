<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyCarbook
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php echo esc_url(get_home_url(19)) ?>">Car<span>Book</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<?php

			wp_nav_menu([
				'theme_location'  => 'header_nav',
				'menu'            => '4',
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'ftco-nav',
				'menu_class'      => 'navbar-nav ml-auto',
				'menu_id'         => '',
				'echo'            => true,
				// 'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'depth'           => 1,
				'walker'          => '',
				'add_li_class' => 'nav-item',
				'add_li_active_class' => 'active',
				'add_a_class' => 'nav-link',
			]);
			?>

		</div>
	</nav>
	<!-- END nav -->
	
