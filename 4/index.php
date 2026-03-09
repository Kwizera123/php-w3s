<?php

$a = 5; // global scope
var_dump($a); //dumps int(5)
echo "<hr>";
$b = 'Hello World!'; // global scope
var_dump($b); //dumps string(11) "Hello World"
echo "<hr>";
$c = 5985; // global scope
var_dump($c); //dumps int(5985)
echo "<hr>";
$d = 10.365;
var_dump($d); //dumps float(10.365)
echo "<hr>";
$e = true;
var_dump($e); //dumps bool(true)
echo "<hr>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars); //dumps array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "Toyota" }
echo "<hr>";

class Car {
  public $color;
  public $model;
  public function  __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar); //dumps object(Car)#1 (2) { ["color"]=> string(3) "red" ["model"]=> string(5) "Volvo" }
echo "<hr>";

$f = "Hello World!"; // global scope
$f = null; // global scope
var_dump($f); //dumps NULL
echo "<hr>";

$g = 7;
var_dump($g); //dumps int(7)
echo "<br>";
$g = "Hello";
var_dump($g); //dumps string(5) "Hello"
echo "<hr>";

$h = 8;
$h = (string)$h; // global scope
var_dump($h); //dumps string(1) "8"
echo "<hr>";

// Using double quotes
$i = "John";
echo "Hello $i\n"; // outputs Hello John!
echo "\thow are you?\n"; // outputs  how are you? with a tab before it
echo "<hr>";
//Using single quotes
$j = 'John';
echo 'Hello $j\n'; // outputs Hello $j\n
echo '\thow are you?\n'; // outputs \thow are you?\n
echo "<hr>";
echo strlen("Hello World!"); // outputs 12
echo "<hr>";
echo str_word_count("Hello World!, This is my birthday"); // outputs 2
echo "<hr>";
$txt = "I really love PHP!";
var_dump(str_contains($txt, "love")); //dumps bool(true)
echo "<hr>";
echo str_word_count($txt); // outputs 5
echo "<hr>";
var_dump(str_contains($txt, "Love")); //dumps bool(false)
echo "<hr>";
echo strpos("Hello world!", "world"); // outputs 6
echo "<hr>";
$word = "I really love PHP!";
var_dump(str_starts_with($word, "I really")); //dumps bool(true )
echo "<hr>";
var_dump(str_ends_with($word, "PHP!")); //dumps bool(true )
echo "<hr>";
var_dump(str_ends_with($txt, "php!")); //dumps bool(false)
echo "<hr>";
$j = 5;
echo 'The price is $j';