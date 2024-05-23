<?php
/*
|--------------------------------------------------------------------------
| Matrix Addition
|--------------------------------------------------------------------------
|
*/

function matrix_addition($a, $b) {
   $res = [];
   for ($i = 0; $i < count($a); $i++) {
      $row = [];
      for ($j = 0; $j < count($a[$i]); $j++) {
         $row[] = $a[$i][$j] + $b[$i][$j];
      }
      $res[] = $row;
   }
   return $res;
}


function matrix_addition(array $a, array $b): array {
   return array_map(function ($rowA, $rowB) {
      return array_map (function ($numa, $numb) {
         return $numa + $numb;
      }, $rowA, $rowB);
   }, $a, $b);
}


function matrix_addition(array $a, array $b): array {
   for($i = 0; $i < count($a); $i++) {
      for($j = 0; $j < count($a[$i]); $j++) {
         $result[$i][$j] = $a[$i][$j] + $b[$i][$j];
      }
   }
   return $result;
}