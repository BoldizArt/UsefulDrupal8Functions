<?php

// Use the View class.
use Drupal\views\Views;

// Set the arguments array.
$arguments = ['node_id'];

// Get view programmatically with contextual filter.
$view = Views::getView('view_id');
$renderArray = $view->buildRenderable('display_name', $arguments);

// Render the view.
$rendered = \Drupal::service('renderer')->renderRoot($renderArray);
