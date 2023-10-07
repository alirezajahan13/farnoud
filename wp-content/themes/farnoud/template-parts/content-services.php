<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farnoud
 */

?>

<a href="<?php echo esc_url(get_permalink()) ?>" id="post-<?php the_ID(); ?>" <?php post_class('blogCardItem'); ?> data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
	<?php the_post_thumbnail() ?>
	<?php if ( is_home() && ! is_front_page() ){ ?>
		<h2><?php echo get_the_title() ?></h2>
	<?php } else{ ?>
		<h3><?php echo get_the_title() ?></h3>
	<?php } ?>
	<?php echo the_excerpt() ?>
</a><!-- #post-<?php the_ID(); ?> -->
