<?php

echo "<h1>Good Afternooon. Welcome to the classs</h1>";
echo "THis is my another line";
echo "<br>";
//setting the default timezone for kathmandu nepal
date_default_timezone_set("Asia/Kathmandu");
echo "Today Is: ".date('Y-m-d h:i:s');

/*
  #author: Your name
  #program: program for php basics code
  #date: 3rd feb 2023
  */

  /*Declaring the variable */
  $num1=20;
  $num2=20.22;
  $name="Ram";
  $confirm=true;
  $cart=array("pant"=>20,"shirt"=>15,"Jacket"=>25);
  echo gettype($cart);
  echo "<br>";

  $sum=$num1+$num2;
  echo "The sum of $num1 and $num2 is $sum<br>";
  echo 'The sum of $num1 and $num2 is $sum<br>';
  echo "The sum of $num1 and $num2 is ".number_format($sum,2)."<br>";
  echo 'THe sum of '.$num1 . " and ". $num2. " is ". $sum."<br>";



  $day =date('l');
  $day="Monday";
  if($day=="Friday"){
    echo "Good, Its good Firday";
  }
  else if($day=="Saturday" || $day=="Sunday"){
    echo "ITs holiday";
  }
  else{
    echo "ITs just regular days";
  }

?>