<?php
/*
|--------------------------------------------------------------------------
| Find The Parity Outlier
|--------------------------------------------------------------------------
|
*/

function find($integers) {
   $even = [];
   $odd = [];
   for ($i=0; $i < count($integers); $i++) { 
      if ($integers[$i] % 2 == 0) {
         array_push($even, $integers[$i]);
      } else {
         array_push($odd, $integers[$i]);
      }
   }
   return count($even) == 1 ? $even[0] : $odd[0];
}


function find($i) {
   foreach ($i as $x)
      $x % 2 == 0 ? $even[] = $x : $odd[] = $x;
   return $odd < $even ? $odd[0] : $even[0];
}


function find($integers) {
   $even = array_filter($integers,function($a){return $a % 2 === 0;});
   $odd = array_filter($integers,function($a){return $a % 2 !== 0;});
   return count($even) > 1 ? pos(array_diff($integers,$even)) : pos(array_diff($integers,$odd));
}


function find($ints) {
   $par = abs($ints[0]%2); $par= $par==abs($ints[1]%2) ? $par : abs($ints[2]%2);
   foreach($ints as $x){ if( abs($x%2) != $par )return $x; }
}


print_r(find([2, 4, 0, 100, 4, -3, 2602, 36]). ' ' . -3 . '
');
print_r(find([2, 4, 0, 100, 4, 11, 2602, 36]). ' ' . 11 . '
');
print_r(find([160, 3, 1719, 19, 11, 13, -21]). ' ' . 160 . '
');