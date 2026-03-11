<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>PHP Regular Expressions</h1>
<h2>Regex Modifier: i</h2>
<p>How many occurences of the letter s is in the text "W3Schools":</p>
  <?php
  $txt = "W3Schools";
  $pattern = "/s/i";
  echo preg_match_all($pattern, $txt);
?>
<p>The matches were found here:</p>
<?php
echo preg_replace($pattern, "#", $txt);
?>
<p>(Each match was replaced by a # character)</p>
</body>
</html>
