'use strict';
import $ from 'jquery';


$('#newsFilter select').on('change', function() {
  const url = $(this).children('option:selected').val();
  window.location.href = url;
});