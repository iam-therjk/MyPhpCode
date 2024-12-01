<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cwh code</title>
</head>
<body>
  <div class="container">
    This is my first php website

    <?php
    define('PI',3.14) ;
    echo "Hello world and this is printed using php";
    ?>

<?php
    echo "Hello world again";
    ?>

<?php
    echo "Hello world 3";

  $var1 = 34 ;
  $var2 = 56 ;
  echo $var1 ;
  echo $var2 ; 
  echo $var1 + $var2 ;
  echo "<br>" ;
 echo $var1 - $var2 ;

// arithmetic operators
echo "<br>"  ;
// echo "The value of var1 and  var2 is = " . $var1 . " and " . $var1 . " " ;
echo "The value of var1 +  var2 is = " ;
echo "<br>" ;
echo $var1 + $var2 ;
echo "<br>" ;

echo "The value of var1 -  var2 is = " ;
echo "<br>" ;
echo $var1 - $var2 ;
echo "<br>" ;

echo "The value of var1 *  var2 is = " ;
echo "<br>" ;
echo $var1 * $var2 ;
echo "<br>" ;

echo "The value of var1 /  var2 is = " ;
echo "<br>" ;
echo $var1 / $var2 ;

// Comparison operators
echo "<br>" ;

echo "The value of 1 == 4 is " ;
echo var_dump(1==4) ;
echo "<br>" ;
echo "The value of 1 != 4 is " ;
echo var_dump(1!=4) ;
echo "<br>" ;
echo "The value of 1 >= 4 is " ;
echo var_dump(1>=4) ;
echo "<br>" ;
echo "The value of 1 <= 4 is " ;
echo var_dump(1<=4) ;
echo "<br>" ;

// Increment and decrement operators
echo "<br>" ;
echo $var1 = 10 ;
echo "<br>" ;
echo $var1++ ;
echo "<br>" ;
echo $var1--;
echo "<br>" ;
echo ++$var1 ;
echo "<br>" ;
echo --$var1 ;
echo "<br>" ;

// Logical operators

// and(&&)
// or(||)
// xor(^)
// not(!)

$myVar = (true) and (true)  ;
$myVar = (false) and (true)  ;
echo "<br>" ;
echo var_dump($myVar) ;



?>


<?php

// Data types in PHP

// 1. String
// 2. Integer
// 3. Float
// 4. Boolean
// 5. Array
// 6. Object

// echo "<br> Data types in PHP <br>" ;
// $var = "This is a string" ; 
// echo var_dump($var) ;
// echo "<br>" ;
// $var = 67 ;
// echo var_dump($var) ;

// echo "<br>" ;
// echo PI3 ;
?>
  </div>
</body>
</html>