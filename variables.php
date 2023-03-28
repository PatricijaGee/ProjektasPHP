<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewort" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?= 'Post One'; ?></h1>
</body>
</html>

<?php 

$name = 'Pat';
$age = 24;
$has_kids = false;
$cash_on_hand = 3.55;

echo $has_kids;

//var_dump($cash_on_hand);

//echo $name . ' is ' . $age . ' years old';

//echo "$name is $age years old";

//echo "${name} is ${age} years old";

//echo '5' + '5';

$x = '5' + '5';

//var_dump($x);
//echo 10-5;
//echo 5*6;
//echo 10/2;
//echo 10%3;

define('HOST', 'localhost');
define('DB_NAME', 'devdb');

echo HOST;
?>
