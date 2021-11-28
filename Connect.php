<?php require("./AccessInfo.php"); ?>
<?php
  function Login($Host, $UserID, $Password, $DatabaseName)
  {
    $conn = mysqli_connect($Host, $UserID, $Password) or die('MySQL connecting failed');
    mysqli_select_db($conn, $DatabaseName) or die('Database connecting failed');
    return $conn;
  }

  //$conn = Login($Host, $UserID, $Password, $DatabaseName);
  //echo var_dump($conn);
?>
