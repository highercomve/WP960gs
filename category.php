<?php get_header(); ?>

<div class="row">
	<div id="main" class="grid8">
		<h1 class="page-title">
			<span>
				<?php echo single_cat_title( '', false ) ?>
			</span>
		</h1>
		<div class="articules">
			<?php get_template_part( 'loop', 'category' ); ?>
		</div>
	</div> <!-- #main -->
	<div id="sidebar" class="grid4">
		<?php get_sidebar(); ?>
	</div>
</div> <!-- .row -->
<?php get_footer(); ?>
