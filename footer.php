	</div><!-- #content -->

	<div id="footer" role="contentinfo" class="container">
		<div id="colophon" class="row">

			<div class="grid12">
				<?php	get_sidebar( 'footer' ); ?>
			</div>

			<div id="site-info" class="grid3">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->

			<div id="menu-footer" class="grid9">
				<?php wp_nav_menu( array( 'container_class' => 'menu-footer', 'theme_location' => 'menu-footer' ) ); ?>
			</div><!-- #site-generator -->

		</div><!-- #colophon/.row -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php	wp_footer(); ?>
</body>
</html>
