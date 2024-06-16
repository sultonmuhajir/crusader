<?php
/*
|--------------------------------------------------------------------------
| Pair of gloves
|--------------------------------------------------------------------------
|
*/

function numberOfPairs($gloves) {
   $colorCount = array_count_values($gloves);
   $pairs = 0;
   foreach ($colorCount as $count) {
      $pairs += floor($count / 2);
   }
   return $pairs;
}


function numberOfPairs($gloves) {
   return array_sum(array_map(fn($v) => intval($v / 2), array_count_values($gloves)));
}


function numberOfPairs($gloves) {
   return array_reduce(array_count_values($gloves), fn ($sum, $item) =>  $sum += floor($item/2));
}


print_r(numberOfPairs(["red", "green", "red", "blue", "blue"]) . ' ' . 2 . "
");
print_r(numberOfPairs(["red", "red", "red", "red", "red", "red"]) . ' ' . 3 . "
");