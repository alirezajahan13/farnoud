<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farnoud
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('singleItem'); ?>>
	<div class="sectionHeading centeredHeading modifiedHeading">
        <h1 class="bigHeading"><?php echo get_the_title() ?></h1>
    </div>
	<div class="singleMeta">
		<div class="singleMetaItem">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 83 83" style="enable-background:new 0 0 83 83" xml:space="preserve"><path d="M41.5 1.1C19.2 1.1 1.1 19.2 1.1 41.5c0 22.3 18.1 40.4 40.4 40.4s40.4-18.1 40.4-40.4c0-22.3-18.1-40.4-40.4-40.4zm0 75c-19.1 0-34.6-15.5-34.6-34.6S22.4 6.9 41.5 6.9s34.6 15.5 34.6 34.6-15.5 34.6-34.6 34.6zm11.7-30.9-8.8.1V22.5c0-1.6-1.3-2.9-2.9-2.9-1.6 0-2.9 1.3-2.9 2.9v26.3c0 .1.1.2.1.4 0 .1 0 .1.1.2s.1.2.2.3c0 0 .1.1.1.2l.3.3.1.1.3.3.1.1c.1.1.2.1.4.2 0 0 .1 0 .1.1.1.1.3.1.5.1h.1c.2 0 .4.1.6.1l11.7-.2c1.6 0 2.9-1.4 2.9-3-.1-1.5-1.4-2.8-3-2.8z"/></svg>
			<span><?php echo get_the_date() ?></span>
		</div>
		<div class="singleMetaItem">
			<svg xmlns="http://www.w3.org/2000/svg" width="330" height="330" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330" xml:space="preserve"><path d="M77.5 179.6v58.3c0 8.1 6.5 14.6 14.6 14.6h58.3c3.9 0 7.6-1.5 10.3-4.3L321.2 87.8c5.7-5.7 5.7-14.9 0-20.6L262.8 8.8c-5.7-5.7-14.9-5.7-20.6 0L81.8 169.3c-2.8 2.7-4.3 6.4-4.3 10.3zm29.2 6L252.5 39.8l37.7 37.7-145.8 145.8h-37.7v-37.7zm204.2-35.2c-8.1 0-14.6 6.5-14.6 14.6v131.3H33.7V33.7H165c8.1 0 14.6-6.5 14.6-14.6S173.1 4.6 165 4.6H19.1C11 4.6 4.5 11.1 4.5 19.2v291.7c0 8.1 6.5 14.6 14.6 14.6h291.7c8.1 0 14.6-6.5 14.6-14.6V165c0-8.1-6.5-14.6-14.5-14.6z"/></svg>
			<span><?php echo get_the_author() ?></span>
		</div>
	</div>
	<?php the_post_thumbnail() ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'farnoud' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'farnoud' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
