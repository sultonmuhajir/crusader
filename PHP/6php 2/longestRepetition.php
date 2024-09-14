<?php
/*
|--------------------------------------------------------------------------
| Character with longest consecutive repetition
|--------------------------------------------------------------------------
|
*/

function longestRepetition($s) {
   $max_c = ""; $max_n = 0;
   $curr_c = ""; $curr_n = 0;
   for ($i = 0; $i < strlen($s); $i++) {
      $char = $s[$i];
      if ($char === $curr_c) {
         $curr_n++;
      } else {
         $curr_c = $char;
         $curr_n = 1;
      }
      if ($curr_n > $max_n) {
         $max_n = $curr_n;
         $max_c = $curr_c;
      }
   }
   return [$max_c, $max_n];
}


function longestRepetition($s) {
   preg_match_all('/(\w)\1*/', $s, $matches, PREG_SET_ORDER);
   return array_reduce($matches, fn ($memo, $el) => ($memo[1] < strlen(reset($el))) ? [end($el), strlen(reset($el))] : $memo, ['', 0]);
}


function longestRepetition($s) {
   $counter = 1; $max = empty($s) ? 0 : 1; $char = empty($s) ? '' : $s[0];
   for($i = 0; $i < strlen($s) - 1; $i++){
      if($s[$i] == $s[$i+1]) {$counter++; $tmp = $max; $max = max($max, $counter); if($tmp != $max) $char = $s[$i];}
      if($s[$i] != $s[$i+1]) {$counter = 1;}
   }
   return [$char, $max];
}


print_r(longestRepetition("aaaabb"));
print_r(longestRepetition("cbdeuuu900"));