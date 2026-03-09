<?php
echo "<h1>PHP if...else Statements</h1>";
echo "The if...else statement executes some code if a condition is true and another code if that condition is false.<br>";
echo "<h3>Output " . "Have a good day! " . "if the current time is less than 20, and " ." Have a good night! " ."otherwise:</h3>";

$t = date("H");
if ($t < "20") {
  // code to be executed if condition is true
  echo "Have a good day!";
} else {
  // code to be executed if condition is false 
  echo "Have a good night!"; 
}
echo "<hr>";
echo "<h1>Another Example</h1>";

$d = date("D");
if ($d == "Fri") {
  echo "Have a nice weekend!";
} else {
  echo "Have a nice day!";
}
echo "<hr>";
echo "<h1>PHP if...elseif...else Statements</h1>";
echo "The if...elseif...else statement executes different codes for more than two conditions.<br>";
echo "Output 'Have a good morning!' if the current time is less than 10, and 'Have a good day!' if the current time is less than 20. Otherwise it will output 'Have a good night!':<br><br>";

$td = date("H");
if ($td < "10") {
  echo "Have a good morning!";
} elseif ($td < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
} 
echo "<hr>";
echo "<h1>PHP Shorthand if Statements</h1>";
echo "To write shorter code, you can write if statements on one line.<br><br>";
//One-line if statement:
$o = 5;
if ($o < 10) $p = "Hello";
echo $p;
echo "<hr>";

$m = 13;
//One-line if...else statement:
$r = $m < 10 ? "Hello" : "Good Bye";
echo $r;
echo "<hr>";
echo "<h1>PHP Nested if Statements</h1>";
echo "<p>You can have if statements inside if statements, this is called nested if statements.</p>";
$u = 13;
if($u > 10){
  echo "Above 10";
  if($u > 20) {
    echo " and also above 20";
  }else {
    echo " but not above 20";
  }
}
echo "<hr>";
