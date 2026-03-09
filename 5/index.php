<?php
$a = "Hello World!";
echo strtoupper($a); // outputs HELLO WORLD!
echo "<hr>";
echo strtolower($a); // outputs hello world!
echo "<hr>";
echo str_replace("World", "Dolly", $a); // outputs Hello Dolly!
echo "<hr>";
echo strrev($a); // outputs !dlroW olleH
echo "<hr>";
$b = "            Hello World!";
echo trim($b); // outputs Hello World!
echo "<hr>";
$c = "Hello lovely World!";
$d = explode(" ", $c);

//Use print_r() to display the result
print_r($d); // outputs Array ( [0] => Hello [1] => lovely [2] => World! )
echo "<hr>";

$e = "Hello";
$f = "World!";
$i = $e . $f;
echo $i; // outputs HelloWorld!
echo "<hr>";
$i = $e ." ". $f;
echo $i; // outputs Hello World!
echo "<hr>";
$i = "$e $f";
echo $i; // outputs Hello World!
echo "<hr>";
$j = "Hello World!";
echo substr($j, 6, 5); // outputs World!
echo "<hr>";
echo substr($j, 6); // outputs World!
echo "<hr>";
echo substr($j, -5, 3); // outputs World!
echo "<hr>";
$k = "Hi, how are you?";
echo substr($k, 5, -3); // outputs how are
echo "<hr>";
$l = 5; // global scope
$m = 5.34; // global scope
$n = "25"; // global scope

var_dump($l); //dumps int(5)
echo "<hr>";
var_dump($m); //dumps float(5.34)
echo "<hr>";
var_dump($n); //dumps string(2) "25"
echo "<hr>";
$o = 5985;
var_dump(is_int($o)); //dumps bool(true)
echo "<hr>";
$p = 59.85;
var_dump(is_int($p)); //dumps bool(false)
echo "<hr>";
$r = 10.365;
var_dump(is_float($r)); //dumps bool(true)
echo "<hr>";
$s = 1.9e411;
var_dump(is_infinite($s)); //dumps bool(true 
echo "<hr>";
echo $s;
echo "<hr>";
$t = acos(8);
var_dump($t); //dumps bool(false)
echo "<br>";
//Check if value is not a number
var_dump(is_nan($t)); //dumps bool(true)
echo "<hr>";

$u = 5985;
var_dump(is_numeric($u)); //dumps bool(true)
echo "<hr>";
$u = "5985";
var_dump(is_numeric($u)); //dumps bool(true)
echo "<hr>";
$u = "Hello";
var_dump(is_numeric($u)); //dumps bool(false)
echo "<hr>";

$v = 23465.768;
echo intval($v); // outputs 23465
echo "<hr>";

echo "<br>";

$v = "23465.768";
echo intval($v); // outputs 23465
echo "<hr>";