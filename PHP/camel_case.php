<?php
/*
|--------------------------------------------------------------------------
| CamelCase Method
|--------------------------------------------------------------------------
|
*/

function camel_case(string $s): string {
   $res = [];
   $x = explode(' ', $s);
   for ($i=0; $i < count($x); $i++) { 
      if ($x[$i] != '') {
         array_push($res, strtoupper($x[$i][0]).substr($x[$i], 1, strlen($x[$i])));
      }
   }
   return implode('', $res);
}


function camel_case(string $s): string {
   return str_replace(' ', '', ucwords($s));
}


function camel_case(string $s): string {
   return empty($s) ? "" : implode(array_map('ucfirst', explode(" ", trim($s))));
}


function camel_case(string $s): string {
   return empty($s) ? "" : str_replace(' ', '', ucwords($s, " "));
}


function camel_case(string $s): string {
   $s = ucwords($s);
   $s = preg_replace('/\s(?=)/', '', $s);
   return $s ;
}


print(camel_case("test case") . " TestCase
");
print(camel_case("camel case method") . " CamelCaseMethod
");
print(camel_case("say hello ") . " SayHello
");
print(camel_case(" camel case word") . " CamelCaseWord
");
print(camel_case("") . " 
");