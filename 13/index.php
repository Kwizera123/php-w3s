<?php
$a = 10;
echo ++$a; // outputs 11
echo "<hr>";
$b = 10;
echo $b++; // outputs 10, but $b is now 11
echo "<hr>";
$c = 10;
echo --$c; // outputs 9
echo "<hr>";
$d = 10;
echo $d--; // outputs 10, but $d is now 9
echo "<hr>";

echo "<h1>The and Or Operator</h1>";
echo "<p>The and operator (&&) returns true if both conditions are true:</p>";
echo "Write a message if both conditions are true.<br>";
$x = 100;
$y = 50;

if ($x == 100 and $y == 50) {
  echo "Hello world!";
}
echo "<hr>";
echo "<p>Write a message if at least one of the conditions are true.</p>";
if ($x == 100 or $y == 80) {
  echo "Hello world! Yes or it is true!";
}
echo "<hr>";
echo "<p>Write a message if one of the conditions are true, bot not if both conditions are true.</p>";
if ($x == 100 xor $y == 30) {
  echo "Hello world! Yes xor it is true.";
}
echo "<hr>";
echo "<p>Write a message if both conditions are true.</p>";
if ($x == 100 && $y == 50) {
  echo "Hello world! Yes && it is true!";
}
echo "<hr>";
echo "<p>Write a message if at least one of the conditions are true.</p>";
if ($x == 100 || $y == 80) {
  echo "Hello world! Yes || it is true!";
}
echo "<hr>";
echo "<p>Write a message if the condition is NOT true.</p>";
if (!($x == 90)) {
  echo "Hello world! Yes ! it is true!";
}
echo "<hr>";
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . " " . $txt2; // outputs Hello world!
echo "<hr>";
$txt1 .= $txt2;
echo $txt1; // outputs Hello world!
echo "<hr>";
$k = array("a" => "red", "b" => "green", "c" => "blue");
$l = array("d" => "yellow", "e" => "pink");
print_r($k + $l); // outputs Array ( [a] => red [b] => green [c] => blue [d] => yellow [e] => pink )
echo "<hr>";
$m = $k + $l; // union of $k and $l
print_r($m); // outputs Array ( [a] => red [b] => green [c] => blue [d] => yellow [e] => pink )
echo "<hr>";
var_dump($k == $l); // outputs bool(false) because $k and $l have different key/value pairs
echo "<hr>";
var_dump($k === $l); // outputs bool(false) because $k and $l have different key/value pairs and order
echo "<hr>";
var_dump($k != $l); // outputs bool(true) because $k and $l have different key/value pairs
echo "<hr>";
var_dump($k <> $l); // outputs bool(true) because $k and $l have different key/value pairs
echo "<hr>";
var_dump($k !== $l); // outputs bool(true) because $k and $l have different key/value pairs and order
echo "<hr>";