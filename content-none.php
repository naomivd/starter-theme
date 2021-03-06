<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package starter_deliciae
 */
?>

<article class="post no-results not-found" itemtype="http://schema.org/BlogPosting" itemscope="itemscope">
	<header class="entry-header">
		<h2 class="entry-title"><?php _e( 'Nothing Found', 'starter_deliciae' ); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( is_archive() ) : ?>
		
			<p><?php _e( 'There are no published posts for this archive. Try searching using keywords instead.', 'starter_deliciae' ); ?></p>
			<?php get_search_form(); ?>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'No matches were found for your search terms. Please try again with different keywords.', 'starter_deliciae' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps a search would help?', 'starter_deliciae' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .entry-content -->
</article>