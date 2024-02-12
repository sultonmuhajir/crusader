<?php
/*
|--------------------------------------------------------------------------
| Unique In Order
|--------------------------------------------------------------------------
|
*/

function uniqueInOrder($iterable) {
   if (is_string($iterable)) $iterable = str_split($iterable, 1);
   $res = [];
   for ($i = 0; $i < count($iterable); $i++) {
      if ($iterable[$i] != $iterable[$i + 1]) {
         $res[$i] = $iterable[$i];
      }
   }
   return array_values($res);
}


function uniqueInOrder($i){
   return array_values(array_filter(
      !is_array($i) ? str_split($i) : $i, 
      function($v, $k) use ($i) {return ($v !== $i[$k-1]);}, 1
   ));
}


function uniqueInOrder($iterable){
   $iterable = is_array($iterable) ? implode("", $iterable) : $iterable;
   $ret = preg_replace('/(\w{1})\1+/', '$1', $iterable);
   return strlen($ret) ? str_split($ret) : [];
}


print_r(uniqueInOrder("AAAABBBCCDAABBB"));