<?php
$output = null;

$fruits = [
  ['apple', 'Red'],
  ['mango', 'green'],
  ['banana', 'yellow']
];

$op = $fruits[0][0];
$fruits[] = ['grape', 'purple'];

// $op = $fruits;

$users = [
  ['name'=> 'ocen', 'mail' => 'ocen@oxn.com', 'password' => '1233233'],
  ['name'=> 'aaron', 'mail' => 'aaron@oxn.com', 'password' => '1233233'],
  ['name'=> 'petern', 'mail' => 'petern@oxn.com', 'password' => '1233233'],

];

$op = $users[1]['mail'];


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
      <p class="text-xl"><?= $op ?></p>
      <p>
        <pre>
          <?php print_r($users) ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>