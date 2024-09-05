<?php
/*
|--------------------------------------------------------------------------
| Salesman's Travel
|--------------------------------------------------------------------------
|
*/

function travel($r, $zipcode) {
   $x = array_filter(explode(",", $r), fn($i) => strpos($i, $zipcode) === strlen($i) - strlen($zipcode));
   $adr = implode(",", array_map(fn($i) => substr($i, strpos($i, " ") + 1, -9), $x));
   $num = implode(",", array_map(fn($i) => substr($i, 0, strpos($i, " ")), $x));
   return "$zipcode:$adr/$num";
}


function travel($r, $zipcode) {
   preg_match_all("/(\d+) ([\w\. ]+) $zipcode,/", $r, $matches);
   return "$zipcode:". implode(",", $matches[2]). '/'. implode(",", $matches[1]);
}


function travel($r, $zipcode) {            
   $z = array_filter(explode(",", $r), function ($element) use ($zipcode) {        
      return (substr($element, strlen($zipcode) * -1) === $zipcode);
   });
   $x = [];    
   $k = [];
   foreach($z as $y) {
      $x[] = substr($y, 0, strpos($y, " "));
      $k[] = substr($y,strpos($y, " ") + 1, (1+strlen($zipcode)) * -1);
   }
   return $zipcode . ':' . implode($k, ',') . '/' . implode($x, ',');
};