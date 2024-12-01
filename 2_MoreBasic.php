<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2_More_Basic</title>
</head>

<!-- css -->
 <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing:border-box;
  }
 .cont2{
  max-width: 80% ;
  background-color: grey ;
  margin:  auto ;
  padding:23px ;
 }

</style>
<body>
  <div class="cont2">
    <h1>Lets learn about php </h1>
    

    <?php
    
    $age = 30 ;
    if($age>18) {
      echo "You are an adult";
    }
    else {
      echo "You are a child";
    }

    // Array in php 
    echo "<br>" ;
    $languages = array("Python","C++","php","Nodejs") ;
    echo $languages[2] ;
    echo "<br>" ;
    echo count($languages) ;

    // Loops in php

    echo "<br>";
    $a = 0 ;
    while ($a <= 10) {
      echo"<br>The value of a is :";
      echo $a ;
      $a++ ; // increment a by 1
    }

    echo "<br>";

    // Iterating array in php using while  loop

    $a = 0 ;
    while ($a < count($languages)) {
      echo"<br>The value of languages is  :";
      echo $languages[$a] ;
      $a++ ; // increment a by 1
    }

    //  php using do while loop
  
    echo "<br>";
    echo "'do while loop'" ;
    $b = 0 ;
    do {
      echo "<br> The value of b is :";
      echo $b ;
      $b ++ ;
    }while ($b <= 10) ;

    echo "<br>";

    //  php using for loop
 
    for($i = 50 ; $i<= 60; $i++) {
      if($i%2!= 0) {
      echo "<br>the value of i is :";
      echo $i ;
      }
    }

    echo "<br>";
    //  php using foreach loop

    foreach($languages as $lan) {
      echo "<br> The value of lan is :";
      echo $lan ;
    }

    echo "<br>";
    echo"<br>";
    // function in php
    
    function print5() {
      echo "<br>Five";
    }
    print5();
    print5();
    print5();
    print5();

    echo "<br>";
    echo "<br>";

    function print_num($num) {
      echo "<br> Your number is = ";
      echo $num ;
      }
      print_num(45);
      print_num(450);
      print_num(458);
      print_num(415);

    ?>
  </div>
</body>
</html>