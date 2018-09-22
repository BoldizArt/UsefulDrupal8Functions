<?php

// Get the current path.
$path = \Drupal::service('path.current')->getPath();

// Get the current path alias by current path.
$pathAlias = \Drupal::service('path.alias_manager')->getAliasByPath($path);

// Get the current route name.
$routeName = \Drupal::service('current_route_match')->getRouteName();
