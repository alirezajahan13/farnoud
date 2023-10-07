<?php 

get_header();
$currentTax = get_queried_object();
?>
<br><br>

<div class="mainView">
    <div class="sectionHeading centeredHeading">
        <h1 class="bigHeading"><?php echo $currentTax->name ?></h1>
        <span class="subHeading">آخرین پرسش‌های مطرح شده کاربران دادصا در حوزه <?php echo $currentTax->name ?></span>
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