<?php
/*
|--------------------------------------------------------------------------
| Esolang Interpreters #1 - Introduction to Esolangs and My First Interpreter (MiniStringFuck)
|--------------------------------------------------------------------------
|
*/

function my_first_interpreter($code) {
   $res = ""; $x = 0;
   for ($i = 0; $i < strlen($code); $i++) {
      if ($code[$i] === "+") {
         $x = ($x + 1) % 256;
      } elseif ($code[$i] === ".") {
         $res .= chr($x);
      }
   }
   return $res;
}


function my_first_interpreter(string $code): string {
   $cell = 0; $res = '';
   for ($i = 0; $i < strlen($code); $i++)
      switch ($code[$i]) {
         case '+': $cell++; break;
         case '.': $res .= chr($cell); break;
         default: break;
      }
   return $res;
}


function my_first_interpreter(string $code): string {
   $cell = 0;
   $res = '';
   for ($i = 0; $i < strlen($code); $i++)
      switch ($code[$i]) {
         case '+': $cell++; break;
         case '.': $res .= chr($cell); break;
         default: break;
      }
   return $res;
}


print_r(my_first_interpreter('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.') . ' ABCDEFGHIJKLMNOPQRSTUVWXYZ');