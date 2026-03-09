<?php
define("SITE_NAME", "Welcome to codinglearners.com");
echo SITE_NAME;
echo "<hr>";

function myTest() {
  define("GREETING", "Welcome to CodingLearns.com!");
}
myTest();
echo GREETING; // outputs "Welcome to CodingLearns.com!"
echo "<hr>";

const GREETING2 = "Welcome to CodingLearns.com!";
echo GREETING2; // outputs "Welcome to CodingLearns.com!"
echo "<hr>";
// Using define()
define("CARS", array("Volvo","BMW","Toyota"));
echo CARS[0]; // outputs Volvo
echo "<hr>";
// Using const
const ANIMALS = array("Dog","Cat","Horse");
echo ANIMALS[1]; // outputs Dog
echo "<hr>";

echo "<h2>The __CLASS__ Constant</h2>";

echo "<p>This constant returns the class name:</p>";
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue(); // outputs Fruits

echo "<hr>";
echo "<h2>The __DIR__ Constant</h2>
<p>This constant returns the directory name of the file:</p>";
echo __DIR__; // outputs the directory of the file
echo "<hr>";
echo "<h2>The __FILE__ Constant</h2>
<p>This constant returns the full path and the name of the file:</p>";
echo __FILE__; // outputs the full path and name of the file
echo "<hr>";
echo "<h2>The __FUNCTION__ Constant</h2>
<p>This constant returns the function name:</p>";
function myMessage(){
  return __FUNCTION__;
}
echo myMessage(); // outputs myMessage
echo "<hr>";
echo "<h2>The __LINE__ Constant</h2>
<p>This constant returns the current line number:</p>";

echo __LINE__; // outputs the current line number
echo "<hr>";
echo "<h2>The __METHOD__ Constant</h2>
<p>This constant returns both class and function name:</p>";

class Fruit {
  public function myValue(){
    return __METHOD__;
  }
}
$kiwi = new Fruit();
echo $kiwi->myValue(); // outputs Fruit::myValue
echo "<hr>";



echo "<hr>";

echo "<h2>The __TRAIT__ Constant</h2>
<p>This constant returns the trait name:</p>";

trait message1 {
  public function msg1(){
    echo __TRAIT__;
  }
}

class Welcome {
  use message1;
}
$obj = new Welcome();
$obj->msg1(); // outputs message1
echo "<hr>";
?>