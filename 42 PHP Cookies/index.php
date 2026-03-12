<?php
$cookie_name = "username";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php
// set the expiration date to one hour ago
setcookie("username", "", time() - 3600);
?>

<?php
  setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<head>
  <title>PHP Cookies</title>
</head>
<body>
  <h1>PHP Cookies</h1>
  <h2>What is a Cookie?</h2>
  <p>A cookie is a small text file that the server stores in the user's web browser. The cookie is then sent along with each HTTP request to the server.</p>
  <hr>
  <?php
  if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  } else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
  }
  ?>
<hr>
  <?php
  echo "Cookie 'username' is deleted.";
  ?> 
  <hr>
  <h2>Check if Cookies are Enabled</h2>
  <?php
  if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
  } else {
    echo "Cookies are disabled.";
  }
  ?>
</body>
</html>