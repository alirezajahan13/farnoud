<?php
/*

Template Name: Home Template

*/
get_header();
?>
<div class="bannerSectionParent">
    <div class="bannerSection mainView">
        <div class="bannerSectionDesc">
            <h2 class="bigHeading">گروه حقوقی فرنود <br> راهنمای قابل اعتماد شما</h2>
            <p>گروه حقوقی فرنود با تجربه و تخصص خود به شما در حل مسائل کمک میکند. با گروه وکلای فرنود، به امور حقوقی با آرامش و اطمینان نگاه کنید.</p>
            <a href="#" class="generalLinkButton linkSpace linkRight">دریافت مشاوره</a>
        </div>
        <div class="bannerSectionImg">
            <img src="<?php echo get_template_directory_uri() ?>/img/img-banner-home.png?<?php echo _S_VERSION ?>" alt="">
        </div>
    </div>
</div>
<div class="homeAbout mainBox morePadding">
    <div class="homeAboutInner mainView">
        <div class="sectionHeading centeredHeading">
            <h2 class="bigHeading">درباره ما</h2>
            <span class="subHeading"> گروه وکلای فرنود، حلقه ارتباط مستقیم شما با عدالت</span>
        </div>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><img src="<?php echo get_template_directory_uri() ?>/img/home/about-img-min.jpg?<?php echo _S_VERSION ?>" alt="وکیل ملکی خانم"></div>
            <div class="sectionTwinItem" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <p>گروه وکلای فرنود با بیش از 17 سال تجربه درخشان در زمینه وکالت در پرونده‌های حقوقی متنوع، از جمله مسائل ملکی، قراردادها، امور مرتبط با دیوان عدالت اداری و شهرداری، به عنوان همراه و مشاور قانونی شما در راه حل مسائل حساس و حقوقی در کنار شما قرار می‌گیرد. تجربه و تخصص ما در موارد متنوع حقوقی، از جمله پرونده‌های کیفری و دیگر امور حقوقی، تضمین می‌کند که شما با یک تیم قانونی با اعتماد به نفس و آمادگی برای مواجهه با چالش‌های حقوقی، از ما حمایت کامل خواهید داشت. ما به رسیدگی دقیق به پرونده‌های حقوقی شما، تحلیل دقیق موارد، و ارائه راهکارهای قانونی مناسب تمرکز داریم تا به حل مسائل حقوقی شما بپردازیم. تیم ما در تمامی مراحل پرونده‌ با شما همراهی خواهد کرد تا اطمینان حاصل شود که حقوق شما به درستی محافظت می‌شود و بهترین نتیجه حاصل می‌شود. با گروه وکلای فرنود، به امور حقوقی با آرامش و اطمینان نگاه کنید.</p>
                <div class="twinListParent">
                    <li class="marginedMedium checkListItem">دعاوی ملکی و ثبتی</li>
                    <li class="marginedMedium checkListItem">تنظیم قراردادها</li>
                    <li class="marginedMedium checkListItem">دعاوی دیوان عدالت اداری</li>
                    <li class="marginedMedium checkListItem">دعاوی سرقفلی</li>
                    <li class="marginedMedium checkListItem">دعاوی شهرداری</li>
                    <li class="marginedMedium checkListItem">دعاوی مربوط به اراضی ملی</li>
                </div>
                <a href="https://farnoud.ir/about/" class="generalLinkButton linkSpace linkRight">بیشتر بخوانید</a>
            </div>
        </div>
    </div>
</div>
<div class="homeServices">
    <div class="homeServicesInner mainView">
        <div class="sectionHeading centeredHeading">
            <h2 class="bigHeading">درخواست وکیل مجرب</h2>
            <span class="subHeading">با گروه وکلای فرنود، به امور حقوقی با آرامش و اطمینان نگاه کنید.</span>
        </div>
        <div class="serviceImgParent">
            <?php
                $startAOSDelay = 0;
                $itemCounter = 1;
                $categories = get_terms( 'service-cat', array('hide_empty' => false) );
                foreach($categories as $category) {
                    if(get_field('service_archive_mb_toggle','service-cat_'.$category->term_id)==1){
                        echo '<a href="'.get_category_link($category->term_id).'" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="'.$startAOSDelay.'" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">';
                        echo '<img src="'.get_field('service_archive_mb_image','service-cat_'.$category->term_id)['url'].'" alt="'.get_field('service_archive_mb_image','service-cat_'.$category->term_id)['alt'].'">';
                        echo '<h3>'.$category->name.'</h3>';
                        echo '<span>'.get_field('service_archive_mb_description','service-cat_'.$category->term_id).'</span>';
                        echo '</a>';
                        if($itemCounter ==4){
                            $startAOSDelay = 0;
                            $itemCounter = 1;
                        }
                        else{
                            $startAOSDelay+=50;
                            $itemCounter++;
                        }
                    }
                        
                }
            ?>
            <!-- <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php //echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php //echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php //echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php //echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php //echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php //echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php //echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php //echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a> -->
        </div>
        <!-- <a href="https://farnoud.ir/service/"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" class="generalLinkButton linkCenter">مشاهده همه</a> -->
    </div>
</div>
<div class="counterNumbers" id="counterNumbers">
    <div class="counterNumbersInner mainView">
        <div class="counterItem" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <div class="counterNumber"><span id="counter-1">1</span><span>+</span></div>
            <div class="counterTitle">پرونده موفق</div>
        </div>
        <div class="counterItem" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <div class="counterNumber"><span id="counter-2">1</span><span>+</span></div>
            <div class="counterTitle">وکیل مجرب</div>
        </div>
        <div class="counterItem" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <div class="counterNumber"><span id="counter-3">1</span><span>+</span></div>
            <div class="counterTitle">سال تجربه</div>
        </div>
        <div class="counterItem" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <div class="counterNumber"><span id="counter-4">1</span><span>+</span></div>
            <div class="counterTitle">رضایت موکل</div>
        </div>
    </div>
</div>
<div class="cosultationSection mainBox">
    <div class="cosultationSection mainView">
        <div class="sectionHeading centeredHeading">
            <h2 class="bigHeading">مشاوره رایگان</h2>
            <span class="subHeading">در کمتر از 24 ساعت با شما تماس خواهیم گرفت</span>
        </div>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><?php echo do_shortcode('[contact-form-7 id="49fdd75" title="فرم مشاوره"]') ?></div>
            <div class="sectionTwinItem" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><img src="<?php echo get_template_directory_uri() ?>/img/home/cosultation-banner-min.jpg?<?php echo _S_VERSION ?>" alt=""></div>
        </div>
    </div>
</div>
<div class="homeLatestBlog">
    <div class="homeLatestBlogInner mainView">
        <div class="sectionHeading centeredHeading">
            <h2 class="bigHeading">آخرین مطالب بلاگ</h2>
            <span class="subHeading">تهیه و تنظیم به‌روزترین مطالب تخصصی این حوزه</span>
        </div>
        <div class="archiveParent">
            <?php
            $getLatestPostsArgs = array(
                'post_type'=>'post',
                'posts_per_page'=>4
            );
            $getLatestPostsQuery = new WP_Query($getLatestPostsArgs);
            while($getLatestPostsQuery->have_posts()): $getLatestPostsQuery->the_post();
                get_template_part('template-parts/content' , 'archive');
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <a href="https://farnoud.ir/blog/" class="generalLinkButton linkCenter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">مشاهده همه</a>
    </div>
</div>
<?php
get_footer();