<?php get_header(); ?>

<!-- site-content -->
<div class="site-content">
	<div class="container">
		<!-- main -->
		<main class="main" role="main">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'templates/parts/content', 'single' );

				get_sidebar();

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile;
			?>
		</main><!-- /main -->
	</div>
</div><!-- /site-content -->

<?php get_footer(); ?>
