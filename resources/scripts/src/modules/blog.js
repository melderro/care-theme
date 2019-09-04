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
      slidesToShow: 2,
      slidesToScroll: 1,
      lazyLoad: 'ondemand',
      arrows: true,
      fade: false,
      autoplay: true,
      autoplaySpeed: 4000,
      infinite: true,
      dots: false,
    });

  }
});