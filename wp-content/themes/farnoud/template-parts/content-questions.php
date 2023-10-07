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
<article id="post-<?php the_ID(); ?>" <?php post_class('singleItem mainBox morePadding'); ?>>
	<div class="questionArchiveMeta">
		<a href="<?php echo get_permalink() ?>">
			<span><?php echo ($post->comment_count==0)?('بدون دیدگاه'):($post->comment_count.' دیدگاه') ?></span>
			<div class="answerStatusText <?php echo ($question_mb_answer_status==1) ? ('answerdStatus'):('notAnsweredStatus') ?>"><?php echo ($question_mb_answer_status==1) ? ('پاسخ داده شده'):('بدون پاسخ') ?></div>
		</a>
	</div>
	<div class="questionArchiveMain">
		<a href="<?php echo get_permalink() ?>">
			<h2><?php echo get_the_title() ?></h2>
			<?php echo theCustomExcerptContent(35) ?>
		</a>
		<div class="questionTags">
			<?php $getPostTags = wp_get_post_terms(get_the_id() , 'question-tag');
				foreach($getPostTags as $term){
					echo '<a href="https://farnoud.ir/question-tag/'.$term->slug.'/">'.$term->name.'</a>';
				}
			?>
		</div>
		<a href="<?php echo get_permalink() ?>" class="creationMeta"><span>مطرح شده توسط <?php echo $question_mb_answer_name ?></span><span> در <?php echo get_the_date() ?></span></a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
