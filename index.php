<?php get_header(); ?>

		<div class="row">
			<div id="main" class="grid9">

        <?php get_template_part( 'loop', 'index' );	?>

			</div><!-- #main -->

			<div id="sidebar" class="grid3">

				<?php get_sidebar(); ?>

			</div> <!-- #sidebar -->
		</div><!-- .row -->

<?php get_footer(); ?>
