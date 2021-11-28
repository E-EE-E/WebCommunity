<?php session_start(); ?>
<?php
require("./Connect.php");
$conn = Login($Host, $UserID, $Password, $DatabaseName);
?>
<?php require("./LoginEscaping.php"); ?>
<?php
$sql = "SELECT * FROM `Login` WHERE UserId='".$Id."'";
$result = mysqli_query($conn, $sql);
if($result->num_rows>0)
{
  echo "<script>alert('Same Id is exist!');</script>";
  echo("<script>location.replace('./index.php?state=SignUp');</script>");
  exit;
}
$sql = "INSERT INTO `Login` (UserId, Password, reg_date) VALUES('".$Id."', '".$Password."', now())";
$result = mysqli_query($conn, $sql) or die('Create account failed');
echo "<script>alert('Account has been created!');</script>";
echo("<script>location.replace('./index.php');</script>");
?>
