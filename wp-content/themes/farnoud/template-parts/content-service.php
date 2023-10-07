<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farnoud
 */
$service_mb_service_boxes = get_field('service_mb_service_boxes');
$service_mb_service_intro = get_field('service_mb_service_intro');
$service_mb_service_checklists = get_field('service_mb_service_checklists');
$service_mb_service_faq = get_field('service_mb_service_faq');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('singleItem serviceSingleItem'); ?>>
	<div class="sectionHeading centeredHeading modifiedHeading">
        <h1 class="bigHeading"><?php echo get_the_title() ?></h1>
    </div>
	<div class="serviceIntroSection">
		<div class="serviceIntroImage"><?php the_post_thumbnail() ?></div>
		<div class="serviceIntroText">
			<p><?php echo $service_mb_service_intro ?></p>
			<br>
			<a href="" class="generalLinkButton linkLeft">درخواست مشاوره</a>
		</div>
	</div>
	<!-- <div class="serviceBoxIcon">
		<//?php //foreach($service_mb_service_boxes as $box){ ?>
			<div class="serviceBoxIconInner">
				<div class="serviceBoxIconIcon"><img src="<//?php echo $box['icon']['url'] ?>" alt="<//?php echo $box['icon']['alt'] ?>"></div>
				<h4><//?php echo $box['title'] ?></h4>
				<span><//?php echo $box['description'] ?></span>
			</div>
		<//?php } ?>
	</div> -->
	<div class="serviceCheckbox">
		<div class="sectionHeading centeredHeading innerSectionHeading">
			<h2>خدمات فرنود برای <?php echo get_the_title() ?></h2>
			<span class="subHeading"> گروه وکلای فرنود</span>
		</div>
		<div class="serviceCheckboxWrapper">
			<?php foreach($service_mb_service_checklists as $checklist){ ?>
				<li class="checkListItem "><?php echo $checklist['text'] ?></li>
			<?php } ?>
		</div>
	</div>
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
	<div class="cosultationSection">
		<div class="sectionHeading centeredHeading innerSectionHeading">
			<h2>درخواست مشاوره برای <?php echo get_the_title() ?></h2>
			<span class="subHeading">برای دریافت مشاوره حقوقی با ما در ارتباط باشید</span>
		</div>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><?php echo do_shortcode('[contact-form-7 id="28" title="فرم مشاوره"]') ?></div>
            <div class="sectionTwinItem" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><img src="<?php echo get_template_directory_uri() ?>/img/home/cosultation-banner-min.jpg?<?php echo _S_VERSION ?>" alt=""></div>
        </div>
    </div>
	<div class="servicesFAQ">
	<div class="sectionHeading centeredHeading innerSectionHeading">
		<h2>سوالات متداول <?php echo get_the_title() ?></h2>
		<span class="subHeading">شابد برای شما هم این سوالات پیش آمده باشد</span>
	</div>
	<div class="faqWrapper">
		<?php foreach($service_mb_service_faq as $faq){ ?>
			<div class="faqItem">
				<div class="faqQuestion closedQuestionTab"><?php echo $faq['question'] ?></div>
				<div class="faqAnswer"><?php echo $faq['answer'] ?></div>
			</div>
		<?php } ?>	
	</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->