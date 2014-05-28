<?php
/**
 * Main Content Template
 *
 * Contains main looop
 *
 * @package      ${PACKAGE}
 * @license      license.txt
 * @copyright    ${YEAR} ${COMPANY}
 * @since        ${VERSION}
 *
 * Please do not edit this file. This file is part of the ${PACKAGE} Framework and all modifications
 * should be made in a child theme.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
responsive_entry_before(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php responsive_entry_top(); ?>

		<?php get_template_part( 'template-parts/post-meta' ); ?>

		<div class="post-entry">
			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			<?php else : ?>
				<div class="entry-content">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>
					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
					<?php
					wp_link_pages( array(
						               'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ),
						               'after'  => '</div>',
					               ) );
					?>
				</div><!-- .entry-content -->
			<?php endif; ?>
		</div>
		<!-- .post-entry -->

		<?php get_template_part( 'template-parts/post-data' ); ?>

		<?php responsive_entry_bottom(); ?>
	</article><!-- #post-## -->
<?php responsive_entry_after(); ?>