<div id="Section">
  <input type="button" value="Make post" onclick="location='./index.php?state=MakePost'"/>
  <table>
    <thead>
      <tr>
        <th id="Post_Number">글번호</th>
        <th id="Post_Author">글쓴이</th>
        <th id="Post_Title">제목</th>
      </tr>
    </thead>
    <?php
    $sql='SELECT * FROM `Post`';
    $result = mysqli_query($conn, $sql) or die("자료검색 실패");
    while($row=mysqli_fetch_assoc($result))
    {?>
      <tbody>
        <tr>
          <td id="Post_Number"><?php echo "".$row['id'].""; ?></td>
          <td id="Post_Author"><?php echo "".htmlspecialchars($row['UserId']).""; ?></td>
          <td id="Post_Title"><a href="./index.php?state=ReadPost&id=<?php echo "".$row['id'].""; ?>"><?php echo "".htmlspecialchars($row['Title']).""; ?></a></td>
        </tr>
      </tbody>
      <?php
    }
    ?>
  </table>
</div>
