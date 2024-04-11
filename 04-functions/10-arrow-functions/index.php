<?php

$add = fn ($a, $b) => $a + $b;

// echo $add(1, 2);

$nums = [1,2,3,4,5];

$sqNms = array_map(fn ($nums) => $num * $num, $nums);

print_r($sqNms);