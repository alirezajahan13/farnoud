<?php
/*

Template Name: Request Template

*/




get_header();
?>

<div class="cosultationSection">
    <div class="mainView mainBox morePadding lowRadius">
        <div class="sectionHeading centeredHeading">
            <h2 class="bigHeading">درخواست مشاوره</h2>
            <span class="subHeading">درخواست مشاوره به صورت حضوری ، تلفنی و آنلاین</span>
        </div>
        <p>با افتخار به اطلاع دوستان و همراهان گرامی می‌رسانیم که در گروه وکلای فرنود با مدیریت جناب زارعی، وکیل پایه یک دادگستری و عضو کانون وکلای مرکز، خدمات مشاوره حقوقی با بیش از 17 سال تجربه وکالت را برای شما فراهم کرده‌ایم. مشاوره با وکلای فرنود به سه صورت تلفنی، حضوری و آنلاین ارائه می‌شود. در صورت نیاز به تعیین وقت مشاوره، لطفاً فرم زیر را با دقت تکمیل نموده و نوع مشاوره خود را انتخاب فرمایید تا پشتیبان اختصاصی شما برای تعیین وقت با شما تماس بگیرد.</p>
        <div class="sectionTwinFlex">
            <div class="sectionTwinItem"><?php echo do_shortcode('[contact-form-7 id="c212c7f" title="فرم صفحه درخواست مشاوره"]') ?></div>
            <div class="sectionTwinItem"><img src="<?php echo get_template_directory_uri() ?>/img/home/cosultation-banner-min.jpg?<?php echo _S_VERSION ?>" alt=""></div>
        </div>
    </div>
</div>







<?php get_footer(); ?>