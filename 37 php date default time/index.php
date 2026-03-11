<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php DATE TIME</title>
</head>
<body>
  <h2>The PHP date_default_timezone_get() Function</h2>
<p>To return the default timezone used by all date/time functions in the script, use the date_default_timezone_get() function:</p>
<?php
echo date_default_timezone_get();
?>

<hr>
<h1>The PHP mktime() Function</h1>
<p>
The optional timestamp parameter in the date() function specifies a timestamp. If omitted, the current date and time will be used (as in the examples above).<br>

The mktime() function returns the Unix timestamp for a date. The Unix timestamp is the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.</p>
<?php
// Set the default timezone to use
date_default_timezone_set("UTC");

$d = mktime(0, 0, 0, 11, 6, 1987);
echo "October 3, 1975 was on a" . date("l", $d);
?>
<hr>
<h2>The PHP time() Function</h2>
<p>
  The time() function returns the current time as a Unix timestamp. The Unix timestamp is the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
</p>
<?php
echo "Now: " . time();
?>
<hr>
<p>Here we format the timestamp to a readable date and time:</p>

<?php
// Get the current Unix timestamp
$ts = time();

// Format timestamp
$curDate = date('Y-m-d H:i:s', $ts);

echo $curDate;
?>
<hr>
<h2>The PHP strtotime() Function</h2>
<p>The strtotime() function converts an English textual datetime string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT)
  .</p>
  <p>The strtotime() function is quite clever about converting a string to a date, so you can put in various values:</p>

  <?php
$d = strtotime("10:30pm November 15 2025");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("now");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+5 days");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+2 weeks 4 days 2 hours 20 seconds");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("last Sunday");
echo "Date is " . date("Y-m-d H:i:s", $d);
?>
<hr>
<h3><i>Tip: "The strtotime() is not perfect, so remember to check the strings you put in there!"</i></h3>

<h2>More Date Examples</h2>
<p>The following example outputs the dates for the next six Saturdays:</p>
<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>
</body>
</html>