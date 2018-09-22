<?php

// Set content type.
$contentType = 'article';

// Get all published node id where content type is $contentType.
$vids = \Drupal::entityQuery('node')
    ->condition('status', 1)
    ->condition('type', $contentType)
    ->execute();


// Get 10 published node id sort by DESC where content type is $contentType.
$vids = \Drupal::entityQuery('node')
    ->condition('status', 1)
    ->condition('type', $contentType)
    ->range(0, 10)
    ->sort('changed', 'DESC')
    ->execute();
