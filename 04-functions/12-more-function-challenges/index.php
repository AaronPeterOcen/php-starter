<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

$fahrenheitToCelsius = function ($Fahrenheit) {
  $Celsius = ($Fahrenheit - 32) * 5/9;
  return $Celsius;
};

//  as an arrow Fn
// $fahrenheitToCelsius = fn ($Fahrenheit) => ($Fahrenheit - 32) * 5/9;


// echo fahrenheitToCelsius(68);
echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/
function printNamesToUpperCase($names) {
  foreach($names as $name) {
    $upperName = strtoupper($name);

    echo $upperName . '<br>';
  }

}

$names = (['ocen', 'aaron', 'peter']);
// printNamesToUpperCase($names);

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

$findLongestWord = function ($sentence){
   // Split the sentence into an array of words
  $words = explode(' ', $sentence);
  // Initialize the longest word variable
  $longestWord = '';

  foreach($words as $word) {
    $word = trim($word);

    if(strlen($word) > strlen($longestWord) || $longestWord === '') {
      $longestWord = $word;
    }
  }

  return $longestWord;
};

echo $findLongestWord('I am being myself , you just don"t get it ');
