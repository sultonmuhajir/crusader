<?php
/*
|--------------------------------------------------------------------------
| Coding Meetup #8 - Higher-Order Functions Series - Will all continents be represented?
|--------------------------------------------------------------------------
|
*/

function all_continents($a) {
   $continents = ["Africa", "Americas", "Asia", "Europe", "Oceania"];
   $res = [];
   foreach ($a as $dev) $res[$dev['continent']] = true;
   foreach ($continents as $continent) {
      if (!isset($res[$continent])) return false;
   }
   return true;
}


function all_continents(array $arr): bool {
	return count(array_unique(array_column($arr, 'continent'))) == 5;
}


function all_continents(array $a): bool {
   $result = [];
   foreach($a as $user){
      $result[$user['continent']] = true;
   }
   return count($result) == 5;
}