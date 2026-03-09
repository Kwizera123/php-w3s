<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php Scope</title>
</head>
<body>
  <h3>Global Scope Example</h3>
  <?php 
  $x = 5; // global scope

  function myTest(){
    // using x inside this function will not work
    echo "Varable x inside function is : $x";
    echo "<br>";
  }
  myTest();

  echo "Varable x outside function is : $x";

  echo "<br>";
  echo "<Variable with local scope>";

  echo "<hr>";
  echo "<br>";

  function myTestlocal(){
    $y = 10; // local scope
    echo "Variable y inside function is : $y";
    echo "<br>";
  }
  myTestlocal();
  // using y outside the function will not work
  echo "Variable y outside function is : $y";

  echo "<hr>";
  echo "<br>";

  function myTeststatic(){
    static $z = 0; // static variable
    echo "Variable z inside function is : $z";
    $z++;
    echo "<br>";
  }
  myTeststatic();
  myTeststatic();
  myTeststatic();
  myTeststatic();

    echo "<hr>";
    echo "<br>";

    $a = 5; // global scope
    $b = 10; // global scope

    function myTestglobal(){
      global $a, $b; // access global variables

      $b = $a + $b; // local variable

      
    }
    myTestglobal();
    echo "Variable b outside function is : $b";

     echo "<hr>";
      echo "<br>";

    $e = 5; // global scope
    $f = 10; // global scope

      function myTestglobal1(){

$GLOBALS['f'] = $GLOBALS['e'] + $GLOBALS['f']; // access global variables using $GLOBALS array
      
    }
    myTestglobal1();
    echo "PHP $'GLOBALS' Superglobal - Variable f outside function is : $f";


  ?>
</body>
</html>
