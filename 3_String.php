<?php 

$str = "This" ;
echo "<br>" ;
echo $str; ;
$lenn = strlen($str);
echo "The length of this string is " . $lenn; 
echo "<br>";
echo "I am Ranjeet " . "I am a programmer";

// . is used for concatenation in PHP. It is used to join two strings together. 

echo "<br>";
echo "The number of words in this string is ". 
str_word_count($str) .", Thank you"."<br>";

// str_word_count () is a PHP function that returns the number of words in a string.

// strrev () is a PHP function that returns the string with characters in reverse order. 

echo "The string in reverse order is = " . strrev($str) . "<br>";
echo "<br>";

// strpos () is a PHP function that returns the position of the first occurrence of a substring in a string

echo "The search for is in this string is ". strpos($str,"is") . ", Thank you"."<br>";

// str_replace () is a PHP function that replaces some characters in a string with some other characters.

echo "The replaced string is ". str_replace("is","at", $str) . " Thank you"."<br>";


?>