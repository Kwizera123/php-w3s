<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP - Static Properties</title>
</head>
<body>
  <h1>PHP OOP - Static Properties</h1>
  <h2>PHP - Static Properties</h2>
  <p>
    The static keyword is used to create static properties.
  <br>
Static properties can be accessed directly - without creating an instance of a class first.
  </p>
  <h2>Declare a Static Property</h2>
  <?php
  class pi1 {
    // static property
    public static $value = 3.14159;
  }

  // Get static property directly
  echo pi1::$value;
  ?>
  <hr>
  <h1>PHP - More on Static Properties</h1>
  <p>
    A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the self keyword and double colon (::):
  </p>
  <?php
  class pi {
    public static $values=3.24259;
    public function staticValues() {
      return self::$values;
    }
  }

  $pi = new pi();
  echo $pi->staticValues();

  ?>
  <hr>
  <p>To call a static property from a child class, use the parent keyword inside the child class:</p>
  <?php 
  class pio {
  public static $value=3.14159;
}
// pi (changed due to use pi many times)
class x extends pio {
  public function xStatic() {
    return parent::$value;
  }
}
// Get value of static property directly via child class
echo x::$value;

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>
</body>
</html>