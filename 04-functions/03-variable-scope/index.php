<?php

// global scope
$a = 'arr';

echo $a;

function sayHello($a) {
    // local scope
    $a = 'peter';
    echo 'Hello World'. $a;
}

// echo $a;

// sayHello();

// echo $a;

function sayBye() {
    // local scope
    $a = ['Aaron', 'Peter'];
    echo 'Bye World'. $a[0];
}

sayBye();