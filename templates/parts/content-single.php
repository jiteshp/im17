<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php get_template_part( 'templates/parts/entry', 'meta' ); ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<footer class="entry-footer entry-meta">
		<span class="entry-categories">
			<span class="dashicons dashicons-category"></span>
			<?php the_category( ', ' ); ?>
		</span>

		<?php the_tags( '<span class="entry-tags"><span class="dashicons dashicons-tag"></span> ', ', ', '</span>' ); ?>
	</footer>
</article>
