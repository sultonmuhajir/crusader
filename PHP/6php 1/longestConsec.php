<?php
/*
|--------------------------------------------------------------------------
| Consecutive strings
|--------------------------------------------------------------------------
|
*/

function longestConsec($strarr, $k) {
   if (count($strarr) == 0 || $k > count($strarr) || $k <= 0) return "";
   $res = "";
   for ($i = 0; $i <= count($strarr) - $k; $i++) {
      $curr = implode('', array_slice($strarr, $i, $k));
      if (strlen($curr) > strlen($res)) $res = $curr;
   }
   return $res;
}


function longestConsec($strarr, $k) {
   for ($i = 0; $i < count($strarr) - $k + 1; $i++) {
      $c = implode('', array_slice($strarr, $i, $k));
      $l = strlen($c) > strlen($l) ? $c : $l;
   }
   return $k > 0 ? $l : '';
}


function longestConsec($strarr, $k) {
   if (count($strarr) == 0 or $k > count($strarr) or $k <= 0) return "";  
   foreach ($strarr as $key => $value) {
     $r[] = join('', array_slice($strarr, $key, $k));    
   }
   $a_len = array_map("strlen", $r);  
   return $r[array_search(max($a_len), $a_len)];
}


print_r(longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], 2) . " abigailtheta
");
print_r(longestConsec([], 3) . " 
");
print_r(longestConsec(["wlwsasphmxx","owiaxujylentrklctozmymu","wpgozvxxiu"], 2) . " wlwsasphmxxowiaxujylentrklctozmymu
");
print_r(longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], -2) . " 
");
print_r(longestConsec(["it","wkppv","ixoyx", "3452", "zzzzzzzzzzzz"], 3) . " ixoyx3452zzzzzzzzzzzz
");
print_r(longestConsec(["it","wkppv","ixoyx", "3452", "zzzzzzzzzzzz"], 15) . " 
");
print_r(longestConsec(["it","wkppv","ixoyx", "3452", "zzzzzzzzzzzz"], 0) . " 
");