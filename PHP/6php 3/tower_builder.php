<?php
/*
|--------------------------------------------------------------------------
| Build Tower
|--------------------------------------------------------------------------
|
*/

function tower_builder($n) {
   $res = [];
   for ($i = 0; $i < $n; $i++) {
      $x = str_repeat("*", 2 * $i + 1);
      $y = str_repeat(" ", $n - $i - 1);
      array_push($res, $y . $x . $y);
   }
   return $res;
}


function tower_builder(int $n): array {
   return array_map(function($m) use ($n) {
      return str_repeat(' ', $n - $m) . str_repeat('*', $m * 2 - 1) . str_repeat(' ', $n - $m);
   }, range(1, $n));
}


function tower_builder(int $n): array {
   $pad = $n * 2 - 1;
   $x = 1;
   $arr = [];
   while ($n --> 0) {
      $arr[] = str_pad(str_repeat('*', $x), $pad, ' ', STR_PAD_BOTH);
      $x += 2;
   }
   return $arr;
}


print_r(tower_builder(1));
print_r(tower_builder(2));
print_r(tower_builder(3));