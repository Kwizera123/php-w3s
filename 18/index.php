<?php
echo "<h1>The PHP while Loop</h1><br>";
echo "The PHP while loop - Loops through a block of code as long as the specified condition is true.";
echo "<p><b>Tip:</b> The condition is checked at the beginning of each iteration, which means that if the condition is initially false, the code block will not run even once.</p>";
?>
<p>Print '$i' as long as $i is less than 6:</p>
<?php
$i = 1; // Initialize counter
while ($i < 6) { // check condition
  echo $i . "<br>"; // Execute code block
  $i++; // Increment counter
}
echo "<hr>";
echo "<h1>The PHP break Statement</h1> <br>";
echo "With the break statement we can stop the loop even if the condition is still true:.";
echo "<p>Stop the loop when $i is 4:</p>";

$a =1;
while ($a < 6){
  if ($a == 4) break; // Stop the loop when $a is 4
  echo $a . "<br>";
  $a++;
}
echo "<hr>";
echo "<h1>The PHP continue Statement</h1>
With the continue statement we can skip the current iteration, and continue with the next:<br>";
echo "Skip, and move to the next iteration if b is 3:<br>";

$b = 0;
while ($b < 6) {
  $b++;
  if ($b == 3) continue; // Skip when $b is 3
  echo $b . "<br>";

}
echo "<hr>";
echo "<h1>Alternative Syntax</h1>";
echo "The while loop syntax can also be written with the endwhile statement like this";

$i = 0;
while ($i < 6):
  echo $i . "<br>";
  $i++;
endwhile;
echo "<hr>";
echo "Step 10
If you want the while loop count to 100, but only by each 10, you can increase the counter by 10 instead 1 in each iteration:<br>";
$c = 0;
while ($c < 100) {
  $c += 10; // Increase counter by 10
  echo $c . "<br>";
}
