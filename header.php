<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- site-header -->
<header class="site-header" role="banner">
	<div class="container">
		<div class="branding">
			<?php the_custom_logo(); ?>

			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav class="primary-menu" role="navigation">
				<?php
				wp_nav_menu( array(
					'container' 	 => false,
					'depth' 	 	 => 1,
					'theme_location' => 'primary',
				) );
				?>
			</nav>
		<?php endif; ?>
	</div>
</header><!-- /site-header -->

<?php if ( is_front_page() ) : ?>
	<!-- front-page-widgets -->
	<aside class="front-page-widgets" role="complementary">
		<?php dynamic_sidebar( 'front-page' ); ?>
	</aside><!-- /front-page-widgets -->
<?php endif;
