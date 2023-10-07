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
                <p>انتخاب وکیل مناسب موضوعی زمان‌بر است و اعتماد یا عدم اعتماد جهت سپردن کارها، سوال بسیاری از مردم است. ما در دادصا کوشیده‌ایم با تیمی قدرتمند از وکلای برجسته در زمینه‌های مختلف حقوقی، نیاز شما عزیزان را برآورده کنیم. شما می‌توانید با خیال راحت مشکلات حقوقی خود را با وکلای درجه یک گروه وکلای دادصا درمیان بگذارید و خیال‌تان در قبال کسب بهترین نتیجه وراحت باشد.</p>
                <p>برای پیدا کردن بهترین وکیل حقوقی و سپردن کار خود به تیمی حرفه‌ای که صادقانه برای شما تلاش می‌کنند می‌توانید با دادصا تماس بگیرید و از مشاوره رایگان متخصصان این حوزه بهره‌مند شوید</p>
            </div>
	    </div>
        <?php the_archive_description( '<div class="taxServiceCatDesc">', '</div>' ); ?>
        <div class="sectionHeading centeredHeading innerSectionHeading">
			<h2>خدمات دادصا برای <?php echo $currentServiceCat->name ?></h2>
			<span class="subHeading">توضیحات زیر عنوان برای هدینگ مورد نظر</span>
		</div>
        <div class="archiveParent serviceCatArchiveParent">
        <?php while(have_posts()):the_post();
            get_template_part('template-parts/content','services');
        endwhile; ?>
        </div>
        
        <div class="sectionHeading centeredHeading innerSectionHeading">
			<h2>درخواست مشاوره</h2>
			<span class="subHeading">توضیحات زیر عنوان برای هدینگ مورد نظر</span>
		</div>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><?php echo do_shortcode('[contact-form-7 id="28" title="فرم مشاوره"]') ?></div>
            <div class="sectionTwinItem" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><img src="<?php echo get_template_directory_uri() ?>/img/home/cosultation-banner-min.jpg?<?php echo _S_VERSION ?>" alt=""></div>
        </div>
    </div>
    
</main>
<?php
get_footer();