<?php 

get_header();
?>
<div class="archiveServiceMainWrapper mainView mainBox morePadding mainExtraMargin">
        <div class="sectionHeading centeredHeading">
            <h1 class="bigHeading">خدمات ما</h1>
            <span class="subHeading">یک تیم حرفه‌ای و مجرب از وکلای پایه یک دادگستری، همراه شماست</span>
        </div>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem aos-init aos-animate" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><img src="https://dummyimage.com/850x600/000000/fff.jpg" alt=""></div>
            <div class="sectionTwinItem aos-init aos-animate" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <p>علم و آگاهی وکلا در زمینه مسائل حقوقی، راهی نجات و امیدبخش برای حل مشکلات حقوقی مردم است. اما انتخاب وکیل مناسب برای بسیاری از مردم، مسئله بسیار مهمی جهت سپردن کارها است. ما در دادصا، با دقت لازم در انتخاب تیم وکلای خود، تیم حرفه ای با ویژگی های برجسته تشکیل داده ایم تا تضمینی باشد برای موفقیت پرونده ‌های شما. شما می‌توانید با خیال راحت مشکلات حقوقی خود را با وکلای درجه یک گروه وکلای دادصا درمیان بگذارید تا در سریع ترین زمان ممکن، با کمترین ضرر و زیان مالی و به دور از کوچک ترین آسیبی، نیاز شما عزیزان را در زمینه های مختلف حقوقی برآورده کنیم.

گاهی عدم کمک گرفتن از یک وکیل به بهانه‌ های واهی، اعم از حق‌ الوکاله‌ های بالا یا اعتقاد نداشتن به اثر حضور وکلا، می‌ تواند خسارت‌ های جبران‌ ناپذیری در پی داشته باشد.</p>
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
            <p>اگر به دنبال وکیل پایه یک دادگستری هستید، احتمالا عبارت گروه وکلا زیاد به گوش شما خورده است. گروه وکلای دادصا با بهره‌مندی از 9 وکیل خبره و مجرب پایه یک دادگستری، در تمامی پرونده‌های ملکی و حقوقی در خدمت شما عزیزان خواهد بود. </p>
            <p>انواع خدمات ملکی، کیفری و حقوقی و در انواع موضوعات سرقفلی، شهرداری، دیوان عدالت اداری و .... در دادصا پذیرش خواهد شد. روند همکاری در انواع این زمینه‌ها نیازمند یک جلسه مشاوره به صورت حضوری، تلفنی یا آنلاین با وکلای گروه دادصا است تا پرونده شما از هر نظر مورد بررسی قرار بگیرد و در رابطه با پذیرش وکالت، تمام جوانب سنجیده شود. همچنین اگر تنها قصد دریافت مشاوره در موضوعات خاص را دارید، این امکان برای شما عزیزان فراهم شده است. اگر نمی‌دانید موضوع پرونده شما در کدام دسته بندی قرار دارد، می‌توانید از این قسمت اطلاعات خوبی در رابطه با مشکل خود کسب نمایید.</p>
        </div>
        <div class="sectionHeading centeredHeading innerSectionHeading">
			<h2>برخی خدمات گروه وکلای دادصا</h2>
			<span class="subHeading">پذیرش کلیه دعاوی ملکی و کیفری و حقوقی</span>
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
			<span class="subHeading">توضیحات زیر عنوان برای هدینگ مورد نظر</span>
		</div>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><?php echo do_shortcode('[contact-form-7 id="28" title="فرم مشاوره"]') ?></div>
            <div class="sectionTwinItem" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><img src="<?php echo get_template_directory_uri() ?>/img/home/cosultation-banner-min.jpg?<?php echo _S_VERSION ?>" alt=""></div>
        </div>
    </div>
</div>
<?php
get_footer();