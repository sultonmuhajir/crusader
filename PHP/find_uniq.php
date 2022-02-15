<?php
/*
|--------------------------------------------------------------------------
| Find the unique number
|--------------------------------------------------------------------------
|
*/

function find_uniq($a) {
   sort($a);
   return $a[0] == $a[1] ? array_pop($a) : $a[0];
}


function find_uniq(array $seq) {
   sort($seq);
   return current($seq) == next($seq) ? end($seq) : prev($seq);
}


function find_uniq($a) {
   foreach($a as $n) {
      $unique["$n"] = !isset( $unique["$n"] );
   }
   return array_search(1, $unique);
}


function find_uniq($a) {
   return substr_count(implode('', $a), max($a)) == 1  ? max($a) : min($a);
}


print_r(find_uniq([1, 1, 1, 2, 1, 1]));
print_r(find_uniq([ 0, 0, 0.55, 0, 0 ]));
print_r(find_uniq([ 3, 10, 3, 3, 3 ]));