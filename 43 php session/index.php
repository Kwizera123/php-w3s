  <?php
  // Start the session
  // Resume the session
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Sessions</title>
</head>
<body>
  <h1>PHP Sessions</h1>
  <h2>What is a PHP Session?</h2>
  <p>
    Session variables hold information about one single user, and are available through all pages in one application.<br>

When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you close it. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.<br>

Session variables solve this problem by storing user information to be used across multiple pages (e.g. user logins, shopping carts, etc).<br>

By default, session variables last until the user closes the browser.<br>
  </p>

  <?php
  // SET session variable
  $_SESSION["favcolor"] = "Yellow";
  print_r($_SESSION);
  // $_SESSION["favanimal"] = "Cat";
  // echo "Session variables are set.";
  ?>

  
</body>
</html>