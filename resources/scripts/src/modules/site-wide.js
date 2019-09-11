import $ from 'jquery';
import 'mmenu-js';

document.addEventListener(
    "DOMContentLoaded", () => {
        new Mmenu( "#my-menu" );
    }
);

$(document).scroll(() => {
    if ($(document).scrollTop() >= 300) {
        $('#navigationMenu').addClass('condensed');
    }
    if ($(document).scrollTop() <= 100) {
        $('#navigationMenu').removeClass('condensed');
    }
});

$(document).ready(function(){
    $('.preload').removeClass('preload');
});