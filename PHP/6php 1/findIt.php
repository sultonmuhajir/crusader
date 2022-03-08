<?php
/*
|--------------------------------------------------------------------------
| Find the odd int
|--------------------------------------------------------------------------
|
*/

function findIt(array $seq) : int
{
   return array_reduce($seq, function($a, $b) {return $a ^ $b;});
}


function findIt(array $seq) : int
{
   foreach($seq as $val) if (array_count_values($seq)[$val] % 2) return $val;
}


function findIt(array $seq) : int {
   foreach (array_count_values($seq) as $i => $e) {
      if ($e % 2) {
         return $i;
      }
   }
}


function findIt(array $seq) : int {
   return key(array_filter(array_count_values($seq), function($a) {return $a % 2 !== 0;}));
}


print_r(findIt([20, 1, -1, 2, -2, 3, 3, 5, 5, 1, 2, 4, 20, 4, -1, -2, 5]). ' ' . 5 . '
');
print_r(findIt([1, 1, 2, -2, 5, 2, 4, 4, -1, -2, 5]). ' ' . -1 . '
');
print_r(findIt([20, 1, 1, 2, 2, 3, 3, 5, 5, 4, 20, 4, 5]). ' ' . 5 . '
');
print_r(findIt([10]). ' ' . 10 . '
');
print_r(findIt([1, 1, 1, 1, 1, 1, 10, 1, 1, 1, 1]). ' ' . 10 . '
');
print_r(findIt([5, 4, 3, 2, 1, 5, 4, 3, 2, 10, 10]). ' ' . 1 . '
');