<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <hr>
  <h1>PHP - Using Interfaces</h1>
  <p>
    The following example defines an interface named Animal, with two public methods (fromFamily() and makeSound()). The Cat and Dog class implement the Animal interface, and they must include both the fromFamily() and the makeSound() methods:
  </p>

  <?php
  interface Animal {
    public function fromFamily();
    public function makeSound();
  }

  class Cat implements Animal {
    public function fromFamily() {
      echo "From family: Felidae (Relatives: lions, tigers, jaguars, lynx, cougars, and cheetahs).<br>";
    }
    public function makeSound(){
      echo "Sound: Meow.";
    }
  }

  class Dog implements Animal {
  public function fromFamily() {
    echo "From family: Canidae (Relatives: wolves, foxes, coyotes, jackals, and domestic dogs).<br>";
  }
  public function makeSound() {
    echo "Sound: Woff.";
    }
  }

  echo "<h3>Cats</h3>";
$cat = new Cat();
$cat->fromFamily();
$cat->makeSound();

echo "<h3>Dogs</h3>";
$dog = new Dog();
$dog->fromFamily();
$dog->makeSound();


?>
  
</body>
</html>