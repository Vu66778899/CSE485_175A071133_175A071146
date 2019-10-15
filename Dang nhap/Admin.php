<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		header("Localtion:login.php");
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Page for admin users</h1>
	<a href="login.php">Login</a>
</body>
</html>