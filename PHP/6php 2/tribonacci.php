<?php
/*
|--------------------------------------------------------------------------
| Tribonacci Sequence
|--------------------------------------------------------------------------
|
*/

function tribonacci($signature, $n) {
   if ($n === 0) return [];
   $res = array_slice($signature, 0, $n);
   while (count($res) < $n) {
      $x = array_sum(array_slice($res, -3));
      array_push($res, $x);
   }
   return $res;
}


function tribonacci($signature, $n) {
   if (sizeof($signature) >= $n) {
      return array_splice($signature, 0, $n);
   }
   $signature[] = array_sum(array_slice($signature, -3)); 
   return tribonacci($signature, $n);
}


function tribonacci(array $signature, int $n): array {
   for ($i = $n - 3; $i > 0; $i--) {
      $signature[] = array_sum(array_slice($signature, -3));
   }
   return array_slice($signature, 0, $n);
}


print_r(tribonacci([1, 1, 1], 10));
print_r(tribonacci([0, 0, 1], 10));
print_r(tribonacci([0, 1, 1], 10));