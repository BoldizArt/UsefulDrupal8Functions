<?php

// Set variables.
$storeId = 1;
$orderType = 'default';

// Get commerce storage.
$commerceStorage = \Drupal::service('entity.manager')->getStorage('commerce_store');

// Load store.
$store = $commerceStorage->load($storeId);

// Get cart provider.
$cartProvider = \Drupal::service('commerce_cart.cart_provider');

// Load the current users cart.
$cart = $cartProvider->getCart($orderType, $store);

// Check is the current commerce cart has items.
if (is_object($cart) && $cart->hasItems())
    $count = count($cart->getItems());
