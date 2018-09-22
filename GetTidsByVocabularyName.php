<?php

// Set vocabulary name.
$vocabularyName = 'tags';

// Get all taxonomy term id for this $vocabularyName.
$tids = \Drupal::entityQuery('taxonomy_term')
    ->condition('vid', $vocabularyName)
    ->execute();

// Get 10 taxonomy term id sort by DESC where vocabulary name is $vocabularyName.
$tids = \Drupal::entityQuery('taxonomy_term')
    ->condition('vid', $vocabularyName)
    ->range(0, 10)
    ->sort('changed', 'DESC')
    ->execute();
    