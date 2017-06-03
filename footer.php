<?php if ( ! is_front_page() ) : ?>
	<div class="footer-feature-box">
		<?php get_sidebar(); ?>
	</div>
<?php endif; ?>

<!-- site-footer -->
<footer class="site-footer" role="contentinfo">
	<div class="container">
		<div class="copyright">
			<?php printf( esc_html__( 'Copyright &copy; %s. All rights reserved.', 'im17' ), get_bloginfo( 'name' ) ); ?>
		</div>

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="footer-menu" role="navigation">
				<?php
				wp_nav_menu( array(
					'container' 	 => false,
					'depth' 	 	 => 1,
					'theme_location' => 'footer',
				) );
				?>
			</nav>
		<?php endif; ?>
	</div>
</footer><!-- /site-footer -->

<?php wp_footer(); ?>
</body>
</html>
