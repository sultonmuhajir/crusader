<?php
/*
|--------------------------------------------------------------------------
| Reverse polish notation calculator
|--------------------------------------------------------------------------
|
*/

function calc($expr) {
   if (empty($expr) || trim($expr) === "") return 0;
   $stack = [];
   $tokens = explode(" ", trim($expr));
   foreach ($tokens as $token) {
      if (is_numeric($token)) {
         array_push($stack, (float)$token);
      } else {
         $b = array_pop($stack); $a = array_pop($stack);
         switch ($token) {
            case "+": array_push($stack, $a + $b); break;
            case "-": array_push($stack, $a - $b); break;
            case "*": array_push($stack, $a * $b); break;
            case "/": array_push($stack, $a / $b); break;
         }
      }
   }
   return array_pop($stack);
}


function calc(string $expr): float {
   do {
      $parts = preg_split('/ /', $expr, null, PREG_SPLIT_NO_EMPTY);
      foreach ($parts as $key => $char) {
         if (preg_match('/^[\-+*\/]$/', $char) === 1) {
            $result = eval('return ' . $parts[$key - 2] . " $char " . $parts[$key - 1] . ';');
            $expr = str_replace($parts[$key - 2] . " " . $parts[$key - 1] . " " . $char, $result, $expr);
            break;
         }
      }
   } while (stripos(trim($expr), ' ') !== false);
   return (float)$expr;
}


function calc(string $expr): float {
   $ex = explode(' ',$expr);
   $stack = [];
   $list = ['*','/','+','-'];
   foreach ($ex as $key => $value) {
      if (in_array($value, $list)) {
         $a2 = array_pop($stack);
         $a1 = array_pop($stack);
         eval("\$b = $a1 $value $a2 ;");
         array_push($stack, $b);
      } else {
         array_push($stack,$value);
      }
   }
   $res = array_pop($stack);
   return (float)$res;
}


print_r(calc("") . ' ' . 0 . '
');
print_r(calc("3") . ' ' . 3 . '
');
print_r(calc("3.5") . ' ' . 3.5 . '
');
print_r(calc("1 3 +") . ' ' . 4 . '
');
print_r(calc("1 3 *") . ' ' . 3 . '
');
print_r(calc("1 3 -") . ' ' . -2 . '
');
print_r(calc("4 2 /") . ' ' . 2 . '
');