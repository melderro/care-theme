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

  $('.sub-nav-close').on('click', function(){
    const clickedNavElement = $('ul', this); // get parent element. this isn't right
    $('.open')
    .css('display', 'none')
    .removeClass('open');
    $('.open-tab').removeClass('open-tab');
    clickedNavElement
      .css('display', 'flex')
      .hide()
      .fadeIn()
      .addClass('open');
    $(this).addClass('open-tab');   
  });
  
  $('#menu-primary>li').on('click', function (e) {
    const clickedNavElement = $('ul', this);
    if(clickedNavElement.length)
      e.preventDefault();

    // check if current nav is open. 
    // if it is, just close it and end. 
    // if not, close all others and then open clicked
    if(clickedNavElement.hasClass('open')){
      clickedNavElement
      .css('display', 'none')
      .removeClass('open');
      $('.open-tab').removeClass('open-tab');
    }else{
      $('.open')
        .css('display', 'none')
        .removeClass('open');
      $('.open-tab').removeClass('open-tab');
      clickedNavElement
        .css('display', 'flex')
        .hide()
        .fadeIn()
        .addClass('open');
      $(this).addClass('open-tab');
    }
  });
  $('#menu-primary>li>ul>li').on('click', function (e){
    e.stopPropagation();
  });
});