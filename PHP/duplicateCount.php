<?php
/*
|--------------------------------------------------------------------------
| Counting Duplicates
|--------------------------------------------------------------------------
|
*/

function duplicateCount($text) {
   $arr = str_split(strtolower($text));
   $c = 0;
   foreach (array_unique($arr) as $i) {
      if (count(array_filter($arr, function($x) use ($i) { return $x == $i; })) >= 2) {
         $c++;
      }
   }
   return $c;
}


function duplicateCount($text) : int {
   $stats = array_count_values(str_split(strtolower($text)));
   return count(array_filter($stats, function($value) {return $value > 1;} ));
}


function duplicateCount($text) {
   return count(array_filter(count_chars(strtolower($text), 1), function ($e) {
      return $e > 1;
   }));
}


function duplicateCount($text) {
   $res = 0;
   while ($text != "") {
     $text = preg_replace("/$text[0]/i", "", $text, -1, $count);
     if ($count > 1) $res++;
   }
   return $res;
}


print_r(duplicateCount(""). ' ' . 0 . '
');
print_r(duplicateCount("abcde"). ' ' . 0 . '
');
print_r(duplicateCount("aabbcde"). ' ' . 2 . '
');
print_r(duplicateCount("aabBcde"). ' ' . 2 . '
');
print_r(duplicateCount("Indivisibility"). ' ' . 1 . '
');
print_r(duplicateCount("Indivisibilities"). ' ' . 2 . '
');