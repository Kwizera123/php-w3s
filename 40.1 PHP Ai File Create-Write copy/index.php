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



<?php
// From chatgpt 
//1. Creating a New File
$filename = "example.txt"; // file name
$file = fopen($filename, "w"); // "w" = write mode (creates new file)
if ($file) {
    echo "File created successfully!";
    fclose($file); // close the file
} else {
    echo "Failed to create file.";
}
?>

<?php
// 2. Writing Content to a File
$filename = "example.txt";
$file = fopen($filename, "w");

if ($file) {
    $text = "Hello, this is PHP writing to a file!";
    fwrite($file, $text); // write content
    fclose($file);
    echo "Content written successfully!";
} else {
    echo "Cannot open file.";
}
?>

<?php
//3. Append Content to an Existing File
$filename = "example.txt";
$file = fopen($filename, "a"); // "a" = append mode

if ($file) {
    $text = "\nThis line is added to the file.";
    fwrite($file, $text);
    fclose($file);
    echo "Content appended successfully!";
} else {
    echo "Cannot open file.";
}
?>

<?php
//4. Using file_put_contents() (Simpler Way)
$filename = "example.txt";
$content = "This is written using file_put_contents.";

if (file_put_contents($filename, $content)) {
    echo "File created and content written!";
} else {
    echo "Failed to write file.";
}
?>

</body>
</html>