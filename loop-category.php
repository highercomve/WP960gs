<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
	</div><!-- #nav-above -->
<?php endif; ?>

<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<div class="articulos row pinterest_container">


<!-- Inicio de ciclo normal de Wordpress -->
<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
	<!-- Ciclo del index -->
	<article class="articulo grid9 pinterest_box">
		<header>
			<div class="thumbnail-articulo grid3">
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
					<?php the_post_thumbnail("large"); ?>
				</a>
			</div> <!-- .thumbnail-articulo -->
			<div class="clear"></div>
			<h3 class="titulo-articulo">
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
					<?php the_title(); ?>
				</a>
			</h3> <!-- .articulo-titulo -->

			<small class="meta">
					<?php the_time('F jS, Y') ?>
					, escrito por: 
					<?php the_author_posts_link() ?>
			</small> <!-- .meta -->
		</header>
		<div class="resumen-articulo">
			<?php the_excerpt(); ?>
		</div> <!-- .resumen-titulo -->
		<a class="btn" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
			Ver mas
		</a>
		<footer>
			<div class="postmetadata meta">
        Archivado en: <?php the_category(' / '); ?>
      </div>
		</footer>
	</article> <!-- .articulo -->
<?php endwhile; endif; ?>

</div> <!-- .articulos -->