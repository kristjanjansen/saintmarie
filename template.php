<?php

function saintmarie_preprocess_page(&$variables) {
    $variables['site_slogan'] = $variables['is_front'] ? $variables['site_slogan'].
     ". I'm on <a href='http://facebook.com/kristjanjansen'>Facebook</a>,
     <a href='http://twitter.com'>Twitter</a>,
     <a href='http://ee.linkedin.com/pub/kristjan-jansen/15/b06/778'>LinkedIn</a>
     and kika at trip.ee" : "";
}
  
