<?php require("../AccessInfo.php"); ?>
<?php
  $conn = mysqli_connect($Host, $UserID, $Password) or die('MySQL connecting failed');
  mysqli_select_db($conn, $DatabaseName) or die('Database connecting failed');

  $sql = "CREATE TABLE `Login` (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  UserId VARCHAR(30) NOT NULL,
  Password VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP NOT NULL
  )";
  $result = mysqli_query($conn, $sql) or die('Create table failed');
  echo 'Create table success<br>';

  $sql = "CREATE TABLE `Post` (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  UserId VARCHAR(30) NOT NULL,
  Title VARCHAR(50) NOT NULL,
  Contents VARCHAR(2048) NOT NULL,
  Date TIMESTAMP NOT NULL
  )";
  $result = mysqli_query($conn, $sql) or die('Create table failed');
  echo 'Create table success<br>';

  $sql = "CREATE TABLE `Comment` (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  PostId INT(6) UNSIGNED NOT NULL,
  UserId VARCHAR(30) NOT NULL,
  Contents VARCHAR(2048) NOT NULL,
  Date TIMESTAMP NOT NULL
  )";
  $result = mysqli_query($conn, $sql) or die('Create table failed');
  echo 'Create table success<br>';
?>
