<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/
// string
$name = "Ocen";
$name1 = "Aaron";

var_dump($name);
echo "<br/>";
// echo gettype($name1);

// integer
$age = 33;
var_dump($age);
echo "<br/>";

// float
$rating = 4.4;
var_dump($rating);
echo "<br/>";

// boolean
$isLoaded = true;
var_dump($isLoaded);
echo "<br/>";

// array
$friends = ['ocen', 33, 'peter'];
var_dump($friends);
echo "<br/>";

// object
$person = new stdClass();
var_dump($person);
echo "<br/>";

// null
$car = null;
var_dump($car);
echo "<br/>";

// resource
$file = fopen('sample.txt', 'r');
var_dump($file);
