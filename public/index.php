<?php
  $x = 5;//global
  $y = "Ram";
  $z = 5.15;
  echo "<p>$y</p>"; 
  echo "<p>$x + $z</p>"; 

  var_dump($x);
  
  function myTest(){
    global $x;
    static $s = 0;
    echo "<p> This is a global variable $x </p>";
    echo $s;
    $s++;
  }
  
  myTest();
  
  
  //Arrays
  $cars = array("Volvo","BMW","Toyota");
  var_dump($cars);

  //objects
  class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() { 
      print "<p> this is a function</p>";
      return "<p>My car is a ". $this->color." " . $this->model . "!";
    }
  }

  $myCar = new Car("red", "Volvo");
  $returnValue = $myCar->message();
  print $returnValue;
  print "<br>";
  var_dump($myCar);
 
  // strings 
  $string = "Hello World!";
  $ss = explode(" ", $string);
  print $string;
  echo "<br>";
  print strlen("Hello World!");
  print strtoupper($string);
  echo strtolower($string);
  print str_replace("Hello", "World!", $string);
  echo strrev($string);
  print_r($ss);
  echo "<br>";
  print substr($string, 5,6);
  print substr($string, 5);
  print substr($string, -5,3);

  phpinfo();
?>