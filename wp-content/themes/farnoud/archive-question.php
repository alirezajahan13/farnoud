<?php 

get_header();

?>
<br><br>

<div class="mainView">
    <div class="sectionHeading centeredHeading">
        <h2 class="bigHeading">پرسش‌های حقوقی</h2>
        <span class="subHeading">بانک سوالات متداول حقوقی و ملکی</span>
    </div>
    <div class="linkToQuestionForm">
        <a href="https://farnoud.ir/question-form/" class="generalLinkButton linkCenter" target="_blank">سوال خود را بپرسید</a>
    </div>
    <div class="archiveQuestionParent">
        <?php while(have_posts()):the_post();
            get_template_part('/template-parts/content','questions');
        endwhile ?>
        <div class="archiveSourcePagination">
            <?php pagination_bar(); ?>
    	</div>
    </div>
</div>
<?php
get_footer();