<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farnoud
 */
$sample_mb_sample_boxes = get_field('sample_mb_sample_boxes');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('singleItem singleSample'); ?>>
	<div class="sectionHeading centeredHeading modifiedHeading">
        <h1 class="bigHeading"><?php echo get_the_title() ?></h1>
    </div>
	<div class="entry-content mainBox">
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
        <div class="sampleDownloadBox">
            <?php
                foreach($sample_mb_sample_boxes as $box){
                    ?>
                    <div class="sampleLinkGp">
                    <span class="downloadBoxTitle"><?php echo $box['title']; ?></span>
                    <?php
                    foreach($box['links'] as $link){
                        if( $link ):
                            // Extract variables.
                            $url = $link['file']['url'];
                            $title = $link['file']['title'];
                            ?>
                            <a href="<?php echo esc_attr($url); ?>">
                            <svg fill="#000000" height="20px" width="20px" id="Layer_1" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                <path class="cls-1" d="M14,9v5H2V9H3v4H13V9ZM8.018,11,11,5.1,8.99643,6.41233,9,2H7V6.38664L5,5.1Z"/>
                            </svg>
                                <span><?php echo esc_html($title); ?></span>
                            </a>
                        <?php endif;
                    }
                    ?>
                    </div>
                    <?php
            } ?>
        </div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
