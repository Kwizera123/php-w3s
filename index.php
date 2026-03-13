
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Object-Oriented Programming</title>
</head>
<body>
  <h1>PHP Object-Oriented Programming</h1>
  <h2>PHP OOP - Classes and Objects</h2>
  <?php
  class Fruit {
    // Properties
    public $name;
    public $color;

    // Method ro set the properties
    function set_details($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }

    // Method to display the properties
    function get_details() {
      echo "Name: " . $this->name . ". Color: " . $this->color;
    }
  }

 // Create an object name $apple from the Fruit class
 $apple = new Fruit();
 $apple->set_details('Apple','Red');
 $apple->get_details(); // Get output

echo "<br>";
 // Create an object named $banana from the Fruit class
 $banana = new Fruit();
 $banana->set_details('Banana', 'Yellow'); // Set properties value
 $banana->get_details(); // Get output

 echo "<br>";
 // Create an object named $Avocado from the Fruit class
 $avocado = new Fruit();
 $avocado->set_details('Avocado', 'Green'); // Set properties value
 $avocado->get_details(); // Get output
 echo "<hr>";
 $apple = new Fruit();
 var_dump($apple instanceof Fruit);
?>
<hr>
<?php
class Fruits {
  public $name;
  public $color;
}

$apple = new Fruits();
var_dump($apple instanceof Fruits);
?>
</body>
</html>