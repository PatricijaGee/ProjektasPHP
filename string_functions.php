<?php

$string = 'Hello World';

//Get the length of a string
echo strlen($string);

//Find the position of the first substring in a string
echo strpos($string, 'o');

//find find the position of the last substring in a string
echo strrpos($string, 'o');

//Reverse a string
echo strrev($string);

//convert all characters to lowercase
echo strtolower($string);

//Convert all characters to uppercase
echo strtoupper($string);

//Uppercse the first char of each word
echo ucwords($string);

//String replace
echo str_replace('World', 'Everyone', $string);

//Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

//Starts with
if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}

//ends with
if (str_ends_with($string, 'ld')) {
    echo 'YES';
}

//HTML entities
$string2 = '<script>alert(1)</script>';
//echo htmlspecialchars($string2);

printf('%s likes to %s', 'Brad', 'code');
printf('1+1=%f', 1+1);//or %d without the decimals

?>