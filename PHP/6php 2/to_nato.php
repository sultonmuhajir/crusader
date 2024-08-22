<?php
/*
|--------------------------------------------------------------------------
| If you can read this...
|--------------------------------------------------------------------------
|
*/

function to_nato($words) {
   global $NATO;
   $res = [];
   for ($i = 0; $i < strlen($words); $i++) {
      if (ctype_alpha($words[$i])) {
         $res[] = $NATO[strtoupper($words[$i])];
      } elseif (strpos('.,!?', $words[$i]) !== false) {
         $res[] = $words[$i];
      }
   }
   return implode(' ', $res);
}


function to_nato(string $str) : string {
   global $NATO;
   $code = preg_match_all('/(\w|\.|\?|\!|\,)/', strtoupper($str), $code_m);
   return join(' ', array_map(fn ($x) => $NATO[$x], $code_m[0]));
}


function to_nato($words) {
   global $NATO;
   return join(' ', array_filter(array_map(fn($l) => $NATO[strtoupper($l)] ?? $l, str_split($words)), fn($e) => $e != ' '));
}


print_r(
   to_nato("If, you can read?"),
   "India Foxtrot , Yankee Oscar Uniform Charlie Alfa November Romeo Echo Alfa Delta ?"
);