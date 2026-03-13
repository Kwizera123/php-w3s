<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP - Access Modifiers</title>
</head>
<body>

<h1>PHP OOP - Access Modifiers</h1>
<h2>Public Access Modifier</h2>

<?php 
  class Cap {
    public $name;
    public $color;

    public function get_deails(){
      echo "Name: " .$this->name . ". Color: " .$this->color;
    }
  }

  $mug = new Cap();
  $mug->name = "Mug"; // Can be accessed directly
  $mug->color = "Red";

  $mug->get_deails();
?>
<hr>

<h1>Private Access Modifier</h1>
<p>
  The private access modifier allows class properties or methods ONLY to be accessed within the same class where they are defined.
</p>
  <?php

  class House {
    private $name;

    public function get_details() {
      echo "Name: " . $this->name . ".";
    }
  }

  $villa = new House();
  //$villa->name = "Villa"; // Error: Cannot access private property
  $villa->get_details();
  ?>
   <hr>
   <h1>Protected Access Modifier</h1>
   <p>
    The protected access modifier allows class properties or methods to be accessed within the class and by classes derived from that class (child classes).
   </p>

   <?php
class Dog {
  protected $name;

  public function setType($name) {
    //echo "Name: " . $this->name . ".";
    $this->name = $name;
  }
}

class Puppy extends Dog {
  public function getType(){
    echo "Name: " . $this->name . ".";
  }
}

$puppy = new Puppy();
$puppy->setType("Mina");
//$puppy->name = "Mina"; // Error: Cannot access protected property
echo $puppy->getType();
?>
</body>
</html>