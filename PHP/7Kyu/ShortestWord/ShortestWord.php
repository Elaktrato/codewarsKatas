<?php
function findShort($str){
    $wordArray = explode(' ', $str);
    $shortestWord = $wordArray[0];
    foreach($wordArray as $word){
      if(strlen($word)<=$shortestWord) $shortestWord = strlen($word);
    }
    return $shortestWord;
  }