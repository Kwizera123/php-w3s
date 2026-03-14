<?php

namespace Html;
class Table {
  public $title = "";
  public $rows = 0;
  public function info() {
    echo "<p>$this->title has $this->rows rows.</p>";
  }
}

$table = new \Html\Table();
$table->title = "My table";
$table->rows = 5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Namespaces</title>
</head>
<body>
  <h1>PHP Namespaces</h1>
  <p>
    PHP namespaces are used to prevent naming conflicts between classes, interfaces, functions, and constants. <br>

Namespaces are used to group related code together under a name - to avoid naming conflicts when your code grows, or when you use code from multiple sources.
  </p>

  <?php
  $table->info();
  ?>
</body>
</html>