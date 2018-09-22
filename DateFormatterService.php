<?php

// Use Drupals date formatter service
// Drupals format function:
// public function format($timestamp, $type = 'medium', $format = '', $timezone = NULL, $langcode = NULL) {}

$timestamp = '1537174769';
$formatter = \Drupal::service('date.formatter');

// Default format.
$formatter->format($timestamp); // Mon, 09/17/2018 - 08:59

// Long format.
$formatter->format($timestamp, 'long'); // Monday, September 17, 2018 - 08:59

// Short format.
$formatter->format($timestamp, 'short'); // 09/17/2018 - 08:59

// Custom format.
$formatter->format($timestamp, '', 'd.M Y H:i:s'); // 17.Sep 2018 08:59:29
