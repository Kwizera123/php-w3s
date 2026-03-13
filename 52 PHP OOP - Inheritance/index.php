<?php
echo "<h1>PHP OOP - Inheritance</h1>";
// Parent class
class Fruit {
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro() {
    echo "The fruit is $this->name and the color is $this->color.<br>";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->intro();
$strawberry->message();

echo "<hr>";

echo "<h2>PHP - Inheritance and the Protected Access Modifier</h1>";

class Fruit1 {
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  protected function intro() {
    echo "The fruit is $this->name and the color is $this->color.";
  }
}

class Strawberry1 extends Fruit1 {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry1("Strawberry", "green");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
//$strawberry->intro(); // ERROR. intro() is protected
echo "<hr>";

class Fruit2 {
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  protected function intro() {
    echo "The fruit is $this->name and the color is $this->color.";
  }
}

class Strawberry2 extends Fruit2 {
  public function message() {
    echo "Am I a fruit or a berry? ";
    // Call protected method from within derived class - OK
    $this -> intro();
  }
}

$strawberry = new Strawberry2("Strawberry", "Orange"); // OK. __construct() is public
$strawberry->message(); // OK. message() is public and calls intro() (which is protected) from within the derived class

echo "<p>In the example above we see that all works fine! It is because we call the protected method (intro()) from inside the derived class.</p>";
echo "<hr>";

echo "<h2>PHP - Overriding Inherited Methods</h2>";

class newFruit {
  public $name;
  public $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro() {
    echo "The fruit is $this->name and the color is $this->color.";
  }
}

class Strawberry3 extends newFruit {
  public $weight;

  public function __construct($name, $color, $weight){
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }

  public function intro() {
    echo "A $this->name is $this->color, and the weight is $this->weight gram.";
  }
}

$strawberry = new Strawberry3("Strawberry", "Green", 50);
$strawberry->intro();

echo "<hr>";

echo "<h2>PHP - The final Keyword</h2>";
echo "<p>The final keyword can be used to prevent class inheritance or to prevent method overriding.</p>";

final class Fruits4 {
  final public function intro(){
      // some code
  }
}

// will result in error
//class Strawberry4 extends Fruits4 {
  // will result in error
 // public function intro(){

  //}
  // some code
echo "<hr>";
  echo "<h1>PHP OOP - Class Constants</h1>";
  echo "<h2>PHP - Access Class Constants</h2>";
  echo "<p>
  A class constant can be accessed in two ways:<br>

1. A constant can be accessed fom outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name:<br>
  </p>";

  class Goodbye {
    const MESSAGE = "Thank you for visiting Codinglearners.com!";
  }

  echo Goodbye::MESSAGE; // Access constant

  echo "<p>
  2. A constant can be accessed fom inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name:
  </p>";

  class Goodbye1 {
  const MESSAGE = "Thank you for visiting Codinglearners.com!";

  public function bye() {
    echo self::MESSAGE; // Access constant
  }
}

$goodbye = new Goodbye1();
$goodbye->bye();


