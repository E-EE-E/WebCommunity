<?php session_start(); ?>
<?php
require("./Connect.php");
$conn = Login($Host, $UserID, $Password, $DatabaseName);
?>
<?php
$sql="DELETE FROM `Comment` WHERE Id='".$_GET['id']."'";
$result = mysqli_query($conn, $sql);
echo "<script>alert('Comment has been deleted!');</script>";
echo "<script>location.replace('./index.php?state=ReadPost&id=".$_GET['post']."');</script>";
?>
