<pre>
  <?php
  echo "
  <h1>PHP - Multidimensional Arrays</h1>
A multidimensional array is an array containing one or more arrays.<br>

PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.<br>

We can store the data from the table above in a two-dimensional array, like this:<br>
  ";

  $cars = array (
  array("Volvo", 22, 18),
  array("BMW", 15, 13),
  array("Saab", 5, 2),
  array("Land Rover", 17, 15)
  );

  echo "
  Now the two-dimensional cars array contains four arrays, and it has two indices: row and column.<br>

To access to the elements of the cars array we must point to the two indices (row and column):<br>
  ";

  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

  echo "<hr>";
  echo "
  <h2>PHP - Looping Through Multidimensional Arrays</h2>
To loop through a multidemensional array, use a for loop or a foreach loop.<br>

Here, we use a for loop inside another for loop to get the elements of the cars array (we still have to point to the two indices):<br>
  ";

  $cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</lu>";
}
echo "<hr>";
echo "Here, we use a foreach loop inside another foreach loop to get the elements of the cars array.<br>
Here we put the result in an HTML table:
";
?>

<body>

<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 10px;
}
</style>


  <?php
echo "<table>";
echo "<tr><th>Brand</th><th>Stock</th><th>Sold</th></tr>";

foreach($cars as $row){
  echo "<tr>";
  foreach($row as $cell) {
    echo "<td>" . $cell . "</td>";
  }
  echo "</td>";
}
echo "</table>";


  ?>
  </body>
</pre>