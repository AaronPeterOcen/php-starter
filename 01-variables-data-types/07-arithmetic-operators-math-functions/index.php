<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/
$output = null;

$n1 = 20;
$n2 = 19;

$output = "$n1 + $n2 = ". $n1 + $n2;
$output = "$n1 - $n2 = ". $n1 - $n2;
$output = "$n1 * $n2 = ". $n1 * $n2;
$output = "$n1 / $n2 = ". $n1 / $n2;
$output = "$n1 % $n2 = ". $n1 % $n2;

// assignment operator
$n3 = 10;
$n3 += 13;

// built int PHP functions

// $output = $rand(1, 1000);
// $output = $getrandmax(1, 1000);

// round()
// $output = $round(1.4);

// sqrt()
$output = sqrt(55);

// abs()
$output = abs(-55);

// min ()
// max()

$output= number_format(111111.2222, 2, '.', ',')




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl">
        <?= $output ?>
      </p>
    </div>
  </div>
</body>

</html>