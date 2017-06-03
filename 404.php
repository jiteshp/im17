<?php get_header(); ?>

<!-- site-content -->
<div class="site-content">
	<div class="container">
		<!-- main -->
		<main class="main" role="main">
			<div class="error-404">
				<header class="entry-header">
					<h1 class="entry-title"><?php esc_html_e( 'Page not found', 'im17' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'im17' ); ?></p>

					<?php get_search_form(); ?>
				</div>
			</div>
		</main><!-- /main -->
	</div>
</div><!-- /site-content -->

<?php get_footer(); ?>
