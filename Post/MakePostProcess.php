<?php session_start(); ?>
<?php
require("./Connect.php");
$conn = Login($Host, $UserID, $Password, $DatabaseName);
?>
<?php require("./PostEscaping.php"); ?>
<?php
$sql = "INSERT INTO `Post` (UserId, Title, Contents, Date) VALUES('".$_SESSION['Id']."', '".$Title."', '".$Contents."', now())";
$result = mysqli_query($conn, $sql) or die('Create account failed');
echo "<script>alert('Post!');</script>";
echo("<script>location.replace('./index.php');</script>");
?>
