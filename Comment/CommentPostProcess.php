<?php session_start(); ?>
<?php
require("./Connect.php");
$conn = Login($Host, $UserID, $Password, $DatabaseName);
?>
<?php $Contents=mysqli_real_escape_string($conn, $_POST['Contents']); ?>
<?php
$sql = "INSERT INTO `Comment` (PostId, UserId, Contents, Date) VALUES('".$_GET['id']."', '".$_SESSION['Id']."', '".$Contents."', now())";
$result = mysqli_query($conn, $sql) or die('Comment to post failed');
echo "<script>alert('Comment has been created!');</script>";
echo("<script>location.replace('./index.php?state=ReadPost&id=".$_GET['id']."');</script>");
?>
