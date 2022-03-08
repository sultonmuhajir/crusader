<?php
/*
|--------------------------------------------------------------------------
| Replace With Alphabet Position
|--------------------------------------------------------------------------
|
*/

function alphabet_position(string $s): string {
   $res = [];
   $teks = str_split(strtolower($s));
   $alp = str_split("abcdefghijklmnopqrstuvwxyz");
   for ($i=0; $i < count($teks); $i++) { 
      for ($j=0; $j < count($alp); $j++) { 
         if ($teks[$i] == $alp[$j]) {
            array_push($res, $j+1);
         }
      }
   }
   return implode(' ', $res);
}


function alphabet_position(string $s):string {
   return implode(' ', array_filter(array_map(function($x){
      return array_search($x, str_split('_abcdefghijklmnopqrstuvwxyz'));}, str_split(strtolower($s)))));
}


function alphabet_position(string $s): string {
   return implode(' ', array_map(function($c){ return ord($c)-64;}, array_filter(str_split(strtoupper($s)), 'ctype_alpha')));
}


function alphabet_position(string $s): string {
   preg_match_all('/[a-z]/', strtolower($s), $out);
   return join(' ', array_map(function($ch){return ord($ch) - 96;}, $out[0]));
}


print_r(alphabet_position("The sunset sets at twelve o' clock."));
print_r(alphabet_position("The narwhal bacons at midnight."));