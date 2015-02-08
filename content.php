<?php
/**
 * The default template for displaying content
 *
 * @package starter_deliciae
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemtype="http://schema.org/BlogPosting" itemscope="itemscope">
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'starter_deliciae' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<span class="entry-date"><?php echo get_the_date(); ?></span>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'starter_deliciae' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		
		<?php the_tags( '<div class="post-tags">' . __( 'Tagged: ', 'starter_deliciae' ) , ', ', '</div>' ); ?>
		
		<div class="comments-link">
			<?php comments_popup_link( 
				 __( 'Leave a comment', 'starter_deliciae' ), 
				 __( '1 comment', 'starter_deliciae' ), 
				 __( '% comments', 'starter_deliciae' ) ); 
			?>
		</div>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->