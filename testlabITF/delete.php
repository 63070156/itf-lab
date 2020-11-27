<?php
require('connect.php');
$id=$_GET['id'];
$sql="DELETE FROM datainsert WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "insert data successfully";
    echo "<a href='index.php'>back to home page</a>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>