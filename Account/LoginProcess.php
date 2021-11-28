<?php session_start(); ?>
<?php
require("./Connect.php");
$conn = Login($Host, $UserID, $Password, $DatabaseName);
?>
<?php require("./LoginEscaping.php"); ?>
<?php
$sql = "SELECT * from `Login` WHERE UserId='".$Id."' AND Password='".$Password."'";
$result = mysqli_query($conn, $sql);
if($result->num_rows==1)
{
  $row=mysqli_fetch_assoc($result);
  $_SESSION['Number']=$row['id'];
  $_SESSION['Id']=$row['UserId'];
  $_SESSION['Password']=$row['Password'];
  //$_SESSION['Id']=htmlspecialchars($row['UserId']);
  //$_SESSION['Password']=htmlspecialchars($row['Password']);
}
else
{
  echo("<script>alert('Id or Password is wrong')</script>");
}
echo("<script>location.replace('./index.php');</script>");
?>
