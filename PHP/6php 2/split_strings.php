<?php
/*
|--------------------------------------------------------------------------
| Split Strings
|--------------------------------------------------------------------------
|
*/

function solution($s) {
   $res = [];
   for ($i = 0; $i < strlen($s); $i += 2) {
      $x = substr($s, $i, 2);
      if (strlen($x) < 2) $x .= "_";
      array_push($res, $x);
   }
   return $res;
}


function solution($str): array {
   preg_match_all('/\w{2}/', $str . '_', $matches);
   return array_values($matches[0]);
}


function solution($str) {
   return array_slice(str_split("{$str}__", 2), 0, -1);
}


print_r(solution("abcdef"));
print_r(solution("abcdefg"));
print_r(solution(""));