<?php

echo "<h1>PHP Logic Operators!</h1>";
echo "To check more than one condition, we can use logical operators, like the && operator:<br><br>";

$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c) {
  echo "Both conditions are true!";
}
echo "<hr>";
echo "<h1>The and Operator</h1>

<p>Write a message if both conditions are true.</p>";

$x = 100;
$y = 50;

if ($x == 100 and $y == 50) {
  echo "Hello world, both are true!";
}
echo "<hr>";

echo "<h1>The && Operator</h1>";
echo "<p>Write a message if both conditions are true.</p>"; 

if ($x == 100 && $y == 50) {
  echo "Hey there, both are true!";
}
echo "<hr>";

echo "<h1>The or Operator</h1>

<p>Write a message if at least one of the conditions are true.</p>";


if ($x == 100 or $y == 80) {
    echo "Hello world! At least one of the conditions is true!";
}
echo "<hr>";
echo "<h1>The || Operator</h1>
<p>Write a message if at least one of the conditions are true.</p>";

if($x == 100 || $y == 80) {
    echo "Hey there! At least one of the conditions is true!";
}
echo "<hr>";
echo "<h1>The xor Operator</h1>
<p>Write a message if one of the conditions are true, but not if both conditions are true.</p>";
$m = 100;
$n = 50;

if ($m == 100 xor $n == 70) {
    echo "Hello world! One of the conditions is true, but not both! Right";
}
echo "<hr>";
echo "<h1>The ! Operator</h1>
<p>Write a message if the condition is NOT true.</p>";

$j = 100;
if (!($j == 50)) {
    echo "Hello world! This is correct! <br>";
    echo "Then take me to login page <br>";
    echo "Just to remind me!";
}
echo "<hr>";

echo "We can compare as many conditions as we like in one if statement:<br>";
echo "Check if <b>L</b> is either 2, 3, 4, 5, 6, or 7:<br>";
$l = 5;

if ($l == 2 || $l == 3 || $l == 4 || $l == 5 || $l == 6 || $l == 7) {
  echo "<b>L</b> is a number between 2 and 7";
}


