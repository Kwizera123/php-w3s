<pre>
<?php

$x = array("Volvo", "BMW", "Toyota");// indexed array
$y = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");// associative array

$x = (object) $x; // converts indexed array to object (object(stdClass)#6 (3) { ["0"]=> string(5) "Volvo" ["1"]=> string(3) "BMW" ["2"]=> string(6) "Toyota" })
$y = (object) $y; // converts associative array to object (object(stdClass

var_dump($x);
echo "<hr>";
var_dump($y);
echo "<hr>";

echo "
<p>Indexed arrays convert into objects with the index number as property name and the value as property value.

Associative arrays convert into objects with the keys as property names and values as property values.</p>
"
?>
</pre>
<?php
echo "<hr>";
echo(pi()); // outputs 3.1415926535898
echo "<hr>";
echo(min(0, 150, -8, -200)); // outputs -200
echo "<hr>";
echo(max(0, 150, -8, -200)); // outputs 200
echo "<hr>";
echo abs(-6.7); // outputs 6.7
echo "<hr>";
echo sqrt(64); // outputs 8
echo "<hr>";
echo (round(3.60)); // outputs 1
echo "<hr>";
echo (round(0.50)); // outputs 1
echo "<hr>";
echo (round(0.49)); // outputs 0
echo "<hr>";
echo (round(-4.40)); // outputs 4
echo "<hr>";
echo (round(-4.60)); // outputs 5
echo "<hr>";
echo (round(3.49)); // outputs 3
echo "<hr>";
echo (rand()); // outputs a random number
echo "<hr>";
echo (rand(10, 100)); // outputs a random number between 1 and 2
echo "<hr>";
?>