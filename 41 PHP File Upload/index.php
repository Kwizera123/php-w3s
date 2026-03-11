<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP File Upload</title>
</head>
<body>
  <h1>PHP File Upload</h1>
  <p>
    With PHP, it is easy to upload files to the server.<br>

However, with ease comes danger, so always be careful when allowing file uploads!
  </p>
  <h2>Configure The "php.ini" File</h2>
  <p>
    First, ensure that PHP is configured to allow file uploads.<br>

In your "php.ini" file, search for the file_uploads directive, and set it to On:<br>
  <b>file_uploads = On</b><br>
  </p>

  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  </form>

  <h2>Create The Upload File PHP Script</h2>
<p>The "upload.php" file contains the code for uploading a file:</p>

</body>
</html>