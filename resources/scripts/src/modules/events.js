'use strict';
import $ from 'jquery';

$(document).ready(function(){
  const description_box = $('.tribe-events-single-event-description');
  if(description_box.length){
    const description_box_height = description_box.height();
    if(description_box_height > 300) {
    }
  }
  if(window.location.hash) {
    description_box.removeClass('closed');
    description_box.addClass('open');
    $('.tribe-events-read-more-button').text('Read Less');    
  }
  $('.tribe-events-read-more-button').on('click', function(){
    let div_class = description_box.attr('class');
    div_class = div_class.split(' ');
    let state = div_class.indexOf('closed');
    if(state != -1){
      description_box.removeClass('closed');
      description_box.addClass('open');
      $('.tribe-events-read-more-button').text('Read Less');
    } else {
      description_box.removeClass('open');
      description_box.addClass('closed');
      $('.tribe-events-read-more-button').text('Read More');
    }
  });

  //copy venu informaiton to the hidden field
  const venueInfo = $('.tribe-events-top-content .tribe-venue').html();
  $('.venue.gf_invisible input').attr('value', venueInfo);


});
