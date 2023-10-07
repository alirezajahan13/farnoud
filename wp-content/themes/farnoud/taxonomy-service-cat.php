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
                <p>علم و آگاهی وکلا در زمینه مسائل حقوقی، راهی نجات و امیدبخش برای حل مشکلات حقوقی مردم است. اما انتخاب وکیل مناسب برای بسیاری از مردم، مسئله بسیار مهمی جهت سپردن کارها است. ما در دادصا، با دقت لازم در انتخاب تیم وکلای خود، تیم حرفه ای با ویژگی های برجسته تشکیل داده ایم تا تضمینی باشد برای موفقیت پرونده ‌های شما.
                شما می‌توانید با خیال راحت مشکلات حقوقی خود را با وکلای درجه یک گروه وکلای دادصا درمیان بگذارید تا در سریع ترین زمان ممکن، با کمترین ضرر و زیان مالی و به دور از کوچک ترین آسیبی، نیاز شما عزیزان را در زمینه های مختلف حقوقی برآورده کنیم.</p>
                <p>گاهی عدم کمک گرفتن از یک وکیل به بهانه‌ های واهی، اعم از حق‌ الوکاله‌ های بالا یا اعتقاد نداشتن به اثر حضور وکلا، می‌ تواند خسارت‌ های جبران‌ ناپذیری در پی داشته باشد.</p>
            </div>
	    </div>
        <?php the_archive_description( '<div class="taxServiceCatDesc">', '</div>' ); ?>
        <div class="sectionHeading centeredHeading innerSectionHeading">
			<h2>خدمات فرنود برای <?php echo $currentServiceCat->name ?></h2>
			<span class="subHeading">لورم ایپسوم متن ساختگی با</span>
		</div>
        <div class="archiveParent serviceCatArchiveParent">
        <?php while(have_posts()):the_post();
            get_template_part('template-parts/content','services');
        endwhile; ?>
        </div>
        
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