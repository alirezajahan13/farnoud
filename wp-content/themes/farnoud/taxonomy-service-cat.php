<?php 
get_header();
$currentServiceCat = get_queried_object();
?>
<main id="primary" class="site-main mainView mainBox morePadding mainExtraMargin">
    <div class="singleItem serviceSingleItem taxServiceCat">
        <div class="sectionHeading centeredHeading">
            <h1 class="bigHeading"><?php echo $currentServiceCat->name ?></h1>
            <span class="subHeading"><?php echo get_field('service_archive_mb_description','service-cat_'.$currentServiceCat->term_id) ?></span>
        </div>
        <div class="serviceIntroSection">
            <div class="serviceIntroImage"><img src="<?php echo get_field('service_archive_mb_image','service-cat_'.$currentServiceCat->term_id)['url'] ?>?<?php echo _S_VERSION ?>"></div>
            <div class="serviceIntroText">
                <p>
                    اطلاعات و تجربه وکلا در مسائل حقوقی، مهم‌ترین ابزار حل مشکلات حقوقی افراد است. انتخاب وکیل مناسب نیز امری حیاتی برای رسیدن به حل مسائل حقوقی است. در گروه وکلای فرنود، با دقت ویژه، تیم وکلایی با تخصص برجسته و تجربه گسترده را جمع‌آوری کرده‌ایم. این تیم به شما اطمینان می‌دهد که پرونده‌های شما به دقت و با موفقیت حل شوند. شما می‌توانید با خیال راحت مشکلات حقوقی خود را به ما انتقال دهید و از تخصص تیم ما بهره‌مند شوید. <br>گروه وکلای فرنود، با رهبری فرنود زارعی، دارای بیش از 17 سال تجربه موفق در حوزه وکالت در پرونده‌های حساس ملکی و قراردادی، آماده‌ی ارائه خدمات حقوقی با تخصص بالا به شما عزیزان است.
                </p>
            </div>
	    </div>
        <?php the_archive_description( '<div class="taxServiceCatDesc">', '</div>' ); ?>
        <!-- <div class="sectionHeading centeredHeading innerSectionHeading">
			<h2>خدمات فرنود برای <?php //echo $currentServiceCat->name ?></h2>
			<span class="subHeading">لورم ایپسوم متن ساختگی با</span>
		</div> -->
        <!-- <div class="archiveParent serviceCatArchiveParent">
        <?php //while(have_posts()):the_post();
            //get_template_part('template-parts/content','services');
        //endwhile; ?>
        </div> -->
        
        <div class="sectionHeading centeredHeading innerSectionHeading">
			<h2>درخواست مشاوره</h2>
			<span class="subHeading">برای دریافت مشاوره حقوقی با ما در ارتباط باشید</span>
		</div>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><?php echo do_shortcode('[contact-form-7 id="28" title="فرم مشاوره"]') ?></div>
            <div class="sectionTwinItem" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><img src="<?php echo get_template_directory_uri() ?>/img/home/cosultation-banner-min.jpg?<?php echo _S_VERSION ?>" alt=""></div>
        </div>
    </div>
    
</main>
<?php
get_footer();