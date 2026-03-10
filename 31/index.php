<pre>
  <?php
  echo "<h1>PHP GLOBALS Superglobal</h1>
  <h2>Global Variables</h2>
Global variables are variables that can be accessed from any scope.<br>
  ";
$x = 75;

function myFunction() {
  echo $GLOBALS['x'];
}
myFunction();

echo "<hr>";
$x = 85;

function myfunction1(){
  global $x;
  echo $x;
}

myFunction();
echo "<hr>";
echo "<h1>Create Global Variables</h1>
Variables created in the outer most scope are global variables either if they are created using the GLOBALS syntax or not.
";

$y = 100;
echo $GLOBALS['y'];
echo $y;
echo "<hr>";

$a = 10;
$b = 20;

function result() {
  $GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b'];
}
result();
echo $z;
echo "<hr>";
echo "<h1>PHP S_SERVER Superglobal</h2>";
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];

echo "<hr>";
echo "In the example below we have put the HTML form and PHP code in the same PHP file:
<br>";

  ?>
</pre>

<html>

<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // collect value of input field
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
  ?>
</body>
</html>