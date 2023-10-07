<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farnoud
 */
$question_mb_answer_status = get_field('question_mb_answer_status');
$question_mb_answer_name = get_field('question_mb_answer_name');
$question_mb_answer_gender = get_field('question_mb_answer_gender');
?>
<br><br>
<article id="post-<?php the_ID(); ?>" <?php post_class('singleItem'); ?>>
	<div class="sectionHeading centeredHeading modifiedHeading">
		<h1 class="bigHeading" itemprop="name"><?php echo get_the_title() ?></h1>
	</div>
	<div class="questionAuthor">
		<?php if($question_mb_answer_gender == 1){ ?>
			<svg width="40px" height="40px" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m173.4 296.7 85 153.8 85.1-153.8c63.8 12.2 93.5 3.8 97.6 70.4v57.8a249 249 0 0 1-365.9 0v-31.2c0-3.3.1-6.3.1-9 0-85.6 29.5-75.1 98.1-88Zm9-142.8c-8.1-3.3-20.3-2.2-18.2 10.6 5.6 18.9 2.3 33.7 20.1 30.9 7 48.3 37.4 84.8 73.9 84.8s66.9-36.5 73.8-84.8c17.9 2.8 14.5-12 20.1-30.9 2.1-12.8-10-13.9-18.2-10.6 1.3-29.3 9.9-81.1-35.3-80.6-14.1-28.7-58.7-15-82.3-5.1-33.5 14.1-39.4 38-33.9 85.7Z" fill="#4d4d4d" fill-rule="evenodd"/><path d="m270.5 349.3 7.6-13.1 7.5-13.1a14.3 14.3 0 0 0-12.3-21.4H243a14.3 14.3 0 0 0-12.3 21.4l7.6 13.1 7.5 13.1a14.3 14.3 0 0 0 24.7 0Z" fill="#4d4d4d" fill-rule="evenodd"/><path d="m270.5 349.3 7.6 75.9 7.5 75.8.3 2.4a236.5 236.5 0 0 1-28 1.6 247.5 247.5 0 0 1-27.4-1.5 21.1 21.1 0 0 1 .2-2.5l7.6-75.8 7.5-75.9c2.6-26.3 7.1-41.3 12.4-41.3s9.7 15 12.3 41.3Z" fill="#4d4d4d" fill-rule="evenodd"/><path d="M258.2 7C120.6 7 9.2 118.5 9.2 256s111.4 249 249 249 249-111.5 249-249S395.7 7 258.2 7Zm0 19.2C131.3 26.2 28.4 129.1 28.4 256s102.9 229.8 229.8 229.8S487.9 382.9 487.9 256 385.1 26.2 258.2 26.2Z" fill="#4d4d4d" fill-rule="evenodd"/></svg>
		<?php } else{ ?>
			<svg width="40px" height="40px" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 7C118.5 7 7 118.5 7 256s111.5 249 249 249 249-111.5 249-249S393.5 7 256 7Zm0 19.2C129.1 26.2 26.2 129.1 26.2 256S129.1 485.8 256 485.8 485.8 382.9 485.8 256 382.9 26.2 256 26.2Z" fill="#4d4d4d" fill-rule="evenodd"/><path d="M249.4 197.2h-26.1c-9.2 0-17.1 2.6-21.7 7.2s-4.7 9.7 0 14.2l13.3 13.1 13.3 13.1-17.2 49.3c20.9 12.4 39.1 43.7 45 56.2a10.1 10.1 0 0 0 1.6-3.3c7.2-14.1 24.1-41.5 43.4-52.9l-17.2-49.3 13.3-13.1 13.3-13.1c4.7-4.5 4.7-9.7 0-14.2s-12.5-7.2-21.7-7.2h-39.3Z" fill="#4d4d4d" fill-rule="evenodd"/><path d="M377.5 248.1c-9.7 19.9-78.4 21.6-121.5 21.7s-111.8-1.8-121.5-21.7c-5.2.6 25.2-35.6 30.5-97.2 3.7-44.7 26.4-89.3 91-94.8 64.6 5.5 87.3 50.1 91 94.8 5.3 61.6 35.7 97.8 30.5 97.2Zm-172 48.6c-9.5 8.4-17.4 59.9 11.2 51.7 20.6-6 32.6 14.6 39.3 25.7V505a247.9 247.9 0 0 1-173.1-70.1l10.6-70.3c3.7-24.7 7.1-35.6 22-42.1 23.9-10.4 63.8-19.4 90-25.8Zm101 0c9.5 8.4 17.4 59.9-11.2 51.7-20.6-6-32.6 14.6-39.3 25.7V505a247.9 247.9 0 0 0 173.1-70.1l-10.6-70.3c-3.7-24.7-7.1-35.6-22-42.1-23.9-10.4-63.8-19.4-90-25.8Z" fill="#4d4d4d" fill-rule="evenodd"/></svg>
		<?php } ?>
		<div class="questionAuthorMeta">
			<span><?php echo $question_mb_answer_name ?></span>
			<span><?php echo get_the_date() ?></span>
		</div>
		<div class="answerStatusText <?php echo ($question_mb_answer_status==1) ? ('answerdStatus'):('notAnsweredStatus') ?>"><?php echo ($question_mb_answer_status==1) ? ('پاسخ داده شده'):('بدون پاسخ') ?></div>
	</div>
	<?php the_post_thumbnail() ?>

	<div itemprop="text" class="entry-content questionContent">
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
		<div class="questionTags">
			<?php $getPostTags = wp_get_post_terms(get_the_id() , 'question-tag');
				foreach($getPostTags as $term){
					echo '<a href="https://farnoud.ir/question-tag/'.$term->slug.'/">'.$term->name.'</a>';
				}
			?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
