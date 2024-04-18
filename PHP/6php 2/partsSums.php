<?php
/*
|--------------------------------------------------------------------------
| Sums of Parts
|--------------------------------------------------------------------------
|
*/

function partsSums($ls) {
   $sum = array_sum($ls);
   $res = [$sum];
   for ($i = 0; $i < count($ls); $i++) {
      $sum -= $ls[$i];
      array_push($res, $sum);
   }
   return $res;
}


function partsSums($ls) {
   for ($i = count($ls); $i > -1; $i--) {
     $ls[$i] = ($ls[$i] ?? 0) + ($ls[$i + 1] ?? 0);
   }
   return $ls;
}


function partsSums($ls) {
   $result = [array_sum($ls)];
   foreach($ls as $val) {
      $result[] = end($result) - $val;
   }
   return $result;
}


print_r(partsSums([]));
print_r(partsSums([0, 1, 3, 6, 10]));
print_r(partsSums([1, 2, 3, 4, 5, 6]));