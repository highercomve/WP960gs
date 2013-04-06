<?php get_header(); ?>

		<div class="row">
      
      <div id="area-3000" class="grid12">
        <div class="row">
          <?php dynamic_sidebar('nueva-area-3000'); ?>
        </div>
      </div>

			<div id="main" class="grid9">

			 <?php get_template_part( 'loop', 'index' );	?>

			</div><!-- #main -->

			<div id="sidebar" class="grid3">

				<?php get_sidebar(); ?>

			</div> <!-- #sidebar -->
		</div><!-- .row -->

<?php get_footer(); ?>
