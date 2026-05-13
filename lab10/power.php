<?php
// Student ID: 2237392
// Name: Azzam Saeed Alghamdi
// CPIT 405 - Lab 10 - Q1: Power Function

/**
 * Iterative power function
 * Returns base raised to the power exp
 */
function power_iterative($base, $exp) {
    $result = 1;
    for ($i = 0; $i < $exp; $i++) {
        $result *= $base;
    }
    return $result;
}

/**
 * Recursive power function
 * Returns base raised to the power exp
 */
function power_recursive($base, $exp) {
    if ($exp == 0) {
        return 1;
    }
    return $base * power_recursive($base, $exp - 1);
}
?>