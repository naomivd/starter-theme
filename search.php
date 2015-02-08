<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package starter_deliciae
 */

get_header(); ?>

<section id="primary" itemtype="http://schema.org/Blog" itemscope="itemscope" itemprop="mainContentOfPage" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h2 class="entry-title"><?php printf( __( 'Search Results for: %s', 'starter_deliciae' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		</header>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				get_template_part( 'content');
			?>

		<?php endwhile; ?>

		<?php get_template_part( 'inc/pagination' ); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>