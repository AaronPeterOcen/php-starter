<?php

// $n1 = 5;
// $n2 = 16;
// $n3 = '20';
// $bool1 = true;
// $bool2 = false;
// $wrd = 'iam';


// // implicit conversion
// $r = $n1 + $n2;
// $r = $n1 + $n3;
// $r = $n1 + $bool1;
// $r = $n1 + $bool2; 
// $r = $n1 + $wrd; // error

// explicit conversion
// $r = (string) $n2;
// $r = (bool) $wrd;


// var_dump($r); 
$title ="\'Brad\'s PHP Blog | Introduction to PHP";
$author = "By: John Doe";
$body = "PHP (Hypertext Preprocessor) is a widely used server-side scripting
        language that has revolutionized web development. With its simplicity,
        flexibility, and vast community support, PHP has become the backbone of
        countless dynamic websites and web applications.";
$pageTitle = "Introduction to PHP";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
  </head>
  <body>
    <main>
      <h1><?= $pageTitle?></h1>
      <p><?= $author ?></p>
      <p>
        <?= $body?>
      </p>
    </main>
  </body>
</html>
