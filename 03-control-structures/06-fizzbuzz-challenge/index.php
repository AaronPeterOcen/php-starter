<?php
/*
Fizzbuzz Challenge:
Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”. Remember, you can use the modulus operator to check if a number is divisible by another number.
*/

while ($num <= 100) {
    if ($num % 3 == 0 && $num % 5 == 0) {
        echo $num . ' fizzbuzz <br>';
    } else if ($num % 3 == 0) {
        echo ' fizz <br>';
    } else if ($num % 5 == 0) {
        echo ' buzz <br>';
    } else {
        echo $num .'<br>';
    }
    $num++;
}