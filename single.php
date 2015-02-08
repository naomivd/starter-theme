<?php
/**
 * The template for displaying all single posts.
 *
 * @package deliciae_revamped
 */

get_header(); ?>

<section id="primary" itemtype="http://schema.org/Blog" itemscope="itemscope" itemprop="mainContentOfPage" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
