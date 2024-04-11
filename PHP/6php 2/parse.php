<?php
/*
|--------------------------------------------------------------------------
| Make the Deadfish Swim
|--------------------------------------------------------------------------
|
*/

function parse($data) {
   $res = []; $val = 0;
   for ($i = 0; $i < strlen($data); $i++) {
      if ($data[$i] === "i") $val++;
      elseif ($data[$i] === "d") $val--;
      elseif ($data[$i] === "s") $val *= $val;
      elseif ($data[$i] === "o") array_push($res, $val);
   }
   return $res;
}


function parse($data) {
   $r = [];$v=0;foreach(str_split($data) as $c){$c=='i'?$v++:($c=='d'?$v--:($c=='s'?$v**=2:($c!='o'?:$r[]=$v)));}
   return $r;
}


function parse($data) {
   $arr = []; $val = 0;
   foreach(str_split ($data) as $deadfish) {
      switch($deadfish) {
         case 'i': $val++; break;
         case 'd': $val--; break;
         case 's': $val = $val * $val; break;
         case 'o': array_push($arr, $val); break;
      }    
   }    
   return $arr;
}


print_r(parse("iiisdoso"));
print_r(parse("iiisxxxdoso"));