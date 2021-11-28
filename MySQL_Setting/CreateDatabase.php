<?php require("../AccessInfo.php"); ?>
<?php

  $conn = mysqli_connect($Host, $UserID, $Password) or die('MySQL connecting failed');

  $sql = "CREATE DATABASE `test_1`";
  //$sql = "CREATE DATABASE `test_1` CHARACTERSET utf8 COLLATE utf8_general_ci";
  $result = mysqli_query($conn, $sql) or die('Create database failed');
  echo 'Create database success';

?>
