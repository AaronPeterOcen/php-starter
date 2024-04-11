<?php

function add($a, $b) {
    return $a + $b;
}

echo add(1, 3);
echo '<br>';
echo add(7, 3);

function nay($name = 'orah') {
    return 'Hello'.$name;
}

echo nay();

function addAll(...$args) {
    $ttl = 0;

    foreach ($args as $ttl) {
        $ttl += $args;
    }
}

echo addAll(1,2,3,4,5);