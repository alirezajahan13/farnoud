<?php
/*

Template Name: Request Template

*/




get_header();
?>

<div class="cosultationSection mainBox">
    <div class="mainView">
        <div class="sectionHeading centeredHeading">
            <h2 class="bigHeading">درخواست مشاوره</h2>
            <span class="subHeading">درخواست مشاوره به صورت حضوری ، تلفنی و آنلاین</span>
        </div>
        <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی .</p>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem"><?php echo do_shortcode('[contact-form-7 id="c212c7f" title="فرم صفحه درخواست مشاوره"]') ?></div>
            <div class="sectionTwinItem"><img src="<?php echo get_template_directory_uri() ?>/img/home/cosultation-banner-min.jpg?<?php echo _S_VERSION ?>" alt=""></div>
        </div>
    </div>
</div>







<?php get_footer(); ?>