<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farnoud
 */

get_header();
?>

	<main id="primary" class="site-main mainView mainExtraMargin">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<div class="sectionHeading centeredHeading">
        			<h1 class="bigHeading">بلاگ</h1>
        			<span class="subHeading">از آخرین اخبار و مطالب حقوقی مطلع شوید</span>
    			</div>
				<div class="loopAllCategory">
				<?php
				$categories = get_terms( array(
					'taxonomy' => 'category',
					'hide_empty' => true,
					'exclude'=>array('1')
				) );
				foreach($categories as $category) {
				echo '<a class="generalLinkButton inlinedLink secondaryLinkButton" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
				}
				?>
				</div>

				<?php
			endif;
			echo '<div class="archiveParent">';
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archive' );

			endwhile;

			// the_posts_navigation();
			echo '</div>';
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<div class="archiveSourcePagination">
			<?php pagination_bar(); ?>
    	</div>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
