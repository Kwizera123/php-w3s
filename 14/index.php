<?php 

// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo "<br>";
$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo "<hr>";


// variable $user is the value of $_GET['user'] 
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous";
echo "<br>";

// variable color is "red" if color does not exist or is null
echo $color = $color ?? "red";
echo "<hr>";


echo "<h2>PHP the if statement</h2>";
if (5 > 3) {
    // code to be executed if condition is true
    echo "Have a good day!";
}
echo "<hr>";
$t = 14;
if ($t < 20) {
    echo "Have a good day!";
}
echo "<hr>";
echo "<h2>PHP if Operators</h2>";
$x = 14;
if ($x == 14){
    echo "Have a good day!";
}
echo "<hr>";
echo "
<h1>The === Operator</h1>

<p>Compare two variables to check if they are identical.</p>
<p>The identical operator (===) checks the value and the data type, unlike the equal operator (==) that checks only the value.</p>
";
$y = 100;
$z = 100;

if ($y === $z) {
    echo "$y is identical to $z";
}
echo "<hr>";
echo "
<h1>The != Operator</h1>

<p>Compare two variables and write a message if they don't have the same value.</p>
";
$a = 100;
$b = 50;
if ($a != $b) {
    echo "$a is not equal to $b";
} 
echo "<hr>";
echo "<h1>The > Operator</h1>";
echo "
<p>Compare two variables and write a message if c is greater than d .</p>
";
$c = 100;
$d = 50;
if ($c > $d) {
    echo "$c is greater than $d";
}
echo "<hr>";
echo "<h1>The >= Operator</h1>";
echo "<p>Compare two variables and write a message if e is greater than or equal to f .</p>";
$e = 100;
$f = 100;
if ($e >= $f) {
    echo "$e is greater than or equal to $f";
}
echo "<hr>";
echo "<h1>The <= Operator</h1>";
echo "<p>Compare two variables and write a message if g is less than or equal to h .</p>";

$g = 100;
$h = 100;
if ($g <= $h) {
    echo "$g is less than or equal to $h";
}
echo "<hr>";
