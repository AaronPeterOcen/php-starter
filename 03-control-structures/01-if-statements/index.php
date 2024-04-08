<?php

// If statement
// if ($age <= 18) {
//     echo 'Too young for a drink';
// }

// If-Else
// if ($age <= 18) {
//     echo 'Too young for a drink';
// } else {
//     echo 'Okay to drink';
// }

// Nested if statement
// if ($age >= 18) {
//     echo 'Too young for a drink';
// } else {
//     if ($age >= 18) {
//         echo 'Old enough to dirnk or vote';
//     } else {
//         echo 'Okay to drink';
//     }
// }

$age = 19;
// If-Else-If
if ($age <= 18) {
    echo 'Too young for a drink';
} else if ($age >= 18) {
    echo 'Old enough to drink or vote';
} else {
        echo 'Okay to drink';
}

