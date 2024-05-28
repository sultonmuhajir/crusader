<?php
/*
|--------------------------------------------------------------------------
| Rectangle into Squares
|--------------------------------------------------------------------------
|
*/

function sqInRect($lng, $wdth) {
   if ($lng === $wdth) {
      return null;
   }
   $squares = [];
   while ($lng != 0 && $wdth != 0) {
      if ($lng > $wdth) {
         $squares[] = $wdth;
         $lng -= $wdth;
      } else {
         $squares[] = $lng;
         $wdth -= $lng;
      }
   }
   return $squares;
}


function sqInRect($width, $height) {
   if ($width === $height) return null;
   $a = max($width, $height);
   $b = min($width, $height);
   if ($a == 2 * $b) return [$b, $b];
   return array_merge([$b], sqInRect($b, $a - $b));
}


function sqInRect($a, $b) {
   if ($a == $b) return null;
   $arr = array();
   while ($a > 0 && $b > 0) {
      array_push($arr, $a > $b ? $b : $a);
      $a > $b ? $a -= $b : $b -= $a;
   }
   return $arr;
}


print_r(sqInRect(5, 5));
print_r(sqInRect(5, 3));
print_r(sqInRect(3, 5));
print_r(sqInRect(20, 14));