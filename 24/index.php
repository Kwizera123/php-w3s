<?php

echo "<h1>PHP Return Type Declarations</h1>
PHP also supports Type Declarations for the return statement.

<p>To declare a data type for the function return, add a colon ( : ) and the data type right before the opening curly ( { ) bracket when declaring the function.</p>

In the following example we specify the return type (float) for the function:<br>
";
?>

<!-- 
//declare(strict_types=1); // strict requirement

//function addNumbers(float $a, float $b) : float {
  return $a + $b;
//}
//echo addNumbers(1.2, 5.2);
?> -->

 <!-- declare(strict_types=1); // strict requirement 

function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);
-->
<pre>
<?php
echo "<hr>";
echo "<h1>PHP Arrays</h1>";
echo "In PHP, an array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or a name.<br>";

$cars = array("Volvo", "BMW", "Toyora");
var_dump($cars);
?>
</pre>
<?php
echo "<hr>";
echo "<h1>PHP Array Items</h1>";
echo "
Array items can be of any data type.<br>

The most common are strings and numbers, but array items can also be objects, functions or even arrays.<br>

You can have different data types in the same array.<br>";
$myArr = array("Volvo", 15, ["apples","bananas"]);
echo "$myArr[0]<br>";
echo "$myArr[1]<br>";
echo "$myArr[2]";
echo "<hr>";
echo "
<h1>PHP Array Functions</h1>
The real strength of PHP arrays are the built-in array functions.<br>

Here we use the count() function to count the array items:<br>
";
$cars = array("Volvo","BMW","Toyota");

echo count($cars);
echo "<hr";

echo "
<h1>Change Value of Array Item</h1>
To change the value of an array item, use the index number:
<br>
";
?>
<pre>
<?php
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);
echo "<hr>";

echo "
<h1>Loop Through an Indexed Array</h1>
To loop through and print all the values of an indexed array, use a foreach loop, like this:
";

foreach ($cars as $car) {
  echo "$car <br>";
}
?>
</pre>
