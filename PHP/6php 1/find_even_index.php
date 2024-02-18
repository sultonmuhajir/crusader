<?php
/*
|--------------------------------------------------------------------------
| Equal Sides Of An Array
|--------------------------------------------------------------------------
|
*/

function find_even_index($arr){
   for ($i = 0; $i < count($arr); $i++) {
      if (array_sum(array_slice($arr, 0, $i)) === array_sum(array_slice($arr, $i + 1))) {
         return $i;
      }
   }
   return -1;
}


function find_even_index(array $arr): int {
   $sum = array_sum($arr);
   $c = 0;
   foreach ($arr as $N => $n) if ($sum - $c == $c += $n) return $N;
   return -1;
}


function find_even_index($arr){
   $sum_right = array_sum($arr);
   $sum_left = 0;
   foreach($arr as $i=>$a){
      $sum_right-=$a;
      if ($sum_left == $sum_right) return $i;
      $sum_left +=$a;
   }
   return -1;
}


print_r(find_even_index([1,2,3,4,3,2,1]) . ' ' . 3 . '
');
print_r(find_even_index([1,100,50,-51,1,1]) . ' ' . 1 . '
');
print_r(find_even_index([1,2,3,4,5,6]) . ' ' . -1 . '
');
print_r(find_even_index([20,10,30,10,10,15,35]) . ' ' . 3 . '
');
print_r(find_even_index([20,10,-80,10,10,15,35]) . ' ' . 0 . '
');