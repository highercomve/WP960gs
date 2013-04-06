<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
	</div><!-- #nav-above -->
<?php endif; ?>

<div class="row">

<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>

	<div class="articulo grid3">
		<div class="imagen-destacada">
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail("thumbnail") ?>
			</a>
		</div>
		<div class="detalle">
			<h2>
					<a href="<?php the_permalink() ?>">
						<?php the_title() ?>
					</a>
				</h2>
				<div class="author">
					<?php the_author_posts_link() ?>
				</div>
				<div class="hora">
					<?php the_time() ?> / <?php the_time(get_option('date_format')); ?>
				</div>
				<div class="resumen">
					<?php the_excerpt() ?>
				</div>
		</div>
	</div>

<?php endwhile; else: ?>

	<div class="nohaynada">
		<h2>
			Esta pagina esta vacia!!!
		</h2>
	</div>

<?php endif; ?>

</div>