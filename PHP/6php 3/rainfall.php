<?php
/*
|--------------------------------------------------------------------------
| Rainfall
|--------------------------------------------------------------------------
|
*/

function split_data($town, $strng) {
   $city_data = [];
   $lines = explode("\n", $strng);
   foreach ($lines as $line) {
      list($city, $data) = explode(":", $line);
      $city_data[$city] = $data;
   }
   if (array_key_exists($town, $city_data)) {
      $values = explode(",", $city_data[$town]);
      $result = [];
      foreach ($values as $value) {
         list($key, $val) = explode(" ", trim($value));
         $result[$key] = $val;
      }
      return $result;
   } else {
      return 0;
   }
}
function mean($town, $strng) {
   $data = split_data($town, $strng);
   if ($data) {
      $values = array_map('floatval', array_values($data));
      return array_sum($values) / count($values);
   } else {
      return -1;
   }
}
function variance($town, $strng) {
   $data = split_data($town, $strng);
   if ($data) {
      $values = array_map('floatval', array_values($data));
      $mean = array_sum($values) / count($values);
      $sum_of_squares = 0;
      foreach ($values as $value) {
         $sum_of_squares += pow($value - $mean, 2);
      }
      return $sum_of_squares / count($values);
   } else {
      return -1;
   }
}


function mean($town, $str){
   preg_match('/'.$town.':(.*)(?=\n|$)/', $str, $m);
   if($m[1]==null){return -1;}
   $arr= explode(',', $m[1]);
   $arr= array_map(function($x){return (float) preg_replace('/[^\d\.]/', '', $x);}, $arr);
   return array_reduce($arr, function($v,$x){return $v+$x;},0)/count($arr);
}
function variance($town, $str){
   $mn= mean($town, $str);
   preg_match('/'.$town.':(.*)(?=\n|$)/', $str, $m);
   if($m[1]==null){return -1;}
   $arr= explode(',', $m[1]);
   $arr= array_map(function($x){return (float) preg_replace('/[^\d\.]/', '', $x);}, $arr);
   $arr= array_map(function($x)use($mn){return ($x-$mn)**2;}, $arr);
   return array_reduce($arr, function($v,$x){return $v+$x;},0)/count($arr);
}