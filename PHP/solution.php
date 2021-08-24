<?php
/*
|--------------------------------------------------------------------------
| Multiples of 3 or 5
|--------------------------------------------------------------------------
|
*/

function solution($number){
   $sum = 0;
   for ($i = 1; $i < $number; $i++) {
      if ($i % 3 == 0 || $i % 5 == 0) {
         $sum += $i;
      }
   }
   return $sum;
}


function solution($number){
   return array_sum(array_filter(range(1, $number - 1), function($n) {return $n % 3 == 0 or $n % 5 == 0;}));
}


function solution($number){
   $counter = 0;
   foreach(range(1, $number - 1) as $n){
      if($n % 3 == 0 || $n % 5 == 0) $counter += $n;
   }
   return $counter;
}


function solution($number){
   return array_sum(array_filter(range(1, $number-1), function ($item) {
      return $item % 3 == 0 || $item % 5 == 0;
   }));
}


print_r(solution(10) . ' ' . 23);