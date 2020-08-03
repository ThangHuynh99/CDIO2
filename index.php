<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header("location:register.php");
	}
?>

<h1>Phải đăng nhập mới vào được</h1>

<a href="logout.php" title="logout">Log out</a>