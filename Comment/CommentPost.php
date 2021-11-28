<div id="Section">
  <table>
    <?php
    $sql="SELECT * FROM `Comment` WHERE PostId='".$_GET['id']."'";
    $result = mysqli_query($conn, $sql) or die("자료검색 실패");
    ?>
    <tbody>
      <?php
      while($CommentRow=mysqli_fetch_assoc($result))
      {?>
        <tr>
          <td id="Post_Number"></td>
          <td id="Post_Author"><?php echo "".htmlspecialchars($CommentRow['UserId']).""; ?></td>
          <td><?php echo " : "; ?></td>
          <td id="Post_Title"><?php echo "".htmlspecialchars($CommentRow['Contents']).""; ?></td>
          <td>
            <?php
            if($CommentRow['UserId']==$_SESSION['Id'])
            {?>
              <input type="button" value="Delete Comment" onclick="location.replace('./DeleteCommentProcess.php?id=<?php echo "".$CommentRow['id'].""; ?>&post=<?php echo "".$PostRow['id'].""; ?>')"/>
              <?php
              //button 의 위치가 문제있음
            }?>
          </td>
        </tr>
        <?php
      }?>
    </tbody>
  </table>

  <form id="CommentForm" action="./CommentPostProcess.php?id=<?php echo "".$PostRow['id'].""; ?>" method="post">
    <div id="Title">
      Comments : <textarea name="Contents" form="CommentForm" rows="1" cols="50">Input your comment</textarea>
    <input type="submit" value="done"/>
    </div>
  </form>

</div>
