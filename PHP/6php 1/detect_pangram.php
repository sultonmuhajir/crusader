<?php
/*
|--------------------------------------------------------------------------
| Detect Pangram
|--------------------------------------------------------------------------
|
*/

function detect_pangram($string) { 
   $teks = strtolower(trim($string));
   $letters = str_split("thequickbrownfoxjumpsoverthelazydog");
   foreach ($letters as $letter) {
      if (!strstr($teks, $letter))
         return false;
   }
   return true;
}


function detect_pangram($string) { 
   return !array_diff(range("a", "z"), str_split(strtolower($string)));
}


function detect_pangram($string) { 
   $abc = range('a', 'z');
   foreach($abc as $s) {
      if(strpos(strtolower($string), $s) === false) {
         return false;
      }
   }
   return true;
}


function detect_pangram($s) { 
   return preg_match_all('/([a-z])(?!.*\1)/i', $s, $m) && $m[0][25];
}


print_r(detect_pangram('The quick brown fox jumps over the lazy dog.') . ' ' . true . '
');
print_r(detect_pangram('This is not a pangram.') . ' ' . false . '
');