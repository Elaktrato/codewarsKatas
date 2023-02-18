<?php
function is_solved(array $board): int {
  $result = 0;
  
  //checking whether there's a full line or a full column
  for($i = 0; $i < count($board); $i++){
    if(count(array_unique($board[$i])) === 1){
      if($board[$i][0] !== 0) {
	      return $board[$i][0]; 
	      break;
      }
    }elseif(($board[0][$i] === $board[1][$i]) && ($board[1][$i] === $board[2][$i])){
      if($board[0][$i] !== 0) {
	      return $board[0][$i]; 
	      break;
	      	
      }
    }
  }
  
  //If there's no full line or column, we check for the diagonals
  if((($board[0][0] === $board[1][1]) && ($board[1][1] === $board[2][2])) || (($board[0][2] === $board[1][1]) && ($board[1][1] === $board[2][0]))){
     if($board[1][1] !== 0) {
      return $board[1][1]; 
    }
  }
  
  // We didn't find a full line or column, so let's see whether the game is still going by checking whether there's still an empty field
  if(searchForZero($board) === true){
    return -1;
  }else{
    return 0;
  }
}

function searchForZero($array) {
   foreach ($array as $val) {
       if (in_array(0, $val)) {
           return true;
       }
   }
   return false;
}