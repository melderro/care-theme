import $ from 'jquery';
import 'mmenu-js';

document.addEventListener(
  "DOMContentLoaded", () => {
    new Mmenu("#my-menu");
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

$(document).ready(function () {
  $('.preload').removeClass('preload');

  $('#menu-primary>li').on('click', function (e) {
    if($('ul', this).length)
      e.preventDefault();
    $('.open').fadeToggle('fast');
    $('.open').removeClass('open');
    $('ul', this).fadeToggle('fast');
    $('ul', this).addClass('open');
  });
});