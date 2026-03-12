
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php filters</title>
  <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
  </style>
</head>
<body>
  <h1>PHP Filters</h1>
  <h2>PHP filter_list() Function</h2>
  <table>
    <tr>
      <th>Filter Name</th>
      <th>Filter ID</th>
    </tr>
    <?php
    foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
    ?>
  </table>
  <hr>
  <h2>Sanitize and Validate an Email</h2>
  <?php
  $email = "john.doe@example.com";

  // Remove illegal characters from email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo ("$email is a valid email address");
  } else {
    echo ("$email is not a valid email addresss");
  }
  ?>
<hr>
<h2>Sanitize and Validate a URL</h2>

<?php
  $url = "https://www.codinglearners.com";

  // Remove illigal characters from url
  $url = filter_var($url, FILTER_SANITIZE_URL);

  // Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
?>
<hr>
<h2>Validate an Integer</h2>
<?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo ("Integer is valid");
} else {
  echo ("Interger is not valid");
}
?>
<hr>
<h2>Tip: filter_var() and Problem With 0</h2>
<p>In the example above, if $int was set to 0, the function above will return "Integer is not valid". To solve this problem, use the code below:</p>

<?php
$int = 0;

if(filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo ("Integer is valid");
} else {
  echo ("Integer is not valid");
}
?>
<hr>
<h2>Validate an IP Address</h2>
<p>
  The following example uses the filter_var() function to check if the variable $ip is a valid IP address:
</p>
<?php
$ip = "127.0.0.1";

if(!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo ("$ip is a valid IP address");
} else {
  echo ("$ip is not a valid IP address");
}
?>
</body>
</html>