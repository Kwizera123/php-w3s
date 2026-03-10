<pre>
  <?php
  echo "
  <h1>PHP Associative Arrays</h1>
Associative arrays use named keys, instead of numeric indices.
  <br>";
  $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
  var_dump($car);
  echo "<hr>";
  echo "
  <h1>Access Array Item</h1>
To access a specific array item, refer to the key name.<br>
  ";
  echo $car['model'];
  echo "<hr>";
  echo "
 <h1> Change Value of Array Item</h1>
To change the value of an array item, use the key name:
  <br>";
  $car["year"] = 2024;
  var_dump($car);
  echo "<hr>";
  echo "
  <h1>Loop Through an Associative Array</h1>
To loop through and print all the values of an associative array, use a foreach loop, like this:<br>
  ";
  foreach($car as $x => $y) {
    echo "$x: $y <br>";
  }
  echo "<hr>";

  $cars = ["Volvo", "BMW", "Toyota"];
  var_dump($cars);
   echo "<hr>";
  echo "
  <h1>Multiple Lines</h1>
Line breaks are not important, so an array declaration can span multiple lines:<br>";
  $school = [
  "Primary1",
  "Secondary",
  "University",
  ];
  var_dump($school);

 echo "<hr>";
  echo "
  <h1>Array Keys</h1>
When creating indexed arrays the keys are given automatically, starting at 0 and increased by 1 for each item, so the array above could also be created with keys:<br>";
  $school = [
  0 => "Primary1",
  1 => "Secondary",
  2 => "University"
  ];
  var_dump($school);
echo "As you can see, indexed arrays are the same as associative arrays, but associative arrays have names instead of numbers:<br>";

$mycar = [
  "brand" => "Ford",
  "model" => "Mustand",
  "year" => 1964
];
var_dump($mycar);
echo "<hr>";
echo "
<h1>Declare Empty Array</h1>
You can declare an empty array first, and add items to it later:<br>
";
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

var_dump($cars);

echo "<hr>";
echo "The same goes for associative arrays, you can declare the array first, and then add items to it:<br>";

$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = "1996";
var_dump($myCar);
  
echo "<hr>";
echo "
<h1>Mixing Array Keys</h1>
You can have arrays with both indexed and named keys:<br>
";

$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

var_dump($myArr);
  ?>
</pre>
