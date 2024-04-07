<?php

$n = array("a", "b", "c");
$nums = [1,2,3,4,5];

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

// <h1>Hello</h1>
// inspect($n);
// inspect($nums);

// // print_r($n);

// echo $n[2];
// echo $nums[4];

// add element to array
$nums[] = 10;

inspect($nums);
