<?php get_header(); ?>

<div class="row">
	<div id="main" class="grid8">
		<h1 class="page-title">
			<?php printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );?>
		</h1>
		<?php get_template_part( 'loop', 'tag' ); ?>
	</div><!-- #main -->
	<div id="sidebar" class="grid4">
		<?php get_sidebar(); ?>
	</div>
</div><!-- .row -->


<?php get_footer(); ?>
