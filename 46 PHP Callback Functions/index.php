<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Callback Functions</title>
</head>
<body>
  <h1>PHP Callback Functions</h1>
  <p>A callback function is a function that is passed as an argument into another function.</p>
  <h2>Use a Named Function as a Callback</h2>
  <?php
  // Define the named callback function
  function myfunction($n) {
    return($n * $n);
  }
  // Array of number to multiply
  $numbers = [1, 2, 3, 4, 5];

  // Use array_maap with the myfunction function as a callback
  print_r(array_map("myfunction", $numbers));
  ?>
  <hr>
  <h1>Use an Anonymous Function as a Callback</h1>
  <p>
    An anonymous function is defined inline, and is most often used when a one-off function is needed. <br>

    Here we pass an anonymous function as a callback function:
  </p>
  <?php
  $numbers = [1, 2, 3, 4, 5];
  $res = array_map(function($n) {return($n * $n);}, $numbers);
  print_r($res);
  ?>
  <hr>
  <h1>PHP Callbacks in User Defined Functions</h1>
  <p>
    User-defined functions and methods can also take callback functions as arguments. To use callback functions inside a user-defined function or method, call it by adding parentheses to the variable and pass arguments as with normal functions:
  </p>

  <?php
    function exclaim($str) {
      return $str . "! ";
    }

    function ask($str) {
      return $str . "? ";
    }

    function printformatted($str, $format) {
      echo $format($str);
    }

    // Pass "exclaim" and "ask" as callback function
    printformatted("Hello world", "exclaim");
    echo "<br>";
    printformatted("Hello world", "ask");

  ?>
</body>
</html>