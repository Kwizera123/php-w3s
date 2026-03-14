
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP - Abstract Classes</title>
</head>
<body>
  <h1>PHP OOP - Abstract Classes</h1>


  <?php
  // Abstract base class
  abstract class Car {
    public $name;

    // Non-abstract method
    public function __construct($name) {
      $this->name = $name;
    }

    // Abstract method - forces child classes to implement it
    abstract public function intro();
  }

  // Child class that extends the abstract class
  class Audi extends Car {
    public function intro() {
      return "German quality! I'm an $this->name!";
    }
  }

  // Child class that extends the abstract class
class Citroen extends Car {
  public function intro() {
    return "French extravagance! I'm a $this->name!";
  }
}

// Create objects of the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
  ?>
  <hr>
  <h1>PHP - Abstract Method with Argument</h1>
  <h3>Let's look at another example where the abstract method has an argument:</h3>
  <?php
  abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }

  class ChildClass extends ParentClass {
    public function prefixName($name)
    {
      if ($name == "John Doe") {
        $prefix = "Mr.";
      } elseif ($name == "Diane Doe") {
        $prefix = "Mrs.";
      } else {
        $prefix = "";
      }
      return "$prefix $name";
    }
  }

  $class = new ChildClass;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Diane Doe");
  echo "<br>";
  echo $class->prefixName("Baby Doe");
  ?>

  <?php
  echo "<p>Just Test this php class by myself</p>";
echo $class->prefixName("John Doe");
  ?>
  <hr>
  <p>In the following example, the child class has two optional arguments that are not defined in the parent's abstract method:</p>
  <?php
abstract class ParentClass1 {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass1 extends ParentClass1 {
  // The child class may define optional arguments that are not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "$greet $prefix$separator $name";
  }
}

$class = new ChildClass1;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
  ?>
</body>
</html>