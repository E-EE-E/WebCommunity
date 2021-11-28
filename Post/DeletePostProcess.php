<?php session_start(); ?>
<?php
require("./Connect.php");
$conn = Login($Host, $UserID, $Password, $DatabaseName);
?>
hi
<?php
$sql="DELETE FROM `Post` WHERE Id='".$_GET['id']."'";
$result = mysqli_query($conn, $sql);

$sql="DELETE FROM `Comment` WHERE PostId='".$_GET['id']."'";
$result = mysqli_query($conn, $sql);

echo "<script>alert('Post has been deleted!');</script>";
echo("<script>location.replace('./index.php');</script>");
?>
