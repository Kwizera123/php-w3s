<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP - Traits</title>
</head>
<body>
  <h1>PHP OOP - Traits</h1>
  <h2>PHP - What are Traits?</h2>
  <p>
    Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected). <br>

    Traits allow you to reuse several methods freely in different classes, and are a mechanism for code reuse.
  </p>
  <?php
  //Define a trait
  trait message1 {
    public function msg1() {
      echo "php oop is fun! ";
    }
  }

  // Use the trait in a class
  class Welcome {
    use message1;
  }

  $obj = new Welcome();
  $obj->msg1();
  ?>
  <hr>
  <h1>PHP - Two Classes and One Trait</h1>
  <p>
    In the following example, we define one trait: messages1. This trait contain three public methods. Then, we create two classes: Welcome and Welcome2. The Welcome and Welcome2 classes use the trait, and all the methods in the trait will be available in both classes. However, the Welcome class only uses one of the methods in the trait, while Welcome2 uses all three methods in the trait:
  </p>
<?php
trait messages1 {
      public function msgs1() {
        echo "PHP OOP is Fun!";
      }

      public function msgs2() {
        echo "Traits reduce code duplication! ";
      }

        public function msgs3() {
        echo "Hello World!";
  }

}

class Welcome1 {
      use messages1;
}

class Welcome2 {
      use messages1;
}
$obj = new Welcome1();
$obj->msgs1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msgs1();
$obj2->msgs2();
$obj2->msgs3();

?>
<hr>
<h1>PHP - Using Multiple Traits</h1>
<p>
  In the following example, we define two traits: message1 and message2. Then, we create two classes: Welcome and Welcome2. The first class (Welcome) uses the message1 trait, and the second class (Welcome2) uses both message1 and message2 traits (multiple traits are separated by comma):
</p>
<?php
trait messageone {
  public function msg1() {
    echo "PHP OOP is fun! ";
  }
}

trait messagetwo {
  public function msg2() {
    echo "Traits reduce code duplication!";
  }
}

class Welcomeone {
  use message1;
}

class Welcometwo {
  use messageone, messagetwo;
}

$obj = new Welcomeone();
$obj->msg1();
echo "<br>";

$obj2 = new Welcometwo();
$obj2->msg1();
$obj2->msg2();

?>
</body>
</html>