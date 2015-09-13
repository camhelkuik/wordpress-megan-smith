<?php
/**
 * The template for displaying all single posts.
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part('template-parts/content'); ?>

		<?php the_post_navigation(); ?>

	<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
