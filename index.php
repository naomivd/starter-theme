<?php
/**
 * Main Template File
 * 
 * This file is used to display a page when nothing more specific matches a query.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter_deliciae
 */

get_header(); ?>

<section id="primary" itemtype="http://schema.org/Blog" itemscope="itemscope" itemprop="mainContentOfPage" role="main">

	<?php if ( have_posts() ) : ?>
				
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>