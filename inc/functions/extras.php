<?php

/*--------------------------------------------------------------
Year Copyright in Footer
--------------------------------------------------------------*/

function deliciae_copyright() {
global $wpdb;
$copyright_dates = $wpdb->get_results("
	SELECT YEAR(min(post_date_gmt)) AS firstdate, YEAR(max(post_date_gmt)) AS lastdate FROM
	$wpdb->posts WHERE post_status = 'publish' ");
$output = '';
	if($copyright_dates) {
		$copyright = "&copy; " . $copyright_dates[0]->firstdate;
	if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
		$copyright .= '-' . $copyright_dates[0]->lastdate;
	}
	$output = $copyright;
	}
	return $output;
}


/*--------------------------------------------------------------
Custom Avatar
--------------------------------------------------------------*/
if ( !function_exists('cake_addgravatar') ) {
	function cake_addgravatar( $avatar_defaults ) {
		$myavatar = get_template_directory_uri() . '/images/avatar.png';
		$avatar_defaults[$myavatar] = 'avatar';
		return $avatar_defaults;
	}
	add_filter( 'avatar_defaults', 'cake_addgravatar' );
}

if ( ! function_exists( 'the_posts_navigation' ) ) :
/*--------------------------------------------------------------
Post Navigation Main Page
--------------------------------------------------------------*/
function the_posts_navigation() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation posts-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Posts navigation', 'deliciae_revamped' ); ?></h2>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( 'Older posts', 'deliciae_revamped' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts', 'deliciae_revamped' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'the_post_navigation' ) ) :
/*--------------------------------------------------------------
Post Navigation Single Page
--------------------------------------------------------------*/
function the_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Post navigation', 'deliciae_revamped' ); ?></h2>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', '%title' );
				next_post_link( '<div class="nav-next">%link</div>', '%title' );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

?>