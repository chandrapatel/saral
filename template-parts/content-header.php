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
	<header class="entry-header">
		<?php
		the_post_thumbnail();
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) {
		?>
			<div class="entry-meta">
				<?php saral_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php
		}
		?>
	</header><!-- .entry-header -->

	<?php //saral_post_thumbnail(); ?>

	<footer class="entry-footer">
		<?php saral_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
