<?php
/*
|--------------------------------------------------------------------------
| Fibonacci, Tribonacci and friends
|--------------------------------------------------------------------------
|
*/

function Xbonacci($s, $n) {
   $res = array_slice($s, 0, $n);
   for ($i = count($s); $i < $n; $i++) {
      $sum = array_sum(array_slice($res, $i - count($s)));
      array_push($res, $sum);
   }
   return $res;
}


function Xbonacci($s, $n) {
	$c = count($s);
	while(count($s)<$n){
      array_push($s, array_sum(array_slice($s, $c*-1)));
	}
	return array_slice($s, 0, $n);
}


function Xbonacci (array $a, int $steps) {
   $count = count($a);
   for ($i = 0; $i < $steps; $i++) {
      $a[] = array_sum(array_slice($a, $i, $count));
   }
   return array_slice($a, 0, $steps);
}


print_r(Xbonacci([0, 1], 10));
print_r(Xbonacci([1, 1], 10));
print_r(Xbonacci([0, 0, 0, 0, 1], 10));