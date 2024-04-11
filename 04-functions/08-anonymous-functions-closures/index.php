<?php

$sq = function ($a) {
    return $a * $a;
};

$res = $sq(6);
echo $res;

// Closures

function createCount() {
    $count = 0;

    // using a closure
    $counter = function() use (&$count) {
        return ++$count;
    };

    return $counter;
}

$counter = createCount();

echo $counter();