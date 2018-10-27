<?php
/* yourtheme.theme */

function yourtheme_preprocess_page(array &$variables) {

  // Load the site name and slogen and set the variables.
  $config = \Drupal::config('system.site');

  $variables['site_name'] = $config->get('name');
  $variables['site_slogan'] = $config->get('slogan');
}

?>


{# page.html.twig #}

<div class="container">
    <h1 class="sitename">{{ site_name }}</h1>
    <h3 class="slogan">{{ site_slogan }}</h3>
</div>
