<?php
// Resume the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destroy a PHP Session</title>
</head>
<body>
  <h2>Destroy a PHP Session</h2>
  <p>
    Next, we create another PHP page called "logout.php". Here we will unset all session variables and destroy the session (with session_unset() and session_destroy()):
  </p>

  <?php
  // Unset all session variable
  session_unset();

  // Destroy the session
  session_destroy();

  echo "You have been logged out.";
  echo "<br>";
  echo "All session variables are now removed, and the session is destroyed.";
?>

</body>
</html>