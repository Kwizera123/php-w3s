<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Date and Time</title>
</head>
<body>
  <h1>PHP Date and Time</h1>

  <?php
  echo "Today is " . date("Y/m/d") . "<br>";
  echo "Today is " . date("Y.m.d") . "<br>";
  echo "Today is " . date("Y-m-d") . "<br>";
  echo "Today is " . date("l") . "<br>";
   echo "Today is " . date("l, F j, Y");
  ?>
<hr>
  <h1>PHP Tip - Automatic Copyright Year</h1>
  <p>Use the date() function to automatically update the copyright year on your website:</p>
  &copy; 2010-<?php echo date("Y");?>
<hr>
 <h1>Display the Time</h1> 
 <p> The date() function is also used to format a local time to a more readable format.</p>

 <?php
 echo "The time is " . date("H:i:s") . "<br>";
 echo "The time is " . date("h:i:s") . "<br>";
  ?>
<hr>
  <h1>The PHP date_default_timezone_set() Function</h1>
<p>Note that the date() function will return the current local date/time of your server!<br>

To get the date and time to be correct according to a specific location, also set the timezone you want to use, with the date_default_timezone_set() function.<br>

The example below sets the timezone to "America/New_York", then outputs the current date and time in the specified format:</p>
<?php
// set default timezone
date_default_timezone_set("America/New_York");

echo "The current date and time in America/New York is " . date("Y-m-d H:i:s");
?>
<hr>

</body>
</html>