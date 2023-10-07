<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package farnoud
 */

get_header();
?>

	<main id="primary" class="site-main mainView mainExtraMargin">

		<?php if ( have_posts() ) : ?>

			<header class="page-header sectionHeading centeredHeading">
				<h1 class="page-title bigHeading">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'نتایج جستجو %s', 'farnoud' ),  get_search_query() );
					?>
				</h1>
				<div class="archive-description">هر آنچه که باید درباره <?php printf( get_search_query() ); ?> بدانید، در اختیار شماست</div>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			echo '<div class="archiveParent">';
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		<div class="archiveSourcePagination">
			<?php pagination_bar(); ?>
    	</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
