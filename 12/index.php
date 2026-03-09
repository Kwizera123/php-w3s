<?php
$x = 10;  
$y = 6;

echo $x + $y;
echo "<hr>";
echo $x - $y;
echo "<hr>";
echo $x * $y;
echo "<hr>";
echo $x / $y;
echo "<hr>";
echo $x % $y;
echo "<hr>";
echo $x ** $y;
echo "<hr>";
$a = 10;
$b = $a;
echo $b; // outputs 10
echo "<hr>";
$c = 2;
$c +=5;
echo $c; // outputs 7
echo "<hr>";
$d = 50;
$d -= 27;
echo $d; // outputs 23
echo "<hr>";
$e = 5;
$e *= 6;
echo $e; // outputs 30
echo "<hr>";
$f = 10;
$f /= 5;
echo $f; // outputs 2
echo "<hr>";
$g = 15;
$g %= 4;
echo $g; // outputs 3
echo "<hr>";
$h = 100;
$i = "100";
var_dump($h == $i); // outputs true because values are equal
echo "<hr>";
var_dump($h === $i); // outputs false because types are not equal
echo "<hr>";
var_dump($h != $i); // outputs false because values are equal
echo "<hr>";
var_dump($h <> $i); // outputs false because values are equal
echo "<hr>";
var_dump($h !== $i); // outputs true because types are not equal
echo "<hr>";
var_dump($h > $i); // outputs false because values are equal
echo "<hr>";
var_dump($h < $i); // outputs false because values are equal
echo "<hr>";
var_dump($h >= $i); // outputs true because values are equal
echo "<hr>";
var_dump($h <= $i); // outputs true because values are equal
echo "<hr>";
var_dump($h <=> $i); // outputs 0 because values are equal
echo "<hr>";

$j = 5;  
$k = 10;

echo ($j <=> $k); // returns -1 because $j is less than $k
echo "<br>";

$j = 10;  
$k = 10;

echo ($j <=> $k); // returns 0 because values are equal
echo "<br>";

$j = 15;  
$k = 10;

echo ($j <=> $k); // returns +1 because $j is greater than $k
