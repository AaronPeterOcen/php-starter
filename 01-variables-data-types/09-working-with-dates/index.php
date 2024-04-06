<?php
$output = null;

// get year
$output = date('Y');
$output = date('Y', 990909000);


$output = date('Y', strtotime('2001-14-01'));

// get month
$output = date('m');

// get day
$output = date('d');
$output = date('l');

// get month-day-year
$output = date('Y-m-d');
$output = date('m-d-Y');

// get min
$output = date('i');

// get sec
$output = date('s');

// get time format
$output = date('a');

// all together
$output = date('m-d-Y h:i:s a');






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
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>