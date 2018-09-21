<?php

// Get node storage.
$nodeStorage = \Drupal::service('entity.manager')->getStorage('node');

// Set node content.
$content = [
    'type' => 'article',
    'title' => 'title',
    'body' => [
        'value' => 'Lorem ipsum dolor sit amet...',
        'format' => 'basic_html'
    ],
    'uid' => $uid
];

// Create a new node.
$node = $nodeStorage->create($content);

// Save the node.
$node->save();
