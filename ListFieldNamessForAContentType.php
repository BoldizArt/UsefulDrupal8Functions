<?php

// Set the content type name.
$contentType = 'article';

// List field names ​​for a content type.
$fieldDefinitions = \Drupal::service('entity.manager')
    ->getFieldDefinitions('node', $contentType);

// Set field names
$fields = [];
foreach ($fieldDefinitions as $name => $value) {
    $fields[] = $name;
}

return $fields;
