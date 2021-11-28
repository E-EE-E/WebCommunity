<div id="Section">
  <?php
  $sql="SELECT * FROM `Post` WHERE Id='".$_GET['id']."'";
  $result = mysqli_query($conn, $sql);
  if(!$PostRow=mysqli_fetch_assoc($result))
  {
    echo "<script>alert('None exist Post');</script>";
    echo("<script>location.replace('./index.php');</script>");
  }
  ?>
  <h1>
    <?php echo "".htmlspecialchars($PostRow['Title']).""; ?>
  </h1>
  <div>
    <?php echo "".htmlspecialchars($PostRow['Contents']).""; ?>
  </div>

  <br>

  <!-- Delete Button for author -->
  <?php
  if($PostRow['UserId']==$_SESSION['Id'])
  {?>
  <input type="button" value="Delete Post" onclick="location.replace('./DeletePostProcess.php?id=<?php echo "".$PostRow['id'].""; ?>')"/>
  <?php
  }?>
</div>
