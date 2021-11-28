<?php session_start(); ?>
<?php
require("./Connect.php");
$conn = Login($Host, $UserID, $Password, $DatabaseName);
?>
<?php //require("./LoginEscaping.php"); ?>
<?php
$sql = "SELECT * FROM `Comment` WHERE UserId='".$Id."'";
$result = mysqli_query($conn, $sql);
if($result->num_rows>0)
{
  echo "<script>alert('Same Id is exist!');</script>";
  echo("<script>location.replace('./index.php?state=SignUp');</script>");
  exit;
}
$sql = "INSERT INTO `Comment` (PostId, UserId, Contents, reg_date) VALUES('".$_GET['id']."', '".$_SESSION['Id']."', '".$_Post['contents']."', now())";
$result = mysqli_query($conn, $sql) or die('Create account failed');
echo "<script>alert('Comment has been created!');</script>";
echo("<script>location.replace('./index.php?state=ReadPost&id=".$_GET['id']."');</script>");
?>
