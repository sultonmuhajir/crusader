<?php
/*
|--------------------------------------------------------------------------
| Highest Scoring Word
|--------------------------------------------------------------------------
|
*/

function high($x) {
   $max = 0; $res = "";
   foreach (explode(" ", $x) as $word) {
      $score = 0;
      for ($i = 0; $i < strlen($word); $i++) 
         $score += ord($word[$i]) - 96;
      if ($score > $max) {
         $max = $score; $res = $word;
      }
   }
   return $res;
}


function high($x) {
   $res = array_combine(explode(' ',$x),array_map(function($e) {
      return array_sum(array_map(function($x) {
         return ord($x)-96;
      }, str_split($e)));
   }, explode(' ',$x)));
   return array_search(max($res), $res);
}


function high($x) {
   $scores = [];
   foreach (explode(' ', $x) as $i => $word) {
      $scores[$word] = array_reduce(str_split($word), function($score, $letter) {
         return $score + ord($letter) - 96;
      }, 0);
   }
   return array_keys($scores, max($scores))[0];
}


print_r(high("man i need a taxi up to ubud") . " taxi
");
print_r(high("what time are we climbing up the volcano") . " volcano
");
print_r(high("take me to semynak") . " semynak
");
print_r(high("aa b") . " aa
");