<?php
/*
|--------------------------------------------------------------------------
| Simple Encryption #1 - Alternating Split
|--------------------------------------------------------------------------
|
*/

function encrypt($text, $n) {
   if (!$text || $n <= 0) return $text;
   while ($n--) {
      $res = "";
      for ($i = 1; $i < strlen($text); $i += 2) $res .= $text[$i];
      for ($i = 0; $i < strlen($text); $i += 2) $res .= $text[$i];
      $text = $res;
   }
   return $text;
}
function decrypt($text, $n) {
   if (!$text || $n <= 0) return $text;
   $res = str_split($text);
   while ($n--) {
      $j = 0;
      for ($i = 1; $i < count($res); $i += 2) $res[$i] = $text[$j++];
      for ($i = 0; $i < count($res); $i += 2) $res[$i] = $text[$j++];
      $text = implode("", $res);
   }
   return $text;
}


function encrypt($text, $n) {
   for($i = 0; $i < $n; $i++){
      $temp = "";
      for($j = 1; $j < strlen($text); $j += 2) $temp .= $text[$j];
      for($j = 0; $j < strlen($text); $j += 2) $temp .= $text[$j];
      $text = $temp;
   }
   return $text;
}
function decrypt($text, $n) {
   for($i = 0; $i < $n; $i++){
      $temp = "";
      for($j = 0; $j < intdiv(strlen($text), 2); $j++)
         $temp .= $text[$j + intdiv(strlen($text), 2)] . $text[$j];
      if(strlen($text) % 2 == 1) $temp .= $text[strlen($text) - 1];
      $text = $temp;
   }
   return $text;
}


function encrypt($text, $n) {
   return (($n > 0) ? encrypt(preg_replace('/(.)(.)?/','$2',$text).preg_replace('/(.)(.)?/','$1',$text),$n-1) : $text);
} 
function decrypt($text, $n) {
   if($n <= 0) return $text;
   $half_one = substr($text,0,strlen($text)/2);
   $half_two = str_split(substr($text,strlen($text)/2));
   for($i = 0; $i < strlen($text); $i += 2) {
      $half_one = substr_replace($half_one,array_shift($half_two),$i,0);
   }
   return decrypt($half_one,$n-1);
}


print_r(encrypt("This is a test!", 1) . " hsi  etTi sats!
");
print_r(encrypt("This is a test!", 2) . " s eT ashi tist!
");
print_r(encrypt("This kata is very interesting!", 1) . " hskt svr neetn!Ti aai eyitrsig
");
print_r(decrypt("hsi  etTi sats!", 1) . " This is a test!
");
print_r(decrypt("s eT ashi tist!", 2) . " This is a test!
");
print_r(decrypt("hskt svr neetn!Ti aai eyitrsig", 1) . " This kata is very interesting!
");