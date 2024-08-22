<?php
/*
|--------------------------------------------------------------------------
| Convert string to camel case
|--------------------------------------------------------------------------
|
*/

function toCamelCase($str) {
   return preg_replace_callback('/[_-]\w/', function($x) {
      return strtoupper($x[0][1]);
   }, $str);
}


function toCamelCase($str){
   return str_replace(['_', '-', ' '], '', ucwords(' '.$str, '-_'));
}


function toCamelCase($str){
   $words = mb_split('[-_]',$str);
   $res=$words[0];
   for ($i=1;$i<=count($words);$i++){
      $res.=ucfirst($words[$i]);
   }
   return $res;
}


print_r(toCamelCase("") . " 
");
print_r(toCamelCase("the_stealth_warrior") . " theStealthWarrior
");
print_r(toCamelCase("The-Stealth-Warrior") . " TheStealthWarrior
");
print_r(toCamelCase("A-B-C") . " ABC
");