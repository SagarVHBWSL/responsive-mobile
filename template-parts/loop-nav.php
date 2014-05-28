<?php
/**
 * Navigation Loop Template
 *
 * The template is display the navigation at the bottom of the loop
 *
 * @package      ${PACKAGE}
 * @license      license.txt
 * @copyright    ${YEAR} ${COMPANY}
 * @since        ${VERSION}
 *
 * Please do not edit this file. This file is part of the ${PACKAGE} Framework and all modifications
 * should be made in a child theme.
 */

// Don't print empty markup if there's nowhere to navigate.
$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
$next     = get_adjacent_post( false, '', false );

if ( ! $next && ! $previous ) {
	return;
}
?>
<nav class="navigation post-navigation" role="navigation">
	<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'responsive' ); ?></h1>
	<div class="nav-links">
		<?php
			previous_post_link( '<div class="nav-previous">%link</div>', '<span class="meta-nav">' . __( '&larr;', 'responsive' ) . '</span> %title' );
			next_post_link( '<div class="nav-next">%link</div>', '%title <span class="meta-nav">' . __( '&rarr;', 'responsive' ) . '</span>' );
		?>
	</div><!-- .nav-links -->
</nav><!-- .navigation -->