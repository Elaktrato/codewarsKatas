<?php
function solution($number){
    $sum = 0;
    if($number > 0){
      for($i = $number-1; $i >= 0; $i--){
          
        if($i % 3 == 0 || $i % 5 == 0 ){
            $sum += $i;
        }
      }
    }
    return $sum;
  }