<?php

// Get entity storage.
$entityName = 'node';
$entityStorage = \Drupal::service('entity.manager')->getStorage($entityName);

// Load the entity by $eid - entity id.
$eid = 1;
$entity = $entityStorage->load($eid);

// Load field type by field name.
$fieldName = 'field_custom';

// Check if the entity has this $fieldName.
if ($entity->hasField($fieldName)) {
    // Do something...
}
