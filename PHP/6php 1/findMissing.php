<?php
/*
|--------------------------------------------------------------------------
| Find the missing term in an Arithmetic Progression
|--------------------------------------------------------------------------
|
*/

function findMissing($list) {
   return ($list[count($list) - 1] + $list[0]) * (count($list) + 1) / 2 - array_sum($list);
}


function findMissing($list) {
   $increment = (end($list)-$list[0])/count($list);
   for($i=0;$i<count($list)-1;$i++){
      if($list[$i]+$increment != $list[$i+1]){
         return $list[$i]+$increment;
      }
   }
   return $list[0];
}


function findMissing($list) {
   return (reset($list) + end($list)) / 2 * (count($list) + 1) - array_sum($list);
}


print_r(findMissing([1, 2, 3, 4, 6, 7, 8, 9]) . ' ' . 5 . '
');
print_r(findMissing([1, 3, 4, 5, 6, 7, 8, 9]) . ' ' . 2 . '
');