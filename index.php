<?php session_start(); ?>
<?php
require("./Connect.php");
$conn = Login($Host, $UserID, $Password, $DatabaseName);
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8" />
	<title>Hi~~~~</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
	<header>
		<h1><a href="./index.php">Home page</a></h1>
	</header>

	<?php
	//ignore error occuring by $_GET['state'] is not initialized at enter "index.php"
	error_reporting( error_reporting() & ~E_NOTICE );
	require("./FillContents.php");
	?>

</body>

</html>
