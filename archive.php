<?php

get_header(); ?>

<div class="row">
	<div id="main" class="grid8">
		<?php if ( have_posts() ) the_post(); ?>
			<h1 class="page-title">
				<?php if ( is_day() ) : ?>
					<?php printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
				<?php elseif ( is_month() ) : ?>
					<?php printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
				<?php elseif ( is_year() ) : ?>
					<?php printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
				<?php else : ?>
					<?php _e( 'Blog Archives', 'twentyten' ); ?>
				<?php endif; ?>
			</h1>
		<?php
			rewind_posts();
			get_template_part( 'loop', 'archive' );
		?>
	</div> <!-- #main -->
	<div id="sidebar" class="grid4">
		<?php get_sidebar(); ?>
	</div> <!-- #sidebar -->
	
</div><!-- .row -->


<?php get_footer(); ?>
