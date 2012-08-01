<?php get_header(); ?>

<div class="row">
	<div id="main" class="grid8">
		<?php get_template_part( 'loop', 'single' ); ?>
	</div><!-- #main -->
	<div id="sidebar" class="grid4">
		<?php get_sidebar(); ?>
	</div> <!-- #sidebar -->
</div><!-- .row -->
<?php get_footer(); ?>
