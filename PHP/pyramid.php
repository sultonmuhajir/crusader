<?php
/*
|--------------------------------------------------------------------------
| Pyramid Array
|--------------------------------------------------------------------------
|
*/

function pyramid($n) {
   $res = [];
   for ($i = 0; $i < $n; $i++) {
      $temp = [];
      for ($j = 0; $j <= $i; $j++) {
         array_push($temp, 1);
      }
      array_push($res, $temp);
   }
   return $res;
}


function pyramid($n) {
   return $n? array_map(function($i) {return array_fill(0, $i, 1);}, range(1, $n)): [];
}


function pyramid($n) {
   $out = [];
   if ($n > 0) {
      $u=0;
      do {
         array_push($out, array_fill(0, ++$u, 1));
      } while (--$n > 0);
   }
   return $out;
}


function pyramid($n) {
   $res = [];
   for ($i = 1; $i <= $n; $i++) {
      $res[] = array_fill(0, $i, 1);
   }
   return $res;
}


print_r(pyramid(0));
print_r(pyramid(2));


// []
// [ [1], [1, 1] ]