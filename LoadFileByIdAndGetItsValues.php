<?php

// Example file id.
$fid = 1;

// Get file storage.
$fileStorage = \Drupal::service('entity.manager')->getStorage('file');

// Load file.
$file = $fileStorage->load($fid);

// Get file values:
$fid = $file->id();
$created = $file->created->value; 
$uri = $file->getFileUri();
$url = file_create_url($uri);
$filename = $file->filename->value;
$filemime =  $file->filemime->value;
$filesize = $file->filesize->value;
