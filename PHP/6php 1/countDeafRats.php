<?php
/*
|--------------------------------------------------------------------------
| The Deaf Rats of Hamelin
|--------------------------------------------------------------------------
|
*/

function countDeafRats($town) {
   $town = str_replace(' ', '', $town);
   $count = 0;
   for ($i = 0; $i < strlen($town); $i += 2) {
      if ($town[$i] === 'O') $count++;
   }
   return $count;
}


function countDeafRats($town) {
   list($left, $right) = explode("P", str_replace(" ", "", $town));
   return array_count_values(str_split($left, 2))["O~"] + array_count_values(str_split($right, 2))["~O"];  
}


function countDeafRats($town){
   $arr = explode("P", str_replace(" ","",$town));
   $res = count( array_filter( str_split($arr[0],2) , function($x){return $x=="O~";}) );
   $res += count( array_filter( str_split($arr[1],2) , function($x){return $x=="~O";}) );
   return $res;
}


print_r(countDeafRats("~O~O~O~O P") . ' ' . 0 . '
');
print_r(countDeafRats("P O~ O~ ~O O~") . ' ' . 1 . '
');
print_r(countDeafRats("~O~O~O~OP~O~OO~") . ' ' . 2 . '
');