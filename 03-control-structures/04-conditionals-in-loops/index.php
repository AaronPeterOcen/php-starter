<?php

$num = 1;

// while ($num <= 10) {
//     if ($num % 2 == 0) {
//         echo $num . ' is even <br>';
//     } else {
//         echo $num . ' is odd <br>';
//     }
//     $num++;
// }

// break out of loop
// for ($i = 0; $i <= 10; $i++) {
//     if($i == 5) {
//         break;
//     }
//     echo $i . '<br>';
// }

// skip and continue

// for ($i = 0; $i <= 10; $i++) {
//     if($i == 5) {
//         continue;
//     }
//     echo $i . '<br>';
// }

$studGrades = array(
    'jack' => 75,
    'jill' => 95,
    'joan' => 100,
    'jeff' => 85
);

foreach ($studGrades as $name => $grade) {
    if ($grade >= 85) {
        echo $name . ' :excellent grade <br>';
    }
}