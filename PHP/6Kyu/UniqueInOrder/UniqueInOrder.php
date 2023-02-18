<?php
function uniqueInOrder($iterable){
  if(empty($iterable)) return [];

  switch(gettype($iterable)){
    case "array":
      return filterDuplicates($iterable);
    case "string":
      return filterDuplicates(str_split($iterable));
    // technically you could include other types as well, but I was lazy
    default:
      return "not a string nor an array";
  }
}

function filterDuplicates($array){
  $result[] = $array[0]; 
  for($i = 1; $i < count($array); $i++){
    if($array[$i] !== $array[$i - 1]){
      $result[] = $array[$i];
    }
  }
  return $result;
}