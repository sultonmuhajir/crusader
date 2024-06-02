<?php
/*
|--------------------------------------------------------------------------
| Pascal's Triangle
|--------------------------------------------------------------------------
|
*/

function pascals_triangle($n) {
   $res = [];
   for ($i = 0; $i < $n; $i++) {
      $x = count($res) - $i;
      for ($j = 0; $j < $i + 1; $j++) {
         $res[] = $j === 0 || $j === $i ? 1 : $res[$x + $j] + $res[$x + $j - 1];
      }
   }
   return $res;
}


function pascals_triangle($n) {
   $pascal = [];
   for ($i = 0; $i < $n; $i++) {
      $num = 1;
      for ($j = 0; $j <= $i; $j++) {
         array_push($pascal, $num);
         $num = $num * ($i - $j) / ($j + 1);
      }
   }
   return $pascal;
}


function pascals_triangle($n) {
   $tmp=[]; $res=[];
   for($i=1; $i<=$n; ++$i){
      array_walk($tmp, function(&$x,$key) use ($tmp) {
         $x = $key==0 ? 0+$x : $x+$tmp[$key-1]; });
         array_push($tmp,1);
         $res= array_merge($res,$tmp);
      }
   return $res;
}


print_r(pascals_triangle(1));
print_r(pascals_triangle(2));
print_r(pascals_triangle(4));