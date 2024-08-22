<?php
/*
|--------------------------------------------------------------------------
| Roman Numerals Encoder
|--------------------------------------------------------------------------
|
*/

function solution($num) {
   $x = array(
      "M" => 1000, "CM" => 900, "D" => 500, "CD" => 400,
      "C" => 100, "XC" => 90, "L" => 50, "XL" => 40,
      "X" => 10, "IX" => 9, "V" => 5, "IV" => 4, "I" => 1
   );
   $res = '';
   foreach ($x as $key => $value) {
      while ($num >= $value) {
         $res .= $key;
         $num -= $value;
      }
   }
   return $res;
}


function solution($n) {
   $M = ["","M","MM","MMM"];
   $C = ["","C","CC","CCC","CD","D","DC","DCC","DCCC","CM"];
   $X = ["","X","XX","XXX","XL","L","LX","LXX","LXXX","XC"];
   $I = ["","I","II","III","IV","V","VI","VII","VIII","IX"];
   return $M[$n/1000].$C[($n % 1000)/100].$X[($n % 100)/10].$I[($n % 10)];
}


function solution($num) {
   $x = array(
      "M" => 1000, "CM" => 900, "D" => 500, "CD" => 400,
      "C" => 100, "XC" => 90, "L" => 50, "XL" => 40,
      "X" => 10, "IX" => 9, "V" => 5, "IV" => 4, "I" => 1
   );
   $res = '';
   foreach($x as $roman => $value){
      $matches = intval($num/$value);
      $res .= str_repeat($roman,$matches);
      $num = $num % $value;
   }
   return $res;
}


print_r(solution(1001) . " MI
");
print_r(solution(1990) . " MCMXC
");
print_r(solution(2007) . " MMVII
");
print_r(solution(11) . " XI
");
print_r(solution(19) . " XIX
");
print_r(solution(22) . " XXII
");
print_r(solution(15) . " XV
");