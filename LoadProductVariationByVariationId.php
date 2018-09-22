<?php

// Set product variation id
$vid = 1;

// Load product variation by $vid variation id.
$productVariationStorage = \Drupal::service('entity.manager')->getStorage('commerce_product_variation');
$productVariation = $productVariationStorage->load($vid);
