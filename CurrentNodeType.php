<?php

// Load the current node.
$node = \Drupal::request()->attributes->get('node');

// Check if $node is object
if (is_object($node)) {
    // Get current node type
    $typeName = $node->bundle();

    if ($typeName == 'article') {
        $title = $node->getTitle();
        // ...
    }
}
