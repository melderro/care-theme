'use strict';
import $ from 'jquery';
import 'slick-carousel';


$('#newsFilter select').on('change', function() {
  const url = $(this).children('option:selected').val();
  window.location.href = url;
});

$(document).ready(function(){
  const slider = $('.m-generalbodyPhotos');
  if($('.o-generalbodyPhotos').length){

    slider.on('init', function(){
      $('.preload').removeClass('preload');
    });

    slider.slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      lazyLoad: 'ondemand',
      arrows: true,
      fade: false,
      autoplay: true,
      autoplaySpeed: 4000,
      infinite: true,
      dots: false,  
      nextArrow: '<div class="slick-next slick-arrow" aria-label="Next"  style="width: 20px; height: 20px"></div>',
      prevArrow: '<div class="slick-prev slick-arrow" aria-label="Previous" style="width: 20px; height: 20px"></div>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

  }
});