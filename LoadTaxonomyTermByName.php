<?php

// Get taxonomy term storage.
$taxonomyStorage = \Drupal::service('entity.manager')->getStorage('taxonomy_term');

// Set name properties.
$properties['name'] = 'term_name';

// Set vocabulary - not important.
if (!empty($vocabulary))
    $properties['vid'] = $vocabulary;
        
// Load taxonomy term by properties.
$terms = $taxonomyStorage->loadByProperties($properties);
$term = reset($terms);
