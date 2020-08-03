
<?php
		session_start();
	   $conn = mysqli_connect("localhost", "root", "", "truyen_tranh");

	if (isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '' && $_POST["email"] != '' && $_POST["address"] != ''  && $_POST["birthday"] != '') {
		# thực hiện xử lý
	$username = $_POST["username"];
	$password = $_POST["password"];
	$repassword = $_POST["repassword"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$birthday = $_POST["birthday"];
	if( $password != $repassword){
		$_SESSION["thongbao"] = "Repassword không chính xác !";
		header("location:registe1.php");
		die();
		}
		$old = 0;
	$sql = "SELECT * FROM login where username = '$username' ";
	$old = mysqli_query($conn, $sql);
	$password = md5($password);
	if(mysqli_num_rows($old) > 0){
		$_SESSION["thongbao"] = "Username đã tồn tại !";
		header("location:register1.php");
		die();
	}
	
	$sql = "INSERT INTO info(username, password, email, address, birthday) values('$username', '$password', '$email', '$address', '$birthday')";
		mysqli_query($conn, $sql);
		$_SESSION["thongbao"] = "Đã đăng ký thành công !";
		header("location:register1.php");
	//	echo "Đã đăng ký thành công !!!";		
		
	}
	else{
		$_SESSION["thongbao"] = "vui lòng nhập đầy đủ thông tin !";
		header("location:register1.php");
	}
?>

/*
function Fibonacci(num){
var a=1,b=0,temp;
while(num>=0){
temp=a;
a=a+b;
b=temp;
num--;}
return b;
}
*/