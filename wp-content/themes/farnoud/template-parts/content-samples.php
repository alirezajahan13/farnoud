<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farnoud
 */

?>

<a href="<?php echo esc_url(get_permalink()) ?>" id="post-<?php the_ID(); ?>" <?php post_class('blogCardItem sampleCardItem'); ?> data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
		<h2><?php echo get_the_title() ?></h2>
		<p>دانلود رایگان <?php echo get_the_title() ?></p>
    	<div class="readMore">لینک‌های دانلود</div>
</a><!-- #post-<?php the_ID(); ?> -->
