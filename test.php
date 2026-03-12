<?php
// Resume the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retrieve PHP Session Variable Values
</title>
</head>
<body>
<h1>Retrieve PHP Session Variable Values</h1>

<?php
// Output session variables that were set on previous page
if(isset($_SESSION["favcolor"])) {
  echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
  echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
} else {
  echo "No session data found.";
}
?>
  
</body>
</html>