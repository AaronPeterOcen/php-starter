<?php

$a = [1,2,4];

$sqNums = array_map(function ($ab) {
    return $ab * $ab;
}, $a);

// print_r($sqNums);

function applyCallback($cb, $value) {
    return $cb($value);
}

$double = function($a) {
    return $a * 2;
};

$result = applyCallback($double, 55);