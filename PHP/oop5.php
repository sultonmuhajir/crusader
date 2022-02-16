<?php
/*
|--------------------------------------------------------------------------
| Object-Oriented PHP #5 - Classical Inheritance
|--------------------------------------------------------------------------
|
*/

class Person {
   public $name, $age, $occupation;
   
   public function __construct($name, $age, $occupation) {
      $this->name = $name;
      $this->age = $age;
      $this->occupation = $occupation;
   }
   
   public function introduce() {
      return "Hello, my name is {$this->name}";
   }

   public function describe_job() {
      return "I am currently working as a(n) {$this->occupation}";
   }
}


class Salesman extends Person {
   public function __construct($name, $age) {
      parent::__construct($name, $age, "Salesman");
   }
   
   public function introduce() {
      return parent::introduce() . ", don't forget to check out my products!";
   }
}


class ComputerProgrammer extends Person {
   public function __construct($name, $age) {
      parent::__construct($name, $age, "Computer Programmer");
   }
   
   public function describe_job() {
      return parent::describe_job() . ", don't forget to check out my Codewars account ;)";
   }
}


class WebDeveloper extends ComputerProgrammer {
   public function __construct($name, $age) {
      parent::__construct($name, $age);
      $this->occupation = "Web Developer";
   }
   
   public function describe_job() {
      return parent::describe_job() . " And don't forget to check on my website :D";
   }
   
   public function describe_website () {
      return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
   }
}


$x = new WebDeveloper('Riska', 20);
echo $x->describe_job();