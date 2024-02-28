<?php
/*
|--------------------------------------------------------------------------
| Find the missing letter
|--------------------------------------------------------------------------
|
*/

function find_missing_letter($array) {
   for ($i = 0; $i < count($array) - 1; $i++) {
      if (ord($array[$i]) + 1 !== ord($array[$i + 1])) {
         return chr(ord($array[$i]) + 1);
      }
   }
}


function find_missing_letter(array $a): string {
   return join(array_diff(range($a[0],end($a)),$a));
}


function find_missing_letter(array $array): string {
   $letter = range(reset($array),end($array));
   return current(array_diff($letter, $array));
}


print_r(find_missing_letter(["a", "b", "c", "d", "f"]), "e");
print_r(find_missing_letter(["O", "Q", "R", "S"]), "P");