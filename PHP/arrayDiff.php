<?php
/*
|--------------------------------------------------------------------------
| Array.diff
|--------------------------------------------------------------------------
|
*/

function arrayDiff($a, $b) {
   $res = [];
   for ($i=0; $i < count($b); $i++) { 
      $a = array_filter($a, fn($x) => $x != $b[$i] );
   }
   foreach ($a as $x) {
      array_push($res, $x);
   }
   return $res;
}


function arrayDiff($a, $b) {
   return array_values(array_diff($a, $b));
}


function arrayDiff($a, $b) {
   foreach ($a as $key=>$element){
      if (in_array($a[$key],$b)){
         unset($a[$key]);};
   }
   return array_values($a);
}


function arrayDiff($a, $b) {
   $result = array_filter($a, function($element) use ($b){
      return !in_array($element, $b);
   });
   return array_values($result);
}


print_r(arrayDiff([], [4, 5]));
print_r(arrayDiff([3, 4], [3]));
print_r(arrayDiff([1, 8, 2], [8]));


// []
// [4]
// [1, 8, 2]
// [3]