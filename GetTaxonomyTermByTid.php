<?php

// Set tid - Taxonomy term id.
$tid = 1;

// Get taxonomy term storage.
$taxonomyStorage = \Drupal::service('entity.manager')->getStorage('taxonomy_term');

// Load taxonomy term.
$term = $taxonomyStorage->load($tid);