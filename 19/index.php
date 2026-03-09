<h1>PHP do while Loop</h1>
<p>
  The PHP do...while Loop
The PHP do...while loop - Loops through a block of code at least once, and then repeats the loop as long as the specified condition is true.
</p>
<p>Set $i = 1, then print $i as long as $i is less than 6:</p>
<?php
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);
echo "<hr>";
echo "Here, we set the variable $i to 8 instead of 1, and execute the same do...while loop again:<br>";
echo "Set $i = 8, then print $i as long as $i is less than 6:.<br>";
$a = 8;

do {
  echo $a . "<br>";
  $a++;
} while ($a < 6);
echo "<hr>";
echo "<h1>The PHP break Statement</h1>
With the break statement we can stop the loop even if the condition is still true:<br>";

$b = 1;
do {
  if ($b == 3) break;
  echo $b;
  $b++;
} while ($b < 6);
echo "<hr>";
echo "<h1>The PHP continue Statement</h1>
With the continue statement we can skip the current iteration, and continue with the next:<br>";

$c = 0;
do {
  $c++;
  if ($c == 3) continue;
  echo $c . "<br>";
} while ($c < 6);
echo "<hr>";
echo "<h1>PHP for Loop <b>Start</b></h1>";
echo "The PHP for loop - Loops through a block of code a specified number of times.";
echo "<p>The for loop is used when you know how many times the script should run.</p>";
for ($x = 0; $x <= 10; $x++) {
  // code to be executed;
  echo "The number is: $x <br>";
}
echo "<hr>";
echo "<h1>Decrease Counter Variable</h1><br>
The following example shows a for loop that prints the numbers from 10 to 0, by decreasing the counter variable:<br>";
for ($x = 10; $x >= 0; $x--) {
  echo "The number is: $x <br>";
}
echo "<hr>";
echo "<h1>The PHP break Statement</h1><br>
With the break statement we can stop the loop even if the condition is still true:<br>";
for ($x = 0; $x <= 10; $x++) {
  if ($x == 4) break;
  echo "The number is: $x <br>";
}
echo "<hr>";
echo "<h1>The PHP continue Statement</h1><br>
With the continue statement we can skip the current iteration, and continue with the next:<br>";
for ($x = 0; $x <= 10; $x++) {
  if ($x == 4) continue;
  echo "The number is: $x <br>";
}
echo "<hr>";
echo "<h1>Step 10</h1><br>
This example counts to 100 by tens:<br>";

for ($x = 0; $x <= 100; $x += 10) {
  echo "The number is: $x <br>";
}
echo "<hr>";
for ($x = 0; $x < 5; $x++) {
  echo "The number is: $x <br>";
}
echo "<hr>";
