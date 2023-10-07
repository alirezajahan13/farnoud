<?php 

get_header();
?>

<main id="primary" class="site-main mainView">

<?php if ( have_posts() ) : ?>
    <header class="page-header sectionHeading centeredHeading modifiedHeading">
        <h1 class="page-title bigHeading">نمونه‌های دادصا</h1>
    </header><!-- .page-header -->
    <div class="sourceCats">
        <?php
        $sampleCats = get_terms( array(
            'taxonomy' => 'sample-cat',
            'hide_empty' => false
        ) );
        
        if ( !empty($sampleCats) ) :
            foreach ( $sampleCats as $cat ) {
                echo '<a class="generalLinkButton inlinedLink secondaryLinkButton" href="'.esc_url( get_term_link( $cat ) ).'">' . $cat->name . '</a>';
            }
        endif;
        ?>
    </div>
    <div class="sampleArchiveParent">
    <?php
    /* Start the Loop */
    while ( have_posts() ) :
        the_post();

        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', 'samples' );

    endwhile;

    the_posts_navigation();

else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?>
</div>
</main><!-- #main -->

<?php
get_footer();