<?php
function isIsogram($string) {
  $stringArray = str_split(strtolower($string));
  return count($stringArray) === count(array_unique($stringArray));
}