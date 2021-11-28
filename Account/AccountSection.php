<div id="Section">
  <?php if(!isset($_SESSION['Id']))
  {?>
    <form class="" action="./LoginProcess.php" method="post">
      <?php require("./AccountForm.html"); ?>
      <input type="submit" value="Login"/>
      <input type="button" value="Sign up" onclick="location.href='../SignUp/index.php?state=SignUp'"/>
    </form>
  <?php }
  else
  {
    //$_SESSION['Password']=htmlspecialchars($row['Password']);
    echo "'".htmlspecialchars($_SESSION['Id'])."' is login!<br/>";
    ?>
    <input type="button" value="Logout" onclick="location.href='./LogoutProcess.php'">
    <?php
  }
  ?>
</div>
