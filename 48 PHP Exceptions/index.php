<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Exceptions</title>
</head>
<body>
  <h1>PHP Exceptions</h1>
  <h2>What is PHP Exceptions?</h2>
  <p>An exception is an unwanted or unexpected event that occurs during the execution of a PHP script.</p>

  <h2>PHP throw Keyword</h2>
  <p>The throw keyword is used to throw an exception.</p>

  <?php
  // function divide($x, $y) {
  //   if ($y == 0) {
  //     throw new Exception("Cannot divide by zero.");
  //   }
  //   return $x / $y;
  // }
  // echo divide(5, 0); // code that can throw an exception
  // echo 'Hello';

  ?>
  <hr>
  <h2>PHP try...catch Keyword</h2>
 <p>Here we use the try...catch keyword, to catch the exception/error from the example above and continue the script.</p>

 <?php
  function divide1($a, $b) {
    if ($b == 0) {
      throw new Exception("Cannot divide by zero.");
    }
    return $a / $b;
  }

  try {
    echo divide1(5, 0); // can throw an exception
  } catch(Exception $e) {
    echo 'Error: ' . $e->getMessage();
  }

  echo '<br>Hello';
  ?>
  <hr>
<h2>PHP try...catch...finally Keyword</h2>
<p>The try...catch...finally keyword can be used to catch exceptions.</p>
  <?php
function divide($x, $y) {
  if($y == 0) {
    throw new Exception("Cannot divide by zero.");
  }
  return $x / $y;
}

try {
  echo divide(5, 0); // can throw an exception
} catch(Exception $e) {
  echo 'Error: ' . $e->getMessage();
} finally {
  echo '<br>Process complete.';
}
?>
<hr>

</body>
</html>