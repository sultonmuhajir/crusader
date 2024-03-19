<?php
/*
|--------------------------------------------------------------------------
| Mexican Wave
|--------------------------------------------------------------------------
|
*/

function wave($people) {
   $res = [];
   for ($i = 0; $i < strlen($people); $i++) {
      if ($people[$i] !== " ") array_push($res, substr_replace($people, strtoupper($people[$i]), $i, 1));
   }
   return $res;
}


function wave($people){
	return array_values(
		   array_filter(
		   array_map(function ($pos) use ($people) {
            if(trim($people[$pos])) {
               $people[$pos]=strtoupper($people[$pos]); return $people; 
            }
         }, range(0, strlen($people)-1))));
}


function wave($str){
   $result = [];
   foreach(str_split($str) as $i => $ch){
      if ($ch !== ' ' && $ch) {
         array_push($result, substr_replace($str, strtoupper($ch), $i, 1));
      }
   }
   return $result;
}


print_r(wave("hello"));