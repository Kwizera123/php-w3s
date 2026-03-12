
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Filters Advanced</title>
</head>
<body>
  <h1>PHP Filters Advanced</h1>
  <p>Validate an Integer Within a Range <br>
    The following example uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200:<br>
  </p>
    <?php
    $int = 122;
    $min = 1;
    $max = 200;
if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");

}
?>
<hr>
<h2>Validate IPv6 Address</h2>
<p>The following example uses the filter_var() function to check if the variable $ip is a valid IPv6 address:</p>
<?php
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo ("$ip is a valid IPv6 address");
} else {
  echo ("$ip is not a valid IPc6 address");
}
?>

<hr>
<h2>Validate URL - Must Contain QueryString</h2>
<?php
$url = "https://www.w3schools.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  echo("$url is a valid URL with a query string");
} else {
  echo("$url is not a valid URL with a query string");
}
?>
<hr>
<h2>Remove Characters With ASCII Value > 127</h2>
<p>
  The following example uses the filter_var() function to sanitize a string. It will both remove all HTML tags, and all characters with ASCII value > 127, from the string:
</p>
<h1>Hello WorldÆØÅ!</h1>
<?php
$str = "<h1>Hello WorldÆØÅ!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>
</body>
</html>