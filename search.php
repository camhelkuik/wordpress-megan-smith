<?php
/**
 * The template for displaying search results pages.
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<h1>Results for: <?php echo get_search_query(); ?></h1>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part('template-parts/content'); ?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

    <p>No results.</p>

	<?php endif; ?>

<?php get_footer(); ?>
