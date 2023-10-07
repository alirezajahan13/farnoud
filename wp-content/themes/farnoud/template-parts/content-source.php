<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farnoud
 */
$source_mb_texticons = get_field('source_mb_texticons');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('singleItem singleSource'); ?>>
	<div class="sectionHeading centeredHeading modifiedHeading">
        <h1 class="bigHeading"><?php echo get_the_title() ?></h1>
    </div>
	<div class="entry-content mainBox">
        <?php foreach($source_mb_texticons as $texticon){ ?>
        <div class="sourceIconText">
            <span class="sourceIcon" ><?php echo $texticon['icon'] ?></span>
            <span class="sourceText" ><?php echo $texticon['text'] ?></span>
        </div>
        <?php } ?>
        <div class="sourceDes">
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
		?>

        </div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
