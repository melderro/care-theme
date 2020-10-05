import $ from 'jquery';

$(document).scroll(() => {
    const scrollBottom = $(window).scrollTop();
    if($('body').hasClass('page-template-template-programLanding')){
        const contactButton = $('.o-introContent__link').offset().top;
        if (scrollBottom >= contactButton) {
            $('.o-introContent__link').addClass('reveal');
        }else{
            $('.o-introContent__link').removeClass('reveal');
        }

    }
});
