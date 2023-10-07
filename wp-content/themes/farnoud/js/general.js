var $ = jQuery;
AOS.init();
$(document).ready(function(){
    $('.mainMenu>ul>.menu-item-has-children>a , .mainMenu>ul>.menu-item-has-children>ul>.menu-item-has-children>a , .mobileMenu>ul>.menu-item-has-children>a , .mobileMenu>ul>.menu-item-has-children>ul>.menu-item-has-children>a').after('<svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="18px" height="18px" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"/></svg>')
    $('.mobileMenuIcon').click(function(){
        $('.mainOverlay').addClass('showOverlay');
        $('.mobMenuContainer').addClass('showMobileMenu');
    });
    $('.mainOverlay , .mobMenuContainer>svg').click(function(){
        $('.mainOverlay').removeClass('showOverlay');
        $('.mobMenuContainer').removeClass('showMobileMenu');
    });
    $('.mobileMenu>ul>.menu-item-has-children>a , .mobileMenu>ul>.menu-item-has-children>svg ').click(function(){
        $('.mobileMenu>ul>.menu-item-has-children>ul').slideUp(300);
        if($(this).siblings("ul").css('display') == 'block'){
            // console.log(click);
            $(this).siblings('ul').slideUp(400);
        }
        else{
            $(this).siblings('ul').slideToggle(400);
        }        

    });
    $(window).on('scroll' , function(){
        if($(document).scrollTop() >= 160){
            $('.stickyHeader').addClass('showStickyHeader');        
        }
        else{
            $('.stickyHeader').removeClass('showStickyHeader');                        
        }
    });   
    $('.headerSearchPart').click(function(){
        $('.mainOverlay').addClass('showOverlay');
        $('.searchContainer').fadeIn(300);
    });
    $('.searchContainer .searchBtn .closeInput').click(function(){
        $('.mainOverlay').removeClass('showOverlay');
        $('.searchContainer').fadeOut(300);
    });
    $('.faqQuestion').click(function(){
        if($(this).hasClass('closedQuestionTab')){
            $('.faqQuestion').addClass('closedQuestionTab');
            $(this).toggleClass('closedQuestionTab');
            $('.faqAnswer').slideUp(200);
            $(this).siblings('.faqAnswer').slideDown(200);
        }
        else{
            $(this).addClass('closedQuestionTab');
            $(this).siblings('.faqAnswer').slideUp(200);
        }
    });
});