<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

var_dump($a); // dumps bool(true)
echo "<hr>";
var_dump($b); // dumps bool(true)
echo "<hr>";
var_dump($c); // dumps bool(false)
echo "<hr>";
var_dump($d); // dumps bool(true)
echo "<hr>";
var_dump($e); // dumps bool(true)
echo "<hr>";
var_dump($f); // dumps bool(true)
echo "<hr>";
var_dump($g); // dumps bool(false)
echo "<hr>";
var_dump($h); // dumps bool(true)
echo "<hr>";
var_dump($i); // dumps bool(false)
echo "<hr>";

echo "<p>If a value is 0, NULL, false, or empty, (bool) converts it to false, otherwise true.</p>";
echo "<hr>";
?>

<pre>
<?php
$j = 5;       // Integer
$k = 5.34;    // Float
$l = "hello"; // String
$m = true;    // Boolean
$n = NULL;    // NULL

$j = (array) $j;
$k = (array) $k;
$l = (array) $l;
$m = (array) $m;
$n = (array) $n;
var_dump($j); // dumps array(1) { [0]=> int(5) }
echo "<hr>";
var_dump($k); // dumps array(1) { [0]=> float(5.34) }
echo "<hr>";
var_dump($l); // dumps array(1) { [0]=> string(5) "hello" }
echo "<hr>";
var_dump($m); // dumps array(1) { [0]=> bool(true) }
echo "<hr>";
var_dump($n); // dumps array(0) { }
echo "<hr>";

?>
</pre>

<?php
echo "<p>When casting to array, most data types converts into an indexed array with one element.</p>
<p>NULL values converts into an empty array object.</p>";