<?php
if ( post_password_required() ) :
	return;
endif;
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php comments_number( '', esc_html__( 'Comments', 'im17' ), esc_html__( '% Comments', 'im17' ) ); ?>
		</h2>

		<ol class="comments-list">
			<?php
			wp_list_comments( array(
				'avatar_size' => 60,
				'style' 	  => 'ol',
				'type' 	  	  => 'comment',
			) );
			?>
		</ol>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="comments-closed"><?php esc_html_e( 'Comments are closed.', 'im17' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>
</div>
