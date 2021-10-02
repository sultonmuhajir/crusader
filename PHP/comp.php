<?php
/*
|--------------------------------------------------------------------------
| Are they the "same"?
|--------------------------------------------------------------------------
|
*/

function comp($a1, $a2) {
   if (is_null($a1) || is_null($a2)) {
      return false;
   } else {
      $sqrt_a1 = array_map(fn($i) => $i ** 2, $a1);
      sort($sqrt_a1);
      sort($a2);
      return $sqrt_a1 == $a2;
   }
}


function comp($a1, $a2): bool {
   return (($a1 === null || $a2 === null) || !(sort($a1) && sort($a2))) ? false : array_map(function($el) {return $el ** 2;}, $a1) === $a2;
}


function comp($a1, $a2) {
   if(is_null($a1) || is_null($a2)) return false;
   $a1 = array_map(function($v) { return $v * $v; }, $a1);
   sort($a1);
   sort($a2);
   return $a1 == $a2;
}


function comp( $a1, $a2 ): bool {
   return ! is_null( $a1 ) and ! is_null( $a2 ) and array_sum( array_map( function ( $n ) { return $n * $n; }, $a1 ) ) == array_sum( $a2 ) ;
}


$a1 = null;
$a2 = [11 * 11, 121 * 121, 144 * 144, 19 * 19, 161 * 161, 19 * 19, 144 * 144, 19 * 19];
// a1 = [2, 3, 2]
// a2 = [4, 9, 6]
print_r(comp($a1, $a2));