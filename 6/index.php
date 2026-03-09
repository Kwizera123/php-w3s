<?php
$a = 5; // integer
$b = 5.34; // float
$c = "Hello World!"; // string
$d = true; // boolean
$e = null; // null

$a = (string) $a; // converts integer to string
$b = (string) $b; // converts float to string
$c = (string) $c; // already a string, no change
$d = (string) $d; // converts boolean to string ("1" for true, "" for false)
$e = (string) $e; // converts null to string (""

// Use var_dump() to verify the data type
var_dump($a); // dumps string(1) "5"
echo "<hr>";
var_dump($b); // dumps string(4) "5.34"
echo "<hr>";
var_dump($c); // dumps string(12) "Hello World!"
echo "<hr>";
var_dump($d); // dumps string(1) "1"
echo "<hr>";
var_dump($e); // dumps string(0) ""
echo "<hr>";
// von batten montague york,lc

$i = 5; // integer
$j = 5.34; // float
$k = "25 km"; // string
$l = "km 25"; // string
$m = "hello"; // string
$n = true; // boolean
$o = NULL;// null

$i = (int) $i; // converts integer to integer (no change)
$j = (int) $j; // converts float to integer (5)
$k = (int) $k; // converts string to integer (0)
$l = (int) $l; // converts string to integer (0)
$m = (int) $m; // converts string to integer (0)
$n = (int) $n; // converts boolean to integer (1)
$o = (int) $o; // converts null to integer (0)

var_dump($i); // dumps int(5)
echo "<hr>";
var_dump($j); // dumps int(5)
echo "<hr>";
var_dump($k); // dumps int(0)
echo "<hr>";
var_dump($l); // dumps int(0)
echo "<hr>";
var_dump($m); // dumps int(0)
echo "<hr>";
var_dump($n); // dumps int(1)
echo "<hr>";
var_dump($o); // dumps int(0)
echo "<hr>";
echo "<p>When casting a string that starts with a number, (int) gets that number.</p>";
echo "<p>If the string does not start with a number, (int) convert strings to 0.</p>";
echo "<hr>";

$i = (float) $i; // converts integer to float (5.0)
$j = (float) $j; // converts float to float (5.0)
$k = (float) $k; // converts string to float (0.0)
$l = (float) $l; // converts string to float (0.0)
$m = (float) $m; // converts string to float (0.0)
$n = (float) $n; // converts boolean to float (1.0)
$o = (float) $o; // converts null to float (0.0)

var_dump($i); // dumps int(5)
echo "<hr>";
var_dump($j); // dumps int(5)
echo "<hr>";
var_dump($k); // dumps int(0)
echo "<hr>";
var_dump($l); // dumps int(0)
echo "<hr>";
var_dump($m); // dumps int(0)
echo "<hr>";
var_dump($n); // dumps int(1)
echo "<hr>";
var_dump($o); // dumps int(0)
echo "<hr>";
echo "<p>When casting a string that starts with a number, (float) gets that number.</p>
<p>If the string does not start with a number, (float) convert strings to 0.</p>";