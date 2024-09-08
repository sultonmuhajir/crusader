<?php
/*
|--------------------------------------------------------------------------
| Don't rely on luck.
|--------------------------------------------------------------------------
|
*/

class c extends TestCase {}


srand(0);
$guess = rand(1,100);
srand(0);


class myClass extends TestCase {
   public function work() {
      return $guess;
   }
}