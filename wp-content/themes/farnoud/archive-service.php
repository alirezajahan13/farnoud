<?php 

get_header();
?>
<div class="archiveServiceMainWrapper mainView mainBox morePadding mainExtraMargin">
        <div class="sectionHeading centeredHeading">
            <h1 class="bigHeading">خدمات ما</h1>
            <span class="subHeading">گروه وکلای فرنود، حلقه ارتباط مستقیم شما با عدالت</span>
        </div>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem aos-init aos-animate" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><img src="<?php bloginfo( 'template_directory' ) ?>/img/servicees.jpg" alt=""></div>
            <div class="sectionTwinItem aos-init aos-animate" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <p>
                گروه وکلای فرنود با بیش از 17 سال تجربه درخشان در زمینه وکالت در پرونده‌های حقوقی متنوع، از جمله مسائل ملکی، قراردادها، امور مرتبط با دیوان عدالت اداری و شهرداری، به عنوان همراه و مشاور قانونی شما در راه حل مسائل حساس و حقوقی در کنار شما قرار می‌گیرد. تجربه و تخصص ما در موارد متنوع حقوقی، از جمله پرونده‌های کیفری و دیگر امور حقوقی، تضمین می‌کند که شما با یک تیم قانونی با اعتماد به نفس و آمادگی برای مواجهه با چالش‌های حقوقی، از ما حمایت کامل خواهید داشت. ما به رسیدگی دقیق به پرونده‌های حقوقی شما، تحلیل دقیق موارد، و ارائه راهکارهای قانونی مناسب تمرکز داریم تا به حل مسائل حقوقی شما بپردازیم. تیم ما در تمامی مراحل پرونده‌ با شما همراهی خواهد کرد تا اطمینان حاصل شود که حقوق شما به درستی محافظت می‌شود و بهترین نتیجه حاصل می‌شود. با گروه وکلای فرنود، به امور حقوقی با آرامش و اطمینان نگاه کنید.
                </p>
                <div class="twinListParent">
                    <li class="marginedMedium checkListItem">دعاوی ملکی و ثبتی</li>
                    <li class="marginedMedium checkListItem">دعاوی سرقفلی</li>
                    <li class="marginedMedium checkListItem">تنظیم قراردادها</li>
                    <li class="marginedMedium checkListItem">دعاوی شهرداری</li>
                    <li class="marginedMedium checkListItem">دعاوی دیوان عدالت اداری</li>
                    <li class="marginedMedium checkListItem">دعاوی مربوط به اراضی ملی</li>
                </div>
                <a href="https://farnoud.ir/request/" class="generalLinkButton linkSpace linkRight">درخواست مشاوره</a>
            </div>
        </div>
        <div class="archiveServiceContent">
            <p>
            گروه وکلای فرنود با بیش از 17 سال تجربه وکالت در تمامی پرونده‌های ملکی و حقوقی در خدمت شما عزیزان خواهد بود.
انواع خدمات ملکی، کیفری و حقوقی و در انواع موضوعات سرقفلی، شهرداری، دیوان عدالت اداری و... در گروه وکلای فرنود پذیرفته می‌شود. روند همکاری در انواع این زمینه‌ها نیازمند یک جلسه مشاوره به صورت حضوری، تلفنی یا آنلاین با وکلای گروه فرنود است تا پرونده شما از هر نظر مورد بررسی قرار بگیرد و در رابطه با پذیرش وکالت، تمام جوانب سنجیده شود. همچنین اگر تنها قصد دریافت مشاوره در موضوعات خاص را دارید، این امکان برای شما عزیزان فراهم شده است. اگر نمی‌دانید موضوع پرونده شما در کدام دسته‌بندی قرار دارد، می‌توانید از این قسمت اطلاعات خوبی در رابطه با مشکل خود کسب نمایید.

            </p>
        </div>
        <div class="sectionHeading centeredHeading innerSectionHeading">
			<h2>خدمات گروه وکلای فرنود</h2>
			<span class="subHeading">پذیرش کلیه دعاوی ملکی، کیفری و حقوقی</span>
		</div>
        <div class="serviceImgParent">
            <?php
            $serviceCatTerms = get_terms( array(
                'taxonomy' => 'service-cat',
                'hide_empty' => false,
            ) );
            foreach($serviceCatTerms as $term){
            ?>
                <a href="<?php echo home_url().'/service-cat/'.$term->slug.'/' ?>" class="serviceImgItem aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                    <img src="<?php echo get_field('service_archive_mb_image','service-cat_'.$term->term_id)['url'] ?>?<?php echo _S_VERSION ?>" alt="">
                    <h3><?php echo $term->name ?></h3>
                    <span><?php echo get_field('service_archive_mb_description','service-cat_'.$term->term_id) ?></span>
                </a>
            <?php } ?>
            
        </div>
        <div class="cosultationSection">
		<div class="sectionHeading centeredHeading innerSectionHeading">
			<h2>درخواست مشاوره</h2>
			<span class="subHeading">در کمتر از 24 ساعت با شما تماس خواهیم گرفت</span>
		</div>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><?php echo do_shortcode('[contact-form-7 id="28" title="فرم مشاوره"]') ?></div>
            <div class="sectionTwinItem" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><img src="<?php echo get_template_directory_uri() ?>/img/home/cosultation-banner-min.jpg?<?php echo _S_VERSION ?>" alt=""></div>
        </div>
    </div>
</div>
<?php
get_footer();