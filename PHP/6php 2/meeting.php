<?php
/*
|--------------------------------------------------------------------------
| Meeting
|--------------------------------------------------------------------------
|
*/

function meeting($s) {
   $res = [];
   $names = explode(";", strtoupper($s));
   foreach ($names as $name) {
      $x = explode(":", $name);
      $res[] = "({$x[1]}, {$x[0]})";
   }
   sort($res);
   return implode("", $res);
}


function meeting($s) {
   $arr = explode(";", preg_replace("/(\w+):(\w+)/", "($2, $1)", strtoupper($s)));
   sort($arr);
   return implode("", $arr);
}


function meeting($s) {
   $res = array_map(function($v) {
      $v = explode(':', $v);
      return "($v[1], $v[0])";
   }, explode(';', strtoupper($s)));
   sort($res);
   return implode($res);
}


print_r(
   meeting(
      "Alexis:Wahl;John:Bell;Victoria:Schwarz;Abba:Dorny;Grace:Meta;Ann:Arno;Madison:STAN;Alex:Cornwell;Lewis:Kern;Megan:Stan;Alex:Korn") . " 
      (ARNO, ANN)(BELL, JOHN)(CORNWELL, ALEX)(DORNY, ABBA)(KERN, LEWIS)(KORN, ALEX)(META, GRACE)(SCHWARZ, VICTORIA)(STAN, MADISON)(STAN, MEGAN)(WAHL, ALEXIS)"
);