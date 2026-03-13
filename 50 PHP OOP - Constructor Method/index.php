
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP - Constructor Method</title>
</head>
<body>
  <h1>PHP OOP - Constructor Method</h1>

  <?php
  class Fruit {
    public $name;
    public $color;

    function __construct($name, $color){
      $this->name = $name;
      $this->color = $color;
    }

    function get_details() {
      echo "Name: " . $this->name . ". Color: " . $this->color .".<br>";
    }
  }

$apple = new Fruit('Apple', 'Red');
$apple->get_details();

$banana = new Fruit('Banana', 'Yellow');
$banana->get_details();

$avocado = new Fruit('Avocado', 'Green');
$avocado->get_details();
  ?>
<hr>
<h1>PHP OOP - Destructor Method</h1>

<?php
class Car {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  function __destruct() {
    echo "Vehicle Name: " . $this->name . ". Color" . $this->color . ".<br>";
  }
}

$toyota = new Car('Toyota', ' Red');
$benz = new Car('Benz', ' Green');
?>

</body>
</html>