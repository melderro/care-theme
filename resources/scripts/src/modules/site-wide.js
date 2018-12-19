import $ from 'jquery';

$(document).scroll(() => {
    if ($(document).scrollTop() >= 300) {
        $('#navigationMenu').addClass('condensed');
    }
    if ($(document).scrollTop() <= 100) {
        $('#navigationMenu').removeClass('condensed');
    }
});