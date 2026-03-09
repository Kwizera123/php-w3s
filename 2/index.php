<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo 'Hello World, with php!<br>';
ECHO 'Hello World , with php ECHO in capital!';
?>
<hr>
<?php
$color = 'red';
echo "My car is " . $color . "<br>";
?>
<hr>
<?php
$x = 5;
$y = "John";

echo $x;
echo "<br>";
echo $y;
echo "<hr>";

$txt = "php language";
echo "I love $txt!";
echo "<hr>";
$no1 = 5;
$no2 = 4;
echo $no1 + $no2;

echo "<hr>";
$a = 5;
$b = "John";
echo $a;
echo "<br>";
echo $b;


?>

<pre>
  <?php
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2,3,45,"John"]);
var_dump(null);
?>
</pre>
<hr>
<?php
$c = $d = $e = "Fruit";
echo $c;
echo "<br>";
echo $d;
echo "<br>";
echo $e;
?>
</body>
</html>