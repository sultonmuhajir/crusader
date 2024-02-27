<?php
/*
|--------------------------------------------------------------------------
| Sort the odd
|--------------------------------------------------------------------------
|
*/

function sortArray($array) {
   $odd = array_filter($array, fn($num) => $num % 2 !== 0);
   sort($odd);
   return array_map(function($num) use (&$odd) {
      return $num % 2 !== 0 ? array_shift($odd) : $num;
   }, $array);
}


function sortArray(array $arr) : array {
   $vals = array_filter($arr, fn($v) => $v%2 != 0);
   $keys = array_keys($vals);
   sort($vals);
   return array_replace($arr, array_combine($keys, $vals));
}


function sortArray(array $arr) : array {
   $odds = array_filter($arr, fn($n) => $n % 2);
   sort($odds);
   foreach ($arr as &$n) {
      $n = $n % 2 ? array_shift($odds) : $n;
   }
   return $arr;
}


print_r(sortArray([5, 3, 2, 8, 1, 4]));
print_r(sortArray([5, 3, 1, 8, 0]));
print_r(sortArray([]));