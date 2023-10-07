<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package farnoud
 */

get_header();
?>

	<main id="primary" class="site-main mainView">
    <br>
	<div class="mainView">
        <div class="error404Page">
            <div class="notFoundTitle sectionHeading centeredHeading">
                <h1 class="bigHeading">آدرس یافت نشد!</h1>
                <span class="subHeading">آدرس وارد شده اشتباه است یا در وبسایت وجود ندارد</span>
            </div>
            <div class="homeLinkButton">
                <a href="https://farnoud.ir/" class="generalLinkButton linkSpace linkCenter">صفحه اصلی</a>
            </div>
            <div class="logo404">
                <img src="https://farnoud.ir/wp-content/themes/farnoud/img/404-vector.png" alt="404-vector.png">
            </div>
        </div>
    </div>
    <br>
	</main><!-- #main -->

<?php
get_footer();
