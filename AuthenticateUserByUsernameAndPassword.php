<?php

// Authenticate user by username and password
$uid = \Drupal::service('user.auth')->authenticate($username, $password);

if($uid) {
    // Do something...
}
