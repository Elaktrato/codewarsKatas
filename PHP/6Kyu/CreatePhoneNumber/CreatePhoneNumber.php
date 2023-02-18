<?php 
function createPhoneNumber($numbersArray) {
  $numberString = implode('', $numbersArray);
  $countryCode = "(".substr($numberString, 0, 3).")";
  $middlePart = substr($numberString, 3, 3);
  $endPart = substr($numberString, 6, 4);
  
  return  $countryCode." ".$middlePart."-".$endPart;
}
echo createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]);