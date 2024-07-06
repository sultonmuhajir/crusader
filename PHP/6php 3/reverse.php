<?php
/*
|--------------------------------------------------------------------------
| Reverse every other word in the string
|--------------------------------------------------------------------------
|
*/

function reverse($str) {
   $res = [];
   $arr = explode(' ', $str);
   for ($i = 0; $i < count($arr); $i++) {
      if ($i % 2 != 0) {
         array_push($res, strrev($arr[$i]));
      } else {
         array_push($res, $arr[$i]);
      }
   }
   return implode(' ', array_filter($res, function($i) {return $i != '';}));
}


function reverse($str) {
   $split = explode(' ', trim($str));
   return implode(' ', array_map(function($item, $i) {
      return $i % 2 != 0 ? strrev($item) : $item;
   }, $split, array_keys($split)));
}


function reverse($str) {
   $words = preg_split("/ +/", trim($str));
   for ($i = 1; $i < count($words); $i += 2) {
      $words[$i] = strrev($words[$i]);
   }
   return implode(" ", $words);
}


function reverse($str) {
   $a = explode(" ",trim($str));
   for ($x = 1; $x < count($a); $x+=2) $a[$x]=strrev($a[$x]);
   return implode(" ", $a);  
}


print_r(reverse("Reverse this string, please!") . " Reverse siht string, !esaelp");
print_r(reverse("I really don't like reversing strings!") . " I yllaer don't ekil reversing !sgnirts");
print_r(reverse("   "));