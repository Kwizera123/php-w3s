<pre>
  <?php
  echo "
  <h1>PHP Access Arrays Items</h1>
  To access an array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.<br>
  ";
  $cars = array("Volvo", "BMW", "Toyota");
  echo $cars[2];
  echo "<hr>";
echo "<h2>To access items from an associative array, use the key name:</h2>";
  $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
  echo $cars["year"];
  echo "<br>";
  echo $cars["model"];
  echo "<br>";
  echo $cars['model'];

  echo "<hr>";
  echo "
  <h1>Excecute a Function Item</h1>
  Array items can be of any data type, including functions.<br>

To execute such a function, use the index number followed by parentheses ():<br>
  ";
  function myfunction(){
    echo "I come from a function!";
  }
  $myArr = array("Volvo", 15, "myFunction");
  $myArr[2]();
echo "<hr>";
echo "Use the key name when the function is an item in a associative array:<br>";

function myFunction1() {
  echo "I come from a function!";
}
$myArr = array("car" => "Volvo", "age" => 15, "message" => "myFunction");

$myArr["message"]();

echo "<hr>";
echo "<h1>Loop Through an Associative Array</h1>
To loop through and print all the values of an associative array, use a foreach loop, like this:<br>";

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
foreach($car as $x => $y) {
  echo "$x: $y <br>";
}
echo "<hr>";
echo "<h1>Loop Through an Indexed Array</h1>
To loop through and print all the values of an indexed array, use a foreach loop, like this:<br>";
$cars = array("Volvo", "BMW", "Toyota");

foreach($cars as $x) {
  echo "$x <br>";
}
echo "<hr>";
echo "<h1>PHP Update Array Items</h1>
To update an existing array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.<br>";
$cars[1] = "Ford";
var_dump($cars);
echo "<hr>";
echo "To update items from an associative array, use the key name:<br>";
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
var_dump($cars);

echo "<hr>";
echo "<h1>Update Array Items in a Foreach Loop</h1>
There are different techniques to use when changing item values in a foreach loop.<br>

One way is to insert the & character in the assignment to assign the item value by reference, and thereby making sure that any changes done with the array item inside the loop will be done to the original array:<br>";
$cars = array("Volvo", "BMW", "Toyota");

foreach($cars as &$car) {
  $car = "Ford";
}
unset($car);
var_dump($cars);
echo "<hr>";
echo "Demonstrate the consequence of forgetting the unset() function:<br>";

$cars = array("Volvo", "BMW", "Toyota");

foreach($cars as &$car) {
  $car = "Ford";
}
$car = "ice cream";

var_dump($cars);


  ?>
</pre>