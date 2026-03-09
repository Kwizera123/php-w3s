<?php
echo "<h1>PHP Functions</h1>";
echo "PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task. Please check out our PHP reference for a complete overview.<br>";

echo "The following example creates a function named myMessage():<br>";

function myMessage() {
  echo "Hello world";
}

myMessage();
echo "<hr>";
echo "<h1>PHP Function Parameters</h1>";

function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Kwiz");
familyName("King");
familyName("John Okel");
familyName("Borge");

echo "<hr>";
echo "The following example has a function with two parameters (fname, year):<br>";

function familyName1($sname, $year) {
  echo "$sname, Born in $year.<br>";
}

familyName1("Joy", "1975");
familyName1("Keila", "1990");
familyName1("Ombeni", "2000");
familyName1("Luck", "2001");

echo "<hr>";
echo "<h1>PHP Default Parameter Value</h1>";
echo "The following example shows how to use a default parameter.<br>";

function setHeight($height = 50) {
  echo "the height is : $height <br>";
}
setHeight(250);
setHeight(); // will take the default value of 50

echo "<h1>PHP Functions - Returning values</h1";
echo "The return statement immediately ends the execution of a function, and returns a value back to the line of code that called it:<br>";

function sum($x, $y) {
  $z = $x + $y;
  return $z ;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
echo "<hr>";
echo "<h1>Passing Arguments by Reference</h1>";
echo "Arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.<br>";

function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
echo "<hr>";
echo "<h1>Variable Number of Parameters</h1>
By using the ... operator in front of the function parameter, the function accepts an unknown number of parameters. This is also called a variadic function.

The variadic function argument becomes an array.<br>";
echo " A function that do not know how many arguments it will get:<br>";
function sumMyNumbers(...$a) {
  $n = 0;
  $len = count($a);
  for($i = 0; $i < $len; $i++) {
    $n += $a[$i];
  }
  return $n;
}

$b = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $b;
echo "<hr>";
echo "<br>You can only have one argument with variable length, and it has to be the last argument.<br>
The variadic argument must be the last argument:<br>
";
function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;
echo "<hr>";
echo "If the variadic argument is not the last argument, you will get an error.<br>
<i><b>Having the ... operator on the first of two arguments, will raise an error:</b></i><br>
// ";
// function myFamily1(...$lastname, $firstname) {
//   $txt = "";
//   $len = count($firstname);
//   for($i = 0; $i < $len; $i++) {
//     $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
//   }
//   return $txt;
// }

// $a = myFamily("Doe", "Jane", "John", "Joey");
// echo $a;
echo "<h1>PHP is a Loosely Typed Language</h1>
<p>PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set, you can do things like adding a string to an integer without causing an error.</p>

<p>From PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a 'Fatal Error' if the data type mismatches.</p>

<p>To specify strict mode, we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.</p>

In the following example we send both a number and a string to the function, but here we have added the strict declaration:<br>
";

//  declare(strict_types=1); // strict requirement
// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days");
// since "5 days" is not an integer, an error will be throhn
echo "<hr>";
echo "
<h1>PHP Return Type Declarations</h1>
PHP also supports Type Declarations for the return statement.

<p>To declare a data type for the function return, add a colon ( : ) and the data type right before the opening curly ( { ) bracket when declaring the function.</p>

In the following example we specify the return type (float) for the function:<br>
";
declare(strict_types=1); //strict requirement
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2); 

