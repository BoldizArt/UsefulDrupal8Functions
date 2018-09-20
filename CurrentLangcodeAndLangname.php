<?php

//Get the current lanuage code.
$langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();

//Gett the current language name.
$langname =  \Drupal::languageManager()->getCurrentLanguage()->getName();