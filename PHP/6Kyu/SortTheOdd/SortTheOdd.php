<?php
function sortArray(array $arr) : array {
    // check for an empty array
    if(empty($arr)) return [];
    //get the odd numbers
    $odds = array(...array_filter($arr, "odd"));
    // sorting the odd numbers
    sort($odds);
    $sortedArray = [];
    
    $j = 0;
    for($i = 0; $i < count($arr); $i++){
      if($arr[$i] % 2 === 0){
        $sortedArray[] = $arr[$i];
      }else{
        $sortedArray[] = $odds[$j];
        $j++;
      }
    }
    return $sortedArray;
  }
  
  function odd($var)
  {
      return $var & 1;
  }