<?php
/*

Template Name: About Template

*/
get_header();
?>
<div class="aboutMainSection mainExtraMargin">
    <div class="aboutMainInner mainView">
        <div class="sectionTwinFlex">
            <div class="sectionTwinItemImg"><img src="<?php echo get_template_directory_uri() ?>/img/about.png?<?php echo _S_VERSION ?>" alt="گروه وکلای فرنود"></div>
            <div class="sectionTwinItemTxt mainBox">
                <div class="sectionHeading">
                    <h1 class="bigHeading">درباره گروه وکلای فرنود</h1>
                    <span class="subHeading">لورم ایپسوم متن ساخت</span>
                </div>
                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                <div class="twinListParent">
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
                    <li class="marginedMedium checkListItem">وکیل ملکی</li>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="aboutCounter">
    <div class="counterNumbers" id="counterNumbers">
        <div class="counterNumbersInner mainView">
            <div class="counterItem">
                <div class="counterNumber"><span id="counter-1">130</span><span>+</span></div>
                <div class="counterTitle">پرونده موفق</div>
            </div>
            <div class="counterItem">
                <div class="counterNumber"><span id="counter-2">16</span><span>+</span></div>
                <div class="counterTitle">وکیل مجرب</div>
            </div>
            <div class="counterItem">
                <div class="counterNumber"><span id="counter-3">11</span><span>+</span></div>
                <div class="counterTitle">سال تجربه</div>
            </div>
            <div class="counterItem">
                <div class="counterNumber"><span id="counter-4">321</span><span>+</span></div>
                <div class="counterTitle">رضایت موکل</div>
            </div>
        </div>
    </div>
</div>
<div class="homeServices aboutServices">
    <div class="homeServicesInner mainView">
        <div class="sectionHeading centeredHeading">
            <h2 class="bigHeading">برترین خدمات گروه فرنود</h2>
            <span class="subHeading">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</span>
        </div>
        <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل .</p>
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
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
            <a href="#" class="serviceImgItem" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="center-bottom">
                <img src="<?php echo get_template_directory_uri() ?>/img/home/hs1-min.jpg?<?php //echo _S_VERSION ?>" alt="">
                <h3>وکیل ملکی</h3>
                <span>لورم ایپسوم متن ساختگی با تولید سادگی </span>
            </a>
        </div>
        <a href="https://farnoud.ir/service/" class="generalLinkButton linkCenter">مشاهده همه</a>
    </div>
</div>
<?php
get_footer();