<?php
/*
|--------------------------------------------------------------------------
| Encrypt this!
|--------------------------------------------------------------------------
|
*/

function encryptThis($text) {
   $tmp = explode(' ', $text);
   $res = [];
   foreach ($tmp as $i) {
      $str = '';
      if (strlen($i) == 1) {
         $str .= ord($i[0]);
      } elseif (strlen($i) == 2) {
         $str .= ord($i[0]);
         $str .= $i[1];
      } else {
         $str .= ord($i[0]);
         $str .= $i[-1];
         $str .= substr($i, 2, strlen($i)-3);
         $str .= $i[1];
      }
      array_push($res, $str);
   }
   return implode(' ', $res);
}


function encryptThis($text): string {
   preg_match_all('~([a-z])([a-z]?)([a-z]*?)([a-z]?)(?:\s|$)~i', $text, $matches);
   return implode(' ', array_map(function ($f, $e, $m, $t) { return (string)ord($f).$t.$m.$e; }, ...array_slice($matches, 1)));
}


function encryptThis($text): string {
   $textArray = explode(" ", $text);
   foreach($textArray as $k => &$v) {
      if(strlen($v) === 1) {$v = ord($v); continue;}
      $lastPoint = strlen($v)-1;
      $swapStr = $v[1];
      $v[1] = $v[$lastPoint];
      $v[$lastPoint] = $swapStr;
      $v = str_split($v);
      $v[0] = ord($v[0]);
      $v = implode("", $v);
   }
   return implode(" ", $textArray);
}


function encryptThis($text): string {
   return implode(' ', array_map(function($word) {
      return ord($word[0]) . match(strlen($word)) {
      1 => '',
      2 => $word[1],
      default => $word[strlen($word) - 1] . substr($word, 2, -1) . $word[1],
      };
   }, explode(' ', $text)));
}


print_r(encryptThis("A wise old owl lived in an oak"). " 65 119esi 111dl 111lw 108dvei 105n 97n 111ka");