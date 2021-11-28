<div id="Section">
  <?php if(!isset($_SESSION['Id']))
  {
    echo "<script>alert('Need login before posting');</script>";
    echo("<script>location.replace('./index.php');</script>");
  }
  ?>
  <form id="PostForm" action="./MakePostProcess.php" method="post">
   <ul>
     <li>
       <div id="Title">Title : </div><input type="text" name="Title" value="Input title"/>
     </li>
     <li>
       <div id="Title">Contents : </div><textarea name="Contents" form="PostForm" rows="10" cols="50">Input contents</textarea>
     </li>
   </ul>
   <input type="submit" value="done"/>
  </form>
</div>
