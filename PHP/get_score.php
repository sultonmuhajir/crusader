<?php
/*
|--------------------------------------------------------------------------
| Sequences and Series
|--------------------------------------------------------------------------
|
*/

function get_score(int $n): int {
   return $n * ($n + 1) * 25;
}


function get_score(int $n): int {
   return 50 * array_sum(range(1,$n));
}


function get_score(int $n): int {
   return 25 * ($n + $n * $n);
}


function get_score(int $n): int {
   $res = 0;
   for($i = 1; $i <= $n; $i++){
      $res = $res + ($i * 50);
   }
   return $res;
}


function get_score(int $n): int {
   return array_sum(range(50, 50 * $n, 50));
}


print_r(get_score(3));
print_r(get_score(5));