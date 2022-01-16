<?php
/*
|--------------------------------------------------------------------------
| Length of missing array
|--------------------------------------------------------------------------
|
*/

function getLengthOfMissingArray($x) {
   if ($x == null || count($x) == 0) {
      return 0;
   } else {
      $res = [];
      for ($i = 0; $i < count($x); $i++) {
         if ($x[$i] == null) {
            return 0;
         } else {
            array_push($res, count($x[$i]));
         }
      }
      sort($res);
      if ($res[0] == 0) {
         return 0;
      } else {
         $last = $res[count($res) - 1];
         $i = 0;
         for ($j = $res[0]; $j <= $last; $j++) {
            if ($j != $res[$i]) {
               return $j;
            }
            $i += 1;
         }
      }
   }
}


function getLengthOfMissingArray($arrayOfArrays) {
   if(!$arrayOfArrays || in_array(0, $length_array = array_map('count', $arrayOfArrays))) return 0;
   $compare_array = range(min($length_array),max($length_array));
   return array_values(array_diff($compare_array, $length_array))[0];
}


function getLengthOfMissingArray($arrayOfArrays) {
   if (empty( $arrayOfArrays ) || in_array(0, $counts = array_map('count', $arrayOfArrays) ) ) return 0;
   return min(array_diff(range(min($counts),max($counts)), $counts));
}


function getLengthOfMissingArray($arrayOfArrays) {
   $a = array_map('count', (array)$arrayOfArrays);
   return $a && min($a) ? array_sum(range(min($a), max($a))) - array_sum($a) : 0;
}


print_r(getLengthOfMissingArray([
   [1, 0, 3, 3, 3, 1, 2, 3, 4, 0, 4],
   [4, 2],
   [1, 4, 4, 3, 1],
   [3, 1, 2, 0, 2, 4, 1],
   [],
   [3, 1, 0],
   [1, 1, 2, 0],
   [2, 4, 0, 3, 2, 2, 3, 0],
   [4, 0, 1, 0, 0, 4],
   [2, 4, 3, 0, 0, 3, 3, 0, 3],
   [4, 4, 3, 3, 2, 3, 4, 0, 0, 2]
]) . ' ' . 0 . '
');
print_r(getLengthOfMissingArray([]) . ' ' . 0 . '
');
print_r(getLengthOfMissingArray([null]) . ' ' . 0) . '
'; 