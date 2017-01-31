<?php
  for ($i=1; $i<= 101; $i++) {
    if($i%3==0) {
      echo "Fizz";}
    elseif ($i%5==0) {
      echo "Buzz";}
    elseif ($i%3==0 AND $i%5==0){
      echo "Fizzbuzz";}
    else {
      echo $i;}
  }
    ?>
