<?php
function odd_or_even(array $a): string {
  // first check whether the array is empty
  if(empty($a)){
    return "even";
  }else{
    $result = array_sum($a) % 2 === 0 ? "even" : "odd";
    return $result;
  }
}