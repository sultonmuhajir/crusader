<?php
/*
|--------------------------------------------------------------------------
| Which are in?
|--------------------------------------------------------------------------
|
*/

function inArray($array1, $array2) {
   $res = [];
   foreach ($array1 as $a1) {
      foreach ($array2 as $a2) {
         if (strpos($a2, $a1) !== false) {
            $res[] = $a1;
            break;
         }
      }
   }
   sort($res);
   return $res;
}


function inArray($find, $search, $res=[]) {
   $str = " ".implode(",", $search);
   foreach($find as $x){ if( strpos($str, $x) ) array_push($res, $x); }
   sort($res); return $res;
}


function inArray($array1, $array2) {
   sort($array1);
   return array_values(array_filter($array1, function ($str1) use ($array2) {
      return strstr(implode(' ', $array2), $str1);
   }));
}


print_r(inArray(["arp", "live", "strong"], ["lively", "alive", "harp", "sharp", "armstrong"]));