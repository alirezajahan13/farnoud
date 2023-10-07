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
            <p>گروه حقوقی فرنود با تجربه و تخصص خود به شما در حل مسائل کمک میکند. ما با افتخار به عنوان همراه شما در مشکلات حقوقی به شما خدمت خواهیم کرد.</p>
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
            <h2 class="bigHeading">درباره گروه وکلای فرنود</h2>
            <span class="subHeading">لورم ایپسوم متن ساخت</span>
        </div>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom"><img src="<?php echo get_template_directory_uri() ?>/img/home/about-img-min.jpg?<?php echo _S_VERSION ?>" alt="وکیل ملکی خانم"></div>
            <div class="sectionTwinItem" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                <div class="twinListParent">
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
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
            <span class="subHeading">لورم ایپسوم متن ساخت</span>
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
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
        </div>
        <a href="https://farnoud.ir/service/"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" class="generalLinkButton linkCenter">مشاهده همه</a>
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