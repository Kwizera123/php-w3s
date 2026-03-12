<?php
// Resume the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php show all session</title>
</head>
<body>
  <pre>
  <?php
  print_r($_SESSION);
  ?>
  </pre>
</body>
</html>