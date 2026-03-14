<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP - Static Methods</title>
</head>
<body>
  <h1>PHP OOP - Static Methods</h1>
  <p>
    The static keyword is used to create static methods and properties.
    <br>
    Static methods can be accessed directly - without creating an instance of the class first.
  </p>
  <?php

  class greeting {
    public static function welcome() {
      echo "Hello! I'm PHP Static Methods";
    } 
  }

  // Call static method directly
  greeting::welcome();
  ?>
  <hr>
  <p>
    In the following example, we declare a static method: sum(). Then, we access the static method directly by using the class name, a double colon (::), and the method name:
  </p>
  <?php
    class calc {
      // static method
      public static function sum($x, $y) {
        return $x * $y;
      }
    }

    // call static method
    $res = calc::sum(6, 4);
    echo $res;
  ?>
  <hr>
  <h1>PHP - More on Static Methods</h1>
  <p>
    A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::):
  </p>
  <?php
      class greeting1 {
    public static function welcome() {
      echo "Hey There! I'm PHP More on Static Methods";
    } 

    // non-static method
    public function __construct() {
      self::welcome(); 
    }
  }
  new greeting1();
  ?>
  <hr>
  <p>
    Static methods can also be called from methods in other classes. To do this, the static method should be public:
  </p>
  <?php
  class A {
    public static function welcome() {
      echo "Hello php users!";
    } 
  }

  class B {
    public function message() {
      A::welcome();
    }
  }

  $obj = new B();
  echo $obj -> message();
  ?>
  <hr>
  <p>
    To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.
  </p>
  <?php
class domain {
  protected static function getWebsiteName() {
    return "codinglearners.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3();
echo $domainW3 -> websiteName;

?>
</body>
</html>