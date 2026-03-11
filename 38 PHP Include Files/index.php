<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Include Files</title>
</head>
<body>
  <div class="menu">
  <?php include 'menu.php';?>
  </div>
  <h1>PHP include and require Statements</h1> 

  <h1>Welcome to Home Page!<br>
    PHP Include Footer
</h1>
  <p>
    Including files saves a lot of work. This means that you can create a standard header, footer, or menu file for all your webpages. Then, when the header needs to be updated, you can only update the header include file
  </p>
  <h2>PHP Include Navigation Menu</h2>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente quam esse optio quae impedit consequuntur, reprehenderit culpa sed ea minus. Minima, consequatur possimus?</p>
  <h2>PHP Include Variables</h2>
  <p>Then, if we include the "vars.php" file, the variables can be used in the calling file:</p>
  <?php include 'vars.php';
  echo "I have a $color $car."
  ?>
  <h2>PHP include vs. require</h2>
  <p>If a file is included with the include statement, and PHP cannot find it, the script will continue to execute:</p>

  <h1>Welcome to Include!</h1>
<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>

  <h1>Welcome to Require!</h1>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>




  <?php include 'footer.php';?>

</body>
</html>