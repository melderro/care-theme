'use strict';
import $ from 'jquery';
import 'slick-carousel';

$(document).ready(function(){
  if($('.o-featureSlider').length){

    $('.o-featureSlider').on('init', function(){
      $('.preload').removeClass('preload');
    });

    $('.o-featureSlider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      lazyLoad: 'ondemand',
      arrows: false,
      fade: false,
      autoplay: true,
      autoplaySpeed: 4000,
      infinite: true,
      dots: false,
    });

  }
});
