<?php
function no_links($thelist) {
  return preg_replace('#<a.*?>([^<]*)</a>#i', '$1', $thelist);
}
