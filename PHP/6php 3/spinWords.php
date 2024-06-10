<?php
/*
|--------------------------------------------------------------------------
| Stop gninnipS My sdroW!
|--------------------------------------------------------------------------
|
*/

function spinWords(string $str): string {
   $arr = explode(' ', $str);
   $res = [];
   for ($i=0; $i < count($arr); $i++) { 
      if (strlen($arr[$i]) >= 5) {
         array_push($res, strrev($arr[$i]));
      } else {
         array_push($res, $arr[$i]);
      }
   }
   return implode(' ', $res);
}


function spinWords(string $str): string {
   return preg_replace_callback('/\w{5,}/', function($matches) {return strrev($matches[0]);}, $str);
}


function spinWords(string $str): string {
   return implode(" ", array_map(function ($e) {
      return strlen($e) > 4 ? strrev($e) : $e;
   }, explode(" ", $str)));
}


function spinWords(string $a): string {
   return implode(' ',array_map(function($a){return (strlen($a)>=5)?strrev($a):$a;},explode(' ',$a)));
}


print_r(spinWords("Welcome"). " emocleW
");
print_r(spinWords("Hey fellow warriors"). " Hey wollef sroirraw
");
print_r(spinWords("This is a test"). " This is a test
");
print_r(spinWords("This is another test"). " This is rehtona test
");
print_r(spinWords("You are almost to the last test"). " You are tsomla to the last test
");
print_r(spinWords("Just kidding there is still one more"). " Just gniddik ereht is llits one more
");
print_r(spinWords("Seriously this is the last one"). " ylsuoireS this is the last one
");