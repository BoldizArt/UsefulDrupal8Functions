<?php

// Set module machine name.
$moduleName = 'admin_toolbar';

// Check if the $moduleName module enabled.
$moduleHandler = \Drupal::service('module_handler');
if ($moduleHandler->moduleExists($moduleName)) {
    // Do something...
}
