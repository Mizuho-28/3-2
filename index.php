<?php
  $fruits = ["りんご" => 300,"みかん" => 50,"もも" => 500];
  $qty = [1,3,6]; //個数は自身で定義しました//
  $i =0;

  function getPrice($value , $qty) {
   $total = $value * $qty;
   return $total;
  }

  foreach ($fruits as $key => $value){

  echo $key."は".getPrice($value,$qty[$i])."円です。<br>";
  $i++;
    }
 
?>