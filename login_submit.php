<?php
	session_start();
	$conn = mysqli_connect("localhost", "root", "", "truyen_tranh");

	if (isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' ){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$password = md5($password);
	$sql = "Select * from info where username = '$username' and password = '$password'";
		$user = mysqli_query($conn, $sql);
		if(mysqli_num_rows($user) > 0)
		{
			echo "Bạn đã đăng nhập thành công";
			$_SESSION["user"] = $username;
			header("location:index.php");

		}
		else
		{
			$_SESSION["thongbao"] = "Bạn đã nhập sai username hoặc password";
			header("location:index1.php");
		}
	}
	else{
		$_SESSION["thongbao"] = "Bạn chưa nhập username hoặc password";
		header("location:index1.php");
	}

?>