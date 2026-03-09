<?php
echo "<h1>The PHP Continue Statement</h1>
The PHP continue statement is used to skip the current iteration of a loop, and continue with the next iteration.<br>";

echo "<h1>PHP continue in For Loops</h1>
The continue statement skips the current iteration in the for loop and continue with the next.<br>";

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
echo "<hr>";

echo "<h1>PHP continue in While Loop</h1>
The continue statement skips the current iteration in the while loop and continue with the next.<br>";

$a = 0;

while($a < 10) {
   $a++;
  if ($a == 4) {
    continue;
  }
  echo "The number is $a <br>";
}
echo "<h1>PHP continue in Do While Loop</h1>
The continue statement skips the current iteration in the do...while loop and continue with the next.<br>";

$b = 0;

do {
  $b++;
  if ($b == 3) continue;
  echo $b;
} while ($b < 6);
echo "<h1>PHP continue in Foreach Loop</h1>
The continue statement skips the current iteration in the foreach loop and continue with the next.<br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  if ($value == "blue") continue;
    echo "$value<br>";
}