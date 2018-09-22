<?php

$nid = 1;
$nids = [1, 2, 3];

// Get node storage
$nodeStorage = \Drupal::service('entity.manager')->getStorage('node');

// Loade a node by nid.
$node = $nodeStorage->load($nid);

// Load multiple nodes by nids.
$nodes = $nodeStorage->loadMultiple($nids);
