<div class="entry-meta">
	<span class="entry-author">
		<span class="dashicons dashicons-admin-users"></span>
		<?php the_author_link(); ?>
	</span>

	<time class="entry-time" datetime="<?php the_time( 'c' ); ?>">
		<span class="dashicons dashicons-clock"></span>
		<?php
		$posted_on = get_the_time( 'F j, Y' );
		$modified_on  = get_the_modified_time( 'F j, Y' );

		if ( $posted_on != $modified_on ) :
			echo esc_html__( 'Updated on', 'im17' ) . ' ' . $modified_on;
		else :
			echo $posted_on;
		endif;
		?>
	</time>

	<span class="entry-comments-link">
		<span class="dashicons dashicons-admin-comments"></span>
		<a href="<?php get_permalink(); ?>#comments"><?php comments_number( esc_html__( 'No Comments', 'im17' ), esc_html__( 'Comments', 'im17' ), esc_html__( '% Comments', 'im17' ) ); ?></a>
	</span>
</div>
