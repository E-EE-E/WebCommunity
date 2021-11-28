<?php
if(!$_GET['state'] || $_GET['state']=="home"){
  require("./Account/AccountSection.php");
  require("./Post/PostListSection.php");
}
else if($_GET['state']=="SignUp"){
  require("./SignUp/SignUp.php");
}
else if($_GET['state']=="PostList"){
  require("./Post/PostListSection.php");
}
else if($_GET['state']=="ReadPost"){
  require("./Account/AccountSection.php");
  require("./Post/Post.php");
  require("./Comment/CommentPost.php");
  require("./Post/PostListSection.php");
}
else if($_GET['state']=="MakePost"){
  require("./Account/AccountSection.php");
  require("./Post/MakePost.php");
}

?>
