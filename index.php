<?php get_header(); ?>

<!-- site-content -->
<div class="site-content">
	<div class="container">
		<!-- main -->
		<main class="main" role="main">
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'templates/parts/content' );
				endwhile;

				the_posts_pagination( array(
					'prev_text' => esc_html__( '&larr;', 'im17' ),
					'next_text' => esc_html__( '&rarr;', 'im17' ),
				) );
			else :
				get_template_part( 'templates/parts/content', 'none' );
			endif;
			?>
		</main><!-- /main -->
	</div>
</div><!-- /site-content -->

<?php get_footer(); ?>
