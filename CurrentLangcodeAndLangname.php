<?php

// Get language manager service.
$languageManager = \Drupal::service('language_manager');

//Get the current lanuage code.
$langcode = $languageManager->getCurrentLanguage()->getId();

//Gett the current language name.
$langname = $languageManager->getCurrentLanguage()->getName();
