<pre>
<?php
echo "<h1>PHP - Array Sorting Functions</h1>
The items in an array can be sorted in alphabetical or numerical order, descending or ascending.<br>

Here are the main PHP array sorting functions:<br>

<li>sort() - sorts an indexed array in ascending order</li>
<li>rsort() - sorts an indexed array in descending order</li>
<li>asort() - sorts an associative array in ascending order, according to the value</li>
<li>ksort() - sorts an associative array in ascending order, according to the key</li>
<li>arsort() - sorts an associative array in descending order, according to the value</li>
<li>krsort() - sorts an associative array in descending order, according to the key</li>
";

echo "<h2>PHP sort() - Sort Array in Ascending Order</h2>
The sort() function sorts an indexed array in ascending order.<br>
Sort the elements of the cars array in ascending alphabetical order:<br>
";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r($cars);
echo "<hr>";

echo "Sort the elements of the numbers array in ascending numerical order:<br>";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
print_r($numbers);

echo "<hr>";
echo "
<h2>PHP rsort() - Sort Array in Descending Order</h2>
The rsort() function sorts an indexed array in descending order.<br>
Sort the elements of the cars array in descending alphabetical order:<br>
";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
print_r($cars);
echo "<hr>";

echo "
Sort the elements of the numbers array in descending numerical order:<br>
";
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
print_r($numbers);

echo "<hr>";
echo "
<h2>PHP asort() and arsort() - Sort Associative Array (value)</h2>
The asort() function sorts an associative array in ascending order, according to the value.<br>
Sort an associative array in ascending order, according to the value:<br>
";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
print_r($age);

echo "<hr>";
echo "
The arsort() function sorts an associative array in descending order, according to the value.<br>
Sort an associative array in descending order, according to the value:<br>
";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
print_r($age);

echo "<hr>";
echo "
<h2>PHP ksort() and krsort() - Sort Associative Array (key)</h2>
The ksort() function sorts an associative array in ascending order, according to the key.<br>
Sort an associative array in ascending order, according to the key:<br>
";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
print_r($age);
echo "<hr>";
echo "The krsort() function sorts an associative array in descending order, according to the key.<br>
Sort an associative array in descending order, according to the key:<br>
";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
print_r($age);




?>
</pre>