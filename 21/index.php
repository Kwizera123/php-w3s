<?php
echo "<h1>PHP Break Statement</h1><br>";
echo "The PHP break statement is used to immediately break out of different kind of loops.<br>";

echo "<h1>PHP break Out of For loop</h1><br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) break;
  echo "The number is: $x <br>";
}
echo "<hr>";
echo "<h1>PHP break Out of While Loop</h1><br>";
echo "The break statement can be used to immediately break out of a while loop.<br>";
$i = 0;
while($i < 10) {
  if($i == 4) {
    break;
  }
  echo "The number is: $i <br>";
  $i++;
}
echo "<hr>";
echo "<h1>PHP break Out of Do While Loop</h1>
The break statement can be used to immediately break out of a do...while loop.<br>";

$a = 1;

do {
  if ($a == 3) break;
  echo $a;
  $a++;
} while ($a < 6);
echo "<hr>";
echo "<h1>PHP break Out of Foreach Loop</h1>";
echo "The break statement can be used to immediately break out of a foreach loop.<br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  if ($value == "blue") break;
  echo "$value<br>";
}
