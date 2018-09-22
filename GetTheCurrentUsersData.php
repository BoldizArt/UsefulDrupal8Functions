<?php

// Get user service.
$userService = \Drupal::service('current_user');

// Check is the current user anonymous.
$isAnonymous = $userService->isAnonymous();

// Get id of the current user.
$uid = $userService->id();

// Get the users email.
$email = $userService->getEmail();

// Get the display name of the user.
$displayName = $userService->getDisplayName();

// Get the users preferred langcode.
$preferredlangcode = $userService->getPreferredLangcode();
