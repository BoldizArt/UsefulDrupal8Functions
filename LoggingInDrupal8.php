<?php

// Get logger factory.
$logger = \Drupal::service('logger.factory');

// Log a message:
$modulName = 'mymodule';
$message = 'Lorem ipsum dolor sit amet...';

$logger->get($moduleName)->emergency($message); // emergency
$logger->get($moduleName)->alert($message);     // alert
$logger->get($moduleName)->critical($message);  // critical
$logger->get($moduleName)->error($message);     // error
$logger->get($moduleName)->warning($message);   // warning
$logger->get($moduleName)->notice($message);    // notice
$logger->get($moduleName)->info($message);      // info
$logger->get($moduleName)->debug($message);     // debug

// Log a message with dynamic variables.
$nodeType = 'Article';
$userName = 'Admin';

$logger->get($moduleName)->notice('A new "@nodeType" created by %userName.', [
    '@nodeType' => $nodeType,
    '%userName' => $userName,
]);

// Log an object or array:
$notString = ['a' => 'b'];
$logger->get($moduleName)->debug('<pre>'.print_r($notString, true).'</pre>');
