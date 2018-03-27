<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Saral
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php saral_post_thumbnail(); ?>
	
	<header class="entry-header">
		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) {
		?>
			<div class="entry-meta">
				<?php saral_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php
		}
		?>
	</header><!-- .entry-header -->

	<footer class="entry-footer">
		<?php saral_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
