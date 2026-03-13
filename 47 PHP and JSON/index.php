
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP and JSON</title>
</head>
<body>
  <h1>What is JSON?</h2>
  <p>JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.</p>

  <?php
    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

    echo json_encode($age);
  ?>
  <hr>
  <?php
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>
<hr>
 <h2> PHP - json_decode()</h2>
<p>The json_decode() function is used to decode a JSON object into a PHP object or an associative array.</p>

<?php
$name = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($name));
?>
<hr>
<h2>PHP - Accessing the Decoded Values</h2>
<p>Here are two examples of how to access the decoded values from an object and from an associative array:
</p>
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
?>
<hr>
<p>This example shows how to access the values from a PHP associative array:</p>
<?php

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];
?>
<hr>
  <h2>PHP - Looping Through the Values</h2>
You can also loop through the values with a foreach loop: <br>

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);
foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>
<hr>
<p>This example shows how to loop through the values of a PHP associative array:</p>
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>
</body>
</html>