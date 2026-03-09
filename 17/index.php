<?php
print "<h1>PHP switch Statement</h1>";

echo "<p>The switch statement is used to perform different actions based on different conditions.

Use the switch statement to select one of many blocks of code to be executed.</p>";
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
      case "green":
        echo "Your favorite color is green!";
        break;
        default:
          echo "Your favorite color is neither red, blue, nor green!";
}
echo "<hr>";
echo "The PHP default Keyword
The default keyword specifies the code to run if there is no case match:<br><br>";
$q = 4;

switch ($q) {
  case 6:
  echo "Today is Saturday";
  break;
  case 0:
    echo "Today is Sunday";
    break;
    default:
      echo "Looking forward to the Weekend";
}
echo "<hr>";
echo "<h2>Combining Cases</h2>
If you want multiple cases to use the same code block, you can specify the cases like this:<br><br>";

$s = 3;

switch ($s){
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:
    echo "The week feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekend are best!";
    break;
  default:
  echo "Somethign went wrong.";
}
echo "<hr>";
echo "<h1>The PHP Match Expression</h1>";
echo "<p>The match expression provides a new way to handle multiple conditional checks (like the switch statement).</p>";

$favcolor1 = "red";

$text = match($favcolor1){
  "red" => "Your favorite color is red!",
  "blue" => "Your favorite color is blue!",
  "green" => "Your favorite color is green!",
  default => "Your favorite color is neither red, blue, nor green!"
};
echo $text;
echo "<hr>";
echo "<h1>Match Multiple Values</h1>
If you want the match expression to match multiple values for the same code block, you can group them with commas, like this: <br><br>";

$day = 3;

$text1 = match($day){
  1,2,3,4,5 => "The week feels so long!",
  6,0 => "Weekend are best!",
  default => "Invalid day.",
};
echo $text1;
echo "<hr>";
echo "<h1>The default Keyword</h1>
In a match expression, there must be a condition that matches the expression, or a default case, to handle it.";

$mycolor = "pink";// This will not match any case

try {
    $txt = match($mycolor){
        "red" => "Your favorite color is red!",
        "blue" => "Your favorite color is blue!",
        "green" => "Your favorite color is green!",
        // default => "Your favorite color is neither red, blue, nor green!"
    };
} catch (\UnhandledMatchError $e) {
    var_dump($e);
}
echo $txt;
echo "<hr>";

$fcolor = "black";

try {
  $taxt = match($fcolor) {
  "yellow" => "Your favorite color is yellow!",
  "orange" => "Your favorite color is orange!",
  "indigo" => "Your favorite color is indigo!",
  };
} catch (\UnhandledMatchError $e) {
    var_dump($e);
}

echo $taxt;
?>