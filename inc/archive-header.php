<?php 
/**
 * Archive header
 *
 * @package starter_deliciae
 */
?>
<header class="archive-header">
	<h1 class="archive-title">
		<?php
			// Formatting based on the Underscores theme
			// https://github.com/Automattic/_s/blob/master/archive.php
			if ( is_category() ) :
				single_cat_title();

			elseif ( is_tag() ) :
				single_tag_title();

			elseif ( is_author() ) :
				printf( __( 'Author: %s', 'starter_deliciae' ), '<span class="vcard">' . get_the_author() . '</span>' );

			elseif ( is_day() ) :
				printf( __( 'Day: %s', 'starter_deliciae' ), '<span>' . get_the_date() . '</span>' );

			elseif ( is_month() ) :
				printf( __( 'Month: %s', 'starter_deliciae' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'starter_deliciae' ) ) . '</span>' );

			elseif ( is_year() ) :
				printf( __( 'Year: %s', '_s' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'starter_deliciae' ) ) . '</span>' );
			else :
				_e( 'Archives', 'starter_deliciae' );

			endif;
		?>
	</h1>
</header><!-- .page-header -->
