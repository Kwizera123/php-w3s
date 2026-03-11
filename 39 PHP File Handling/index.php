<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP File Handling</title>
</head>
<body>
<h1> PHP File Handling</h1>
<p>File handling is an important part of any web application. You often need to open and process a file for different tasks.<br>

PHP has several built-in functions for creating, reading, uploading, and editing files.<br>

The core functions for file handling is:<br>

<ul>
  
<li>readfile() - reads a file and writes it to the output buffer</li>
<li>fopen() - opens a file (gives you more options than the readfile() function)</li>
<li>fread() - reads from a file</li>
<li>fgets() - reads a single line from a file</li>
<li>fgetc() - reads a single character from a file</li>
<li>feof() - checks if the "end-of-file" (EOF) has been reached</li>
<li>fwrite() - writes to a file</li>
<li>fclose() - closes an open file</li>
<li>unlink() - deletes a file</li>
</ul>
<h2>PHP readfile() Function</h2>
<p>The readfile() function reads a file and writes its contents to the output buffer (usually the browser)</p>

<?php
echo readfile("webdictionary.txt");
?>
<hr>
<h2>PHP fopen() - Open a file</h2>
<?php
$myfile = fopen("webdictionary.txt","r") or die("Error: Unable to open file!");
echo fread($myfile, filesize("webdictionary.txt"));
fread($myfile, 50);
  ?>
  <hr>
  <h2>PHP fclose() - Close a File</h2>
 <?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>
<hr>
<h2>PHP feof() - Check End-Of-File</h2>
  <p>

  The feof() function checks if the "end-of-file" (EOF) has been reached.<br>

The feof() function is useful for looping through data of unknown length.<br>

The example below reads the "webdictionary.txt" file line by line, until end-of-file is reached:

  </p>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
<hr>
<h2>PHP fgetc() - Read a Single Character </h2>
<p>
The fgetc() function reads a single character from a file.<br>

The example below reads the "webdictionary.txt" file character by character, until end-of-file is reached:</p>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one by one character, until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>

</body>
</html>