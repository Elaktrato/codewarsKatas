<?php
function arrayDiff($a, $b) {
    return array(...array_diff($a, $b));
  }
  // how the heck is this a 6Kyu?