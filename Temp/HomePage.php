<?php session_start(); ?>
<?php require("./Connect.php"); ?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8" />
	<title>안녕~~~~</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
	<header>
		<h1>Test site</h1>
	</header>

	<!-- login section -->
	<?php if(!isset($_SESSION['Id']))
	{?>
		<form class="" action="./LoginProcess.php" method="post">
			<?php require("./AccountForm.html"); ?>
			<input type="submit" value="Login"/>
			<input type="button" value="Sign up" onclick="location.href='./SignUp.php'"/>
		</form>
	<?php }
	else
	{
		?>
		<div id="LoginDiv">
			<?php
			echo "'".$_SESSION['Id']."' is login!<br/>";
			?>
			<div id="control">
				<input type="button" value="Logout" onclick="location.replace('./LogoutProcess.php');">
			</div>
		</div>
		<?php
	}
	?>

	<br>
	<br>
	<br>
	<br>

	<input type="button" value="Make post" onclick="location='./MakePost.php'"/>
	<br>

	<?php require("./PostList.php"); ?>







</body>

</html>
