<pre>
  <?php
  echo "PHP Add Array Items";
  echo "In PHP, you can add array items with several different methods:
    <li>[] - adds a single item to the end of an array</li>
    <li>array_push() - adds one or more items to the end of an array</li>
    <li>array_unshift() - adds one or more items to the beginning of an array</li>
    <li>array_splice() - removes a portion of an array and replaces it with new elements</li>
    <li>array_merge() - merges two or more arrays</li> <br>
    
    To add a single array item to the end of an existing array, use the bracket [] syntax.
    ";

$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";
var_dump($fruits);
echo "<br>";

echo "You can of course add more array items to the end of an existing array, with the bracket [] syntax. But you have to add one by one:<br><br>";
$fruits[] = "Pear";
$fruits[] = "Avocado";
var_dump($fruits);
echo "<br>";
echo "<hr>";
  echo "<h1>Associative Arrays</h1>";
  echo "To add items to the end of an associative array, use the brackets [] for the key, and assign a value with the = operator.<br>";
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";
var_dump($cars);

echo "<br>";
echo "<hr>";

echo "<h1> PHP array_push() Function</h1>
The array_push() function is used to add one or more array items to the end of an existing array.<br>";
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
var_dump($fruits);

echo "<br>";
echo "<hr>";

echo "<h1> Add Multiple Items to Associative Arrays</h1>
To add multiple items to an existing associative array, you can use the += operator.<br>";

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
var_dump($cars);

echo "<br>";
echo "<hr>";
echo "<h1>PHP array_unshift() Function</h1>
The array_unshift() function is used to add one or more array items to the beginning of an existing array.<br>";

$fruits = array("Apple", "Banana", "Cherry");
array_unshift($fruits, "Orange", "Kiwi", "Lemon");
var_dump($fruits);

echo "<br>";
echo "<hr>";

echo "<h1>PHP array_splice() Function</h1>
The array_splice() function is used remove a portion of an array and replace it with new items.<br>

If you specify an offset and a length of 0 (nothing to remove), you can insert an item at that position.<br>";
$fruits = array("Apple", "Banana", "Cherry");
$new_fruit = "Orange";
array_splice($fruits, 1, 0, $new_fruit); // insert "Orange" at index 1
var_dump($fruits);

echo "<br>";
echo "<hr>";

echo "<h1>PHP array_merge() Function</h1>
The array_merge() function is used to merge two or more arrays.<br>";

$fruits1 = array("Apple", "Banana");
$fruits2 = array("Cherry", "Orange");
$result = array_merge($fruits1, $fruits2);
var_dump($result);

  ?>
</pre>