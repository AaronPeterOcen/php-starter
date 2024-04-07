<?php
$output = null;

$ids = [1,2,9,4,10,6];
$users = ['u4', 'u0', 'u3'];

// count function
$op =count($ids);

// sort
sort($ids);
sort($users);

// rsort
rsort($ids);
rsort($users);

// array_push
array_push($ids, 20);
array_push($users, 'u2');

// array_pop
array_pop($ids);
array_pop($users);

// array-shift
array_shift($ids);

// array_slice
// $i1 = array_slice($ids, 4, 3);
// var_dump($i1);

// array_splice

// array_sum
$op = 'sum of ids: '. array_sum($ids);

// array_search
$op = 'user is at index: '. array_search('u0', $users);

// explode
$tags = 'tech, code, program';
$tagsarr = explode(',', $tags);
var_dump($tagsarr);

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
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">IDS Array:</h2>
            </p>
            <pre>
                <?php print_r($ids); ?>
            </pre>
            <h2 class="text-xl font-semibold my-4">Users Array:</h2>
            </p>
            <pre>
                <?php print_r($users); ?>
            </pre>
        </div>
    </div>
</body>

</html>