<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-image">
			<a href="<?php the_permalink(); ?>" class="entry-image-link"><?php the_post_thumbnail(); ?></a>
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<h2 class="entry-title h1"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<?php get_template_part( 'templates/parts/entry', 'meta' ); ?>
	</header>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>
