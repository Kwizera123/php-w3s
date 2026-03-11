<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP File Create/Write</title>
</head>
<body>
<h1>PHP File Create/Write</h1>
<p><h2>PHP fopen() - Create a File</h2><br>

<h1>PHP File Permissions</h1>
<p>If you are having errors when trying to get this code to run, check that you have granted your PHP file access to write information to the hard drive.</p>

<h2>PHP fwrite() - Write to File</h2>
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<h2>PHP Overwriting</h2>

<p>

Now that "newfile.txt" contains some data we can show what happens when we open an existing file for writing (using the w mode). All the existing data will be ERASED and we start with an empty file.<br>

In the example below we open our existing file "newfile.txt", and write some new data into it:
</p>

<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
<h2>PHP Append Text</h2>
<p>

You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.

In the example below we open our existing file "newfile.txt", and append some text to it:
</p>

<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
?>


</body>
</html>