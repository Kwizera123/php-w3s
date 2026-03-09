<p><h1>PHP foreach Loop</h1></p>
<p>The PHP foreach loop - Loops through a block of code for each element in an array or each property in an object.</p>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
echo "<hr>";
echo "<h1>PHP foreach Loop on Associative Arrays</h1><br>
This is done by specifying both the key and value in the foreach loop, like this:<br><br>";
$members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($members as $key => $value){
  echo "$key : $value <br>";
}
echo "<hr>";

echo "<h1>PHP foreach Loop on Objects</h1><br>
The foreach loop can also be used to loop through properties of an object:<br><br>";

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("White", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x : $y <br>";
}
echo "<hr>";
echo "<h1>The PHP break Statement</h1><br>
With the break statement we can stop the loop even if it has not reached the end:<br><br>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}
echo "<hr>";
echo "<h1>The PHP continue Statement</h1><br>
With the continue statement we can skip the current iteration, and continue with the next:<br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if($x == "blue") continue;
  echo "$x <br>";
}
echo "<hr>";
echo "<h1>PHP Foreach Loop Byref</h1>
When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:<br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "purple";
}
var_dump($colors);
echo "<hr>";
echo "<p>BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array:</p>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "purple";
} 
var_dump($colors);
echo "<hr>";
echo "<h1>Alternative Syntax</h1>
The foreach loop syntax can also be written with the endforeach statement like this";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x):
  echo "$x <br>";
endforeach;
echo "<hr>";