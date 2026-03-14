
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP - Interfaces</title>
</head>
<body>
  <h1>PHP OOP - Interfaces</h1>
  <h2>PHP Interfaces</h2>
  <p>
    An Interface lets you define which public methods a class MUST implement, without defining how they should be implemented.<br>

  Interfaces are declared with the interface keyword, and the methods declared in an interface must be public:
  </p>
  <?php
  // interface InterfaceName {
  //   public function method1();
  //   public function method2();
  // }
  //
  // class ClassName implements InterfaceName{
  //   public function method  () {
  //     // some code
  //   }
  //   public function method2() {
  //     // some code
  //   }
  // }


  // Define the interface
  interface Animal {
    public function makeSound();
  }

  // Implement the interface in a class
  class Cat implements Animal{
    public function makeSound() {
      echo "Meow";
    }
  }
  // Implement the interface in another class
  class Dog implements Animal {
    public function makeSound() {
      echo "Woff";
    }
  }

  $cat = new Cat();
  $cat->makeSound();
  
  echo "<br>";

  $dog = new Dog();
  $dog->makeSound();


  ?>

</body>
</html>