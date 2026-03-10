<pre>
  <?php
  echo "<h1>PHP Delete Array Items</h1>";
  echo "<h2>PHP Remove Array Items</h2>

  In PHP, you can remove/delete array items with several different functions:<br>

  <li>array_splice() - removes a portion of the array starting from a start position and length</li>
  <li>unset() - removes the element associated with a specific key</li>
  <li>array_diff() - remove items from an associative array</li>
  <li>array_pop() - removes the last array item</li>
  <li>array_shift() - removes the first array item</li>
  
  <h3>PHP array_splice() Function</h3>
With the array_splice() function you specify the index (where to start) and how many items you want to delete.<br>

After the deletion, the array gets re-indexed automatically, starting at index 0.<br>
  ";

  $cars = array("Volvo", "BMW", "Toyota");
  array_splice($cars, 1, 1);
  var_dump($cars);

echo "<br>";
echo "<hr>";
  echo "<h1>Remove Multiple Array Items</h1>
To remove multiple items, the array_splice() function takes a length parameter that allows you to specify the number of items to delete.<br>";

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
var_dump($cars);

echo "<br>";
echo "<hr>";

echo "<h1>PHP unset() Function</h1>
You can also use the unset() function to delete existing array items.<br>";
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
var_dump($cars);

echo "<br>";
echo "<hr>";

echo "<h1>Remove Multiple Array Items</h1>
The unset() function takes a unlimited number of arguments, and can therefore be used to delete multiple array items:<br>
";
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);
var_dump($cars);

echo "<br>";
echo "<hr>";

echo "<h1>Remove Item From an Associative Array</h1>
To remove items from an associative array, you can use the unset() function.<br>

Specify the key of the item you want to delete.<br>";
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);

echo "<br>";
echo "<hr>";

echo "<h1>PHP array_diff() Function</h1>
You can also use the array_diff() function to remove items from an associative array.<br>

This function returns a new array, without the specified items.<br>";
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);

echo "<br>";
echo "<hr>";

echo "<h1>PHP array_diff() Function</h1>
The array_pop() function removes the last item of an array.<br><br>";
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);

echo "<br>";
echo "<hr>";

echo "<h1>PHP array_shift() - Remove First Array Item</h1>
The array_shift() function removes the first item of an array.<br><br>";
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);






  ?>
  </pre>