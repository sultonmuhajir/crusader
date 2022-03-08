<?php
/*
|--------------------------------------------------------------------------
| New Cashier Does Not Know About Space or Shift
|--------------------------------------------------------------------------
|
*/

function getOrder($input) {
   $res = [];
   $arr = ['Burger', 'Fries', 'Chicken', 'Pizza', 'Sandwich', 'Onionrings', 'Milkshake', 'Coke'];
   foreach ($arr as $i) {
      $temp = explode(strtolower($i), $input);
      for ($j=0; $j < count($temp)-1; $j++) { 
         array_push($res, $i);
      }
   }
   return implode(' ', $res);
}


function getOrder($input) {
   $res = [];
   $menu = ['Burger', 'Fries', 'Chicken', 'Pizza', 'Sandwich', 'Onionrings', 'Milkshake', 'Coke'];
   foreach ($menu as $item) {
      $res .= str_repeat($item . ' ', substr_count($input, strtolower($item)));
   }
  return trim($res);
}


function getOrder($input) {
   $order = [];
   $menu = ['burger', 'fries', 'chicken', 'pizza', 'sandwich', 'onionrings', 'milkshake', 'coke'];
   foreach($menu as $dish){
      $num = preg_match_all("/{$dish}/i", $input);
      for($i = 0; $i < $num; $i++) $order[] = ucfirst($dish);
   }
   return implode(' ', $order);
}


function getOrder($input) {
   $order = [];
   $menu = ['burger', 'fries', 'chicken', 'pizza', 'sandwich', 'onionrings', 'milkshake', 'coke'];
   foreach ($menu as $item) {
      $count = substr_count($input, $item);
      $order += array_fill(count($order) - 1, $count, ucfirst($item));
   }
   return implode(' ', $order);
}


print_r(getOrder("milkshakepizzachickenfriescokeburgerpizzasandwichmilkshakepizza") .
" Burger Fries Chicken Pizza Pizza Pizza Sandwich Milkshake Milkshake Coke
");
print_r(getOrder("pizzachickenfriesburgercokemilkshakefriessandwich") .
" Burger Fries Fries Chicken Pizza Sandwich Milkshake Coke
");