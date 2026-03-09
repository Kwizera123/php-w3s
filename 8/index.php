<pre>
<?php

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}
$myCar = new Car("white", "Volvo");
$myCar = (array) $myCar;
var_dump($myCar); // dumps array(2) { ["color"]=> string(5) "white" ["model"]=> string(5) "Volvo" }
echo "<hr>";
?>
</pre>
<pre>
<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a; // converts integer to object (object(stdClass)#1 (1) { ["0"]=> int(5) })
$b = (object) $b; // converts float to object (object(stdClass)#2 (1) { ["0"]=> float(5.34) })
$c = (object) $c; // converts string to object (object(stdClass)#3 (1) { ["0"]=> string(5) "hello" })
$d = (object) $d; // converts boolean to object (object(stdClass)#4 (1) { ["0"]=> bool(true) })
$e = (object) $e; // converts NULL to object (object(stdClass)#5 (1) { ["0"]=> NULL })

var_dump($a);
echo "<hr>";
var_dump($b);
echo "<hr>";
var_dump($c);
echo "<hr>";
var_dump($d);
echo "<hr>";
var_dump($e);
echo "<hr>";
?>
</pre>

<?php
echo "<p>When casting to object, most data types converts into an object with one property, named <b>scalar</b> with the corresponding value.</p>";
echo "<p>NULL values converts into an empty object.</p>";
echo "<hr>";
?>

