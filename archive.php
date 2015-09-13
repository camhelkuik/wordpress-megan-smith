<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php
			the_archive_title('<h1>', '</h1>');
			the_archive_description('<div>', '</div>');
		?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part('template-parts/content'); ?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<p>No posts found.</p>

	<?php endif; ?>

<?php get_footer(); ?>
