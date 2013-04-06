<?php get_header(); ?>

<div class="row">
	<div id="main" class="grid8">

		<?php if ( have_posts() ) : the_post(); ?>
			<h1 class="page-title author">
				<span class='vcard'>
					<a class='url fn n' 
						href='<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) )  ?>' 
						title='<?php echo esc_attr( get_the_author() ) ?>' rel='me'>
							Author Archives: <?php echo get_the_author()  ?>
					</a>
				</span>
			</h1>
		<?php endif; ?>
		<?php if ( get_the_author_meta( 'description' ) ) : ?>
			<div id="entry-author-info">
				<div id="author-avatar">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
				</div><!-- #author-avatar -->
				
				<div id="author-description">
					<h2><?php printf( __( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
					<?php the_author_meta( 'description' ); ?>
				</div><!-- #author-description	-->
			</div><!-- #entry-author-info -->
		<?php endif; ?>

		<?php 
			/* Se retrocede el posts para poder realizar el ciclo de listado de articulos */
			rewind_posts(); 
			get_template_part( 'loop', 'author' );
		?>
	</div><!-- #main -->
	<div id="sidebar" class="grid4">

		<?php get_sidebar(); ?>
	
	</div> <!-- #sidebar -->
</div><!-- .row -->

<?php get_footer(); ?>
